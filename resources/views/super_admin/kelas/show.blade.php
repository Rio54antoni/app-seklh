@extends('master.layouts')
@section('title', 'Lihat Data Kelas')
@section('link', 'Kelas/Lihat')
{{-- @foreach ($image as $img) --}}
{{-- @endforeach --}}
@section('content')
    <!-- Page Heading -->
    <div class="row">

        <!-- Donut Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Data Kelas</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4">
                        <p><strong>{{ $data->namakelas }}</strong> <strong>:</strong> {{ $data->keterangan }}</p>
                    </div>
                    <hr>
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <a href="{{ route('kelas.index') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
