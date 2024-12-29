@extends('layouts.peminjaman')

@section('content')
    <h1>Riwayat</h1>
    <hr>
    <section class="riwayat">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Estimasi Pengembalian</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['barang'] }}</td>
                        <td>{{ $item['jumlah'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_pinjam)->translatedFormat('d F Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->estimasi_pengembalian)->translatedFormat('d F Y') }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>
                            <a href="riwayat/downloadpdf/{{ $item['id'] }}" type="button" class="btn btn-success" style="
                            <?php
                                if($item['status'] == "disetujui"){
                                    echo "";
                                }
                                else {
                                    echo "visibility:hidden;";
                                }
                            ?>
                            ">Unduh Surat Peminjaman Barang</button></a>

                            <form action="riwayat/dibatalkan/{{$item['id']}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger" style="
                                <?php
                                    if($item['status'] == "proses pengajuan"){
                                        echo "";
                                    }
                                    else {
                                        echo "visibility:hidden;";
                                    }
                                ?>
                                ">Dibatalkan</button></form>  

                        </td>
                       
                           
                        
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        //Script for disabling right click on mouse
        var message="Function Disabled!";
        function clickdsb(){
        if (event.button==2){
        return false;
        }
        }
        function clickbsb(e){
        if (document.layers||document.getElementById&&!document.all){
        if (e.which==2||e.which==3){
        alert(message);
        return false;
        }
        }
        }
        if (document.layers){
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown=clickbsb;
        }
        else if (document.all&&!document.getElementById){
        document.onmousedown=clickdsb;
        }
        
        document.oncontextmenu=new Function("return false")
        
    </script>
    
@endsection

