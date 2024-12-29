@extends('layouts.lihatbarang')

@section('table')

<h1>Lihat Barang</h1>
            <hr>

            <div class="row">
                <div class="d-flex justify-content-end">
                    <div class="col-lg-4">
                    <form action="{{ route('pinjam.lihatbarang') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" placeholder="Cari Barang..." name="search">
                            <button type="submit" class="btn btn-success"><i class='bx bx-search-alt-2 icon'></i></button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
                <div class="table_section">
                    <table class=" table scroll table-striped">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Barang</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_barang as $item)
                            <tr>
                                <td>{{ $item['kode_barang'] }}</td>
                                <td>{{ $item['barang'] }}</td>
                                <td>{{ $item['jumlah'] }}</td>
                                <td>{{ $item['status_barang'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection