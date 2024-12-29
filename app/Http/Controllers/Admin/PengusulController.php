<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengusulController extends Controller
{
    use Authorizable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'pkm';
        $this->data['currentAdminSubMenu'] = 'pengusul';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['users'] = User::orderBy('created_at', 'ASC')->paginate(10);

        return view('pages.admin.pkm.user.index', $this->data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        $anggotas = Anggota::forUser($user)->orderBy('status', 'DESC')->get();
        $proposals = Proposal::forUser($user)->orderBy('id', 'ASC')->get();

        $this->data['user'] = $user;
        $this->data['anggotas'] = $anggotas;
        $this->data['proposals'] = $proposals;

        return view('pages.admin.pkm.user.detail', $this->data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->delete()) {
            return redirect()->route('pengusul.index')->with('success', 'User berhasil dihapus');
        }

        return redirect()->route('pengusul.index')->with('error', 'User gagal dihapus');
    }

    public function showPdf($id)
    {
        $proposal = Proposal::where('id', $id)->first();

        $filePath = $proposal->path;

        return response()->file(public_path('storage/' . $filePath));
    }

    public function detail($id)
    {
        $user = User::all()->first();
        $proposal = Proposal::where('id', $id)->first();
        $anggotas = Anggota::forProposal($proposal)->orderBy('id', 'ASC')->get();

        $this->data['user'] = $user;
        $this->data['anggotas'] = $anggotas;
        $this->data['proposal'] = $proposal;

        return view('pages.admin.pkm.user.detail-proposal', $this->data);
    }
}
