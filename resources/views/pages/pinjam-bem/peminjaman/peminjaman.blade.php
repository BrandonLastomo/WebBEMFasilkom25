@extends('layouts.lihatbarang')

@section('table')
    <h1>Peminjaman</h1>
    <hr>
    <section class="peminjaman">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('pinjam.ajukanpeminjaman') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="">Username</label>
                            <div class="col-lg">
                                <input class="form-control" type="text" value="{{ Auth::user()->nama }}" name="username" readonly>
                                </div>
                            </div>
                        <div class="col-lg-12">
                            <label for="">Email</label>
                            <div class="col-lg">
                                <input class="form-control" type="text" value="{{ Auth::user()->email }}" name="email" readonly>
                                </div>
                            </div>
                        <div class="col-lg-6">
                          <label for="">Nama Barang</label>
                          <div class="form-floating">
                              <select class="form-select" id="floatingSelect" name="barang" required>
                                <option selected>Pilih Barang</option>
                                @foreach ($items as $item)                                
                                <option value="{{$item['barang']}}" style="border-radius:25px; <?php
                                if($item['status_barang'] == "Kosong"){
                                  echo "visibility:hidden";
                                }
                                else {
                                   "";
                                }
                            ?> ">{{$item['barang']}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                            <div class="col-lg-6">
                                <label for="">Jumlah</label>
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" name="jumlah" required>
                                        <option selected>Pilih Jumlah</option>
                                        <?php 
                                            for ($x = 1; $x <= 5; $x++) {
                                            echo "<option value=$x>$x</option>";
                                            }
                                        ?>
                                    </select>
                                  </div>
                            </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="date">
                                    <label for="">Tanggal Pinjam</label>
                                <input type="date" name="tanggal_pinjam" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="date">
                                    <label for="">Estimasi Pengembalian</label>
                                <input type="date" name="estimasi_pengembalian" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tombol-pinjam">
                                <button type="submit" class="btn btn-success" onclick="geek()">Ajukan Barang</button>
                                <script>
                                    function geek(){
                                    if (window.confirm("Apakah kamu yakin ingin mengajukan barang ?")) {
                                        window.alert( "Silahkan unduh peminjaman surat, jika sudah disetujui !");
                                      }};
                                </script>
                            </div>
                        </div>
                  </form>
            </div>
        </div>
    </section>
@endsection