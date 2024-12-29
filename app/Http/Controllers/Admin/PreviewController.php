<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PreviewRequest;
use App\Models\Preview;
use Illuminate\Http\Request;

use DB;
use Str;

class PreviewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'pkm';
        $this->data['currentAdminSubMenu'] = 'preview';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['previews'] = Preview::orderBy('created_at', 'ASC')->paginate(10);

        return view('pages.admin.pkm.preview.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pkm.preview.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreviewRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);
        $request->validate(
            [
                'file' => 'mimes:pdf|max:2048'
            ],
            [
                'file.mimes' => 'File harus berupa pdf.',
                'file.max' => 'Ukuran file maksimal 2MB.',
            ]
        );


        if ($request->file()) {
            $file = $request->file('file');
            $fileName = time() . '-' . $file->getClientOriginalName();

            $folder = '/uploads/pdf';
            $filePath = $file->storeAs($folder, $fileName, 'public');

            $params = [
                'judul' => $params['judul'],
                'slug' => $params['slug'],
                'bidang' => $params['bidang'],
                'tim' => $params['tim'],
                'path' => $filePath,
            ];
        }

        if (Preview::create($params)) {
            return redirect()->route('preview.index')->with('success', 'Proposal berhasil ditambahkan');
        }

        return redirect()->route('preview.index')->with('error', 'Proposal gagal ditambahkan');
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
        $preview = Preview::findOrfail($id);

        $this->data['preview'] = $preview;

        return view('pages.admin.pkm.preview.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PreviewRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);
        $request->validate(
            [
                'file' => 'mimes:pdf|max:2048'
            ],
            [
                'file.mimes' => 'File harus berupa pdf.',
                'file.max' => 'Ukuran file maksimal 2MB.',
            ]
        );

        $preview = Preview::findOrFail($id);


        if ($request->file()) {
            $file = $request->file('file');
            $fileName = time() . '-' . $file->getClientOriginalName();

            $folder = '/uploads/pdf';
            $filePath = $file->storeAs($folder, $fileName, 'public');

            $params = [
                'judul' => $params['judul'],
                'slug' => $params['slug'],
                'bidang' => $params['bidang'],
                'tim' => $params['tim'],
                'path' => $filePath,
            ];
        }

        if ($preview->update($params)) {
            return redirect()->route('preview.index')->with('success', 'Proposal berhasil diperbarui');
        }

        return redirect()->route('preview.index')->with('error', 'Proposal gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $preview = Preview::findOrFail($id);

        if ($preview->delete()) {
            return redirect()->route('preview.index')->with('success', 'Proposal berhasil dihapus');
        }

        return redirect()->route('preview.index')->with('error', 'Proposal gagal dihapus');
    }

    
}
