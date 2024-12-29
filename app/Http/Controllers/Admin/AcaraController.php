<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\AcaraRequest;
use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
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

        $this->data['currentAdminMenu'] = 'acara';
        $this->data['currentAdminSubMenu'] = '';

        $this->data['bulan'] = Acara::bulan();

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['acaras'] = Acara::orderBy('id', 'ASC')->paginate(5);

        return view('pages.admin.konten.acara.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.konten.acara.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcaraRequest $request)
    {
        $params = $request->except('_token');

        Acara::create($params);

        return redirect('admin/konten/acara');
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
        $acara = Acara::findOrFail($id);

        $this->data['acara'] = $acara;

        return view('pages.admin.konten.acara.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AcaraRequest $request, $id)
    {
        $params = $request->except('_token');
        $acara = Acara::findOrFail($id);

        $acara->update($params);

        return redirect('admin/konten/acara');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acara = Acara::findOrFail($id);

        $acara->delete();

        return redirect('admin/konten/acara');
    }
}
