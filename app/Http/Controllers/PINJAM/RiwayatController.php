<?php

namespace App\Http\Controllers\PINJAM;

use App\Http\Controllers\Controller;
use App\Models\Peminjam;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BemitoryRequest;

class RiwayatController extends Controller
{
    public function index(){
        $peminjam = Auth::user()->nama;
        $data  = Peminjaman::where('username','=',"$peminjam")->get();
        return view('pages.pinjam-bem.peminjaman.riwayat',compact('data'));
    }

    public function exportpdf(Request $request,$id){

        $data = Peminjaman::find($id);
        $path = base_path('public/logo-bem-fasilkom.png');
        $type = pathinfo($path,PATHINFO_EXTENSION);
        $datas = file_get_contents($path);
        $pic = 'data:image/'. $type . ';base64,'. base64_encode($datas);
        $paper_size = array(0, 0, 612.00, 1008.00);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled'=>true])->loadView('surat-peminjaman',compact(['pic']),['data' => $data])->setPaper($paper_size);
        return $pdf->download('sp-bemitory.pdf');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BemitoryRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['kode_barang']);

        $bemitory = Bemitory::findOrFail($id);

        if ($bemitory->update($params)) {
            $bemitory->touch();
            return redirect()->route('bemitory.index')->with('success', 'Data berhasil diperbarui');
        }

        return redirect()->route('bemitory.index')->with('error', 'Data gagal diperbarui');
    }
 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dibatalkan(Request $request,$id) {
        Peminjaman::find($id)->update(['status' => 'dibatalkan']);
        return redirect()->route('pinjam.riwayat');
}
}
