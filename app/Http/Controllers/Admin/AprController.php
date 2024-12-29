<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;

use Str;

class AprController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'aplikasi';
        $this->data['currentAdminSubMenu'] = 'apr';

        $this->data['status'] = Report::status();
        $this->data['kategori'] = Report::kategori();

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah_pengaduan = Pengaduan::select(DB::raw("CAST(COUNT(*) as int) as jumlah_pengaduan"))
        ->GroupBy(DB::raw("Month(created_at)")) 
        ->pluck('jumlah_pengaduan');

        $perkuliahanac = Pengaduan::select(DB::raw('CAST(COUNT(*) as int) as perkuliahanac'))
        ->whereRaw("kategori = 'perkuliahan dan akademis'")
        ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
        ->pluck('perkuliahanac');

        $rektorat = Pengaduan::select(DB::raw('CAST(COUNT(*) as int) as rektorat'))
        ->whereRaw("kategori = 'rektorat'")
        ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
        ->pluck('rektorat');

        $sistem = Pengaduan::select(DB::raw('CAST(COUNT(*) as int) as sistem'))
        ->whereRaw("kategori = 'sistem'")
        ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
        ->pluck('sistem');

        $infrastruktur = Pengaduan::select(DB::raw('CAST(COUNT(*) as int) as infrastruktur'))
        ->whereRaw("kategori = 'infrastruktur'")
        ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
        ->pluck('infrastruktur');

        $event = Pengaduan::select(DB::raw('CAST(COUNT(*) as int) as event'))
        ->whereRaw("kategori = 'event'")
        ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
        ->pluck('event');

        $ormawa = Pengaduan::select(DB::raw('CAST(COUNT(*) as int) as ormawa'))
        ->whereRaw("kategori = 'ormawa'")
        ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
        ->pluck('ormawa');

        $lainnya = Pengaduan::select(DB::raw('CAST(COUNT(*) as int) as lainnya'))
        ->whereRaw("kategori = 'lainnya'")
        ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
        ->pluck('lainnya');

        $bulan = Pengaduan::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
        ->pluck('bulan');

        $this->data['reports'] = Report::orderBy('created_at', 'DESC')->paginate(5, ['*'], 'reports');
        $this->data['pengaduan'] = Pengaduan::orderBy('created_at', 'DESC')->paginate(5, ['*'], 'pengaduan');

        return view('pages.admin.apr.index',compact(
            'jumlah_pengaduan','bulan','perkuliahanac','rektorat','sistem','infrastruktur','event','ormawa','lainnya'
        ),$this->data);
    }

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function grafik()
    // {
    //     $jumlah_pengaduan = Pengaduan::select(DB::raw("CAST(COUNT(created_at) as int) as jumlah_pengaduan"))
    //     ->GroupBy(DB::raw("Month(created_at)")) 
    //     ->pluck('jumlah_pengaduan');

    //     $bulan = Pengaduan::select(DB::raw("MONTHNAME(created_at) as bulan"))
    //     ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
    //     ->pluck('bulan');

    //     return view('pages.admin.apr.grafik',compact('jumlah_pengaduan','bulan'));
    // }
    

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function tampil()
    // {
    //      return view('pages.admin.apr.index', ['index' => $this->data['reports'], 'index2' => $this->data['mantap']]);

    // }
    

    // return view('pages.admin.apr.index', $this->data);

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.apr.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);

        if ($request->has('image')) {
            $image = $request->file('image');
        
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();
        
            $folder = '/uploads/apr/images';
            $params['path'] = $image->storeAs($folder, $fileName, 'public');
        }
        
        $params = [
            'nama' => $params['nama'],
            'slug' => $params['slug'],
            'deskripsi' => $params['deskripsi'],
            'status' => $params['status'],
            'kategori' => $params['kategori'],
            'path' => $params['path'],
        ];
        
        if (Report::create($params)) {
            return redirect()->route('apr.index')->with('success', 'Advokasi berhasil ditambahkan');
        }
        
        return redirect()->route('apr.index')->with('error', 'Advokasi gagal ditambahkan');
   
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['reports'] = Report::findOrFail($id);

        return view('pages.admin.apr.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Report::findOrFail($id);

        $this->data['report'] = $report;
        
        return view('pages.admin.apr.form', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buatapr($id)
    {
        $item = Pengaduan::findOrFail($id);

        $this->data['pengaduan'] = $item;
        
        return view('pages.admin.apr.buatapr', $this->data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReportRequest $request, $id)
    {
        // asli
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);

        $report = Report::findOrFail($id);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/apr/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

          $params = [
                'nama' => $params['nama'],
                'slug' => $params['slug'],
                'path' => $filePath,
                'deskripsi' => $params['deskripsi'],
                'status' => $params['status'],
            ];
            
            Storage::delete($request->path);
        }

        if ($report->update($params)) {
            $report->touch();
            return redirect()->route('apr.index')->with('success', 'Advokasi berhasil diperbarui');
        }

        return redirect()->route('apr.index')->with('error', 'Advokasi gagal diperbarui');
    }
        
    //     $params = $request->validated();
    //     $params['slug'] = Str::slug($params['nama']);

    //     $report = Report::findOrFail($id);

    //     if ($request->has('image')) {
    
    // // bisa ganti photo dan delete resource pake nama yang sama kalo ada -- khoirul
            
    //         $destination = $report->path;
    //         if(File::exists($destination)){
    //           File::delete($destination); 
    //         }
            
    //         $image = $request->file('image');
    //         $name = $params['slug'] . '_' . 'hello';
    //         $fileName = $name . '.' . $image->getClientOriginalExtension();

    //         $folder = '/uploads/apr/images';
    //         $filePath = $image->storeAs($folder, $fileName, 'public');

    //       $params = [
    //             'nama' => $params['nama'],
    //             'slug' => $params['slug'],
    //             'path' => $filePath,
    //             'deskripsi' => $params['deskripsi'],
    //             'status' => $params['status'],
    //         ];
            
    //         Storage::delete($request->path);
    //     }

    //     if ($report->update($params)) {
    //         $report->touch();
    //         return redirect()->route('apr.index')->with('success', 'Advokasi berhasil diperbarui');
    //     }

    //     return redirect()->route('apr.index')->with('error', 'Advokasi gagal diperbarui');
        
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Report $report)
    {
        $report = Report::findOrFail($id);
        
        // if($report->path) {
        //     Storage::delete($reports->foto);
        // }

        if ($report->delete()) {
            return redirect()->route('apr.index')->with('success', 'Advokasi berhasil dihapus');
        }
        
        // Report::destroy($report->id);

        // return redirect()->route('apr.index')->with('success', 'Advokasi berhasil dihapus');
    }

    // public function dikaji($id) {
    //     Pengaduan::find($id)->update(['status_pengaduan' => 'dikaji']);
    //     return redirect()->route('apr.index');
    // }

    // public function proses($id) {
    //     Pengaduan::find($id)->update(['status_pengaduan' => 'proses']);
    //     return redirect()->route('apr.index');
    // }

    // public function selesai($id) {
    //     Pengaduan::find($id)->update(['status_pengaduan' => 'selesai']);
    //     return redirect()->route('apr.index');
    // }

    public function exportpdf(Request $request,$id){

        $item = Pengaduan::find($id);
        
        $pdf = PDF::loadView('detail-pengaduan', ['item' => $item]);
        return $pdf->download('detail-pengaduan.pdf');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


}