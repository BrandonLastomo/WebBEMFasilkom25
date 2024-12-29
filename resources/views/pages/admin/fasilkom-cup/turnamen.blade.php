@extends('layouts.admin')

@section('title')
  Dashboard - Fasilkom Cup
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Fasilkom Cup</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('fcup.index') }}">Fasilkom Cup</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $turnamen->nama }}</h4>
            </div>
            <div class="card-body">
              @if ($turnamen->nama == 'Magic Chess' || $turnamen->nama == 'Catur Putra' || $turnamen->nama == 'Catur Putri')
                @include('pages.admin.fasilkom-cup.turnamen-individu')
              @else
                @include('pages.admin.fasilkom-cup.turnamen-tim')
              @endif
            </div>
            <div class="card-footer pt-1">
              {{-- {{ $turnamens->links() }} --}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection