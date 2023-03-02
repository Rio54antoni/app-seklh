@extends('master.layouts')
@section('title', 'Lihat Profil Sekolah')
@section('link', 'Profil Sekolah/Lihat')
@section('content')
    <!-- Page Heading -->

    <div class="row ">
        <div class="col-xl-6 col-lg-4 max-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3 text-center">
                    <h6 class="m-0 font-weight-bold text-primary">Profil Sekolah</h6>
                </div>
                <div class="card-body ">
                    <div class="chart-pie pt-4">
                        <h2><strong>{{ $data->nama }}</strong></h2>
                        <h6>{{ $data->alamat }},<p> Email :<em> {{ $data->email }}</em></p> No.telepon
                            :{{ $data->notelepon }} <p>
                                NSS: {{ $data->nss }} </p> Akreditasi {{ $data->akreditasi }}</h6>
                    </div>
                    <hr>
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <a href="{{ route('profilsekolahs.index') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Donut Chart -->
        <div class="col-xl-4 col-lg-5 max-auto">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 text-center">
                    <h6 class="m-0 font-weight-bold text-primary">Logo Sekolah</h6>
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
