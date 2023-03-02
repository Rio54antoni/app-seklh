@extends('master.layouts')
@section('title', 'Lihat Data Kepala Sekolah')
@section('link', 'Kepala Sekolah/Lihat')
{{-- @foreach ($image as $img) --}}
{{-- @endforeach --}}
@section('content')
    <!-- Page Heading -->

    <div class="row">
        <div class="col-xl-4 col-lg-5">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Profil</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie">
                        <h2><strong>{{ $data->nama }}</strong></h2>
                        <h6>NIP: {{ $data->nip }}</h6>
                        <h6>{{ $data->alamat }},{{ $data->notelepon }}</h6>
                        <h6>{{ $data->jk }}</h6>
                    </div>
                    <hr>
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <a href="{{ route('kepalasekolahs.index') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Donut Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Foto Profil</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 text-center">
                        <img src="/image/{{ $data->foto }}" width="250px" height="250px">
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
