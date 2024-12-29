<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\BidangRequest;
use App\Models\Bidang;
use Illuminate\Http\Request;

use Str;

class BidangController extends Controller
{
    use Authorizable;

    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'struktur';
        $this->data['currentAdminSubMenu'] = 'bidang-departemen';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['bidang'] = Bidang::orderBy('nama', 'ASC')->paginate(10);

        return view('pages.admin.data.bidang-departemen.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bidangs = Bidang::orderBy('nama', 'ASC')->get();

        $this->data['bidangs'] = $bidangs->toArray();
        $this->data['bidang'] = null;

        return view('pages.admin.data.bidang-departemen.form-bidang', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BidangRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);

        Bidang::create($params);

        return redirect()->route('admin.struktur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bidang = Bidang::findOrFail($id);

        $this->data['bidang'] = $bidang;

        return view('pages.admin.data.bidang-departemen.form-bidang', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BidangRequest $request, $id)
    {
        $params = $request->except('_token');

        $bidang = Bidang::findOrFail($id);

        $bidang->update($params);

        return redirect()->route('admin.struktur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bidang = Bidang::findOrFail($id);

        $bidang->delete();

        return redirect()->route('admin.struktur');
    }
}
