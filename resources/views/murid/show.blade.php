@extends('master.layouts')
@section('title', 'Lihat Data Murid')
@section('link', 'Murid/Lihat')
@section('content')
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Data Lengkap</h6>
        </div>
        <div class="card-body">
            <div class="chart pt-2">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Nama : <strong>{{ $data->nama }}</strong></p>
                            </div>
                            <div class="col-md-6">
                                <p>Terdaftar :
                                    {{ \Carbon\Carbon::parse($data->tgl_masuk)->isoFormat('dddd, DD MMMM YYYY') }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Agama : {{ $data->agama->nama }}</p>
                            </div>
                            <div class="col-md-4">
                                <p>Umur : {{ $umur }} tahun</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Tempat Tanggal Lahir : </p>
                                <p>
                                    {{ $data->tempat_lahir }},
                                    {{ \Carbon\Carbon::parse($data->tgl_lahir)->isoFormat('DD MMMM YYYY') }}
                                </p>
                            </div>
                            <div class="col-md-4 ">
                                <p>Alamat : {{ $data->alamat }}</p>
                            </div>
                        </div>
                        <hr>
                        <p>Jenis Kelamin : {{ $data->jeniskelamin->nama }}</p>
                        <hr>
                        Orang Tua
                        <div class="col">
                            <p>No.tlp/WA : {{ $data->nohp }}</p>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <p>Ayah : {{ $data->nama_ayah }} </p>
                            </div>
                            <div class="col-md-6">
                                <p>Ibu : {{ $data->nama_ibu }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <p>- Foto -</p>
                            <img src="/image/{{ $data->foto }}" width="250px" height="250px">
                            <p> NIS : {{ $data->nis }}</p>
                        </div>
                    </div>
                </div>
                <hr>
                <a href="{{ route('murids.index') }}"
                    class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Kembali</a>
            </div>
        </div>
    </div>



    <!-- Area Chart -->
    {{-- <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Data Lengkap</h6>
        </div>
        <div class="card-body">
            <div class="chart pt-2">
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb">
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class=" text-center">
                                <img src="/image/{{ $data->foto }}" width="250px" height="250px">
                            </div>

                            <hr>
                        </div>
                    </div>
                </div>
                <p>Nama :<strong>{{ $data->nama }}</strong></p>
                <hr>
                <h6>NIP : {{ $data->nip }}</h6>
                <h6>Gender : {{ $data->jk }}</h6>
                <h6>Status : {{ $data->status->nama }}</h6>
                <h6>Mata Pelajaran : {{ $data->matapelajaran->namapelajaran }} </h6>
                <h6>Kelas Di ajar : {{ $data->kelas->namakelas }}</h6>
            </div>
            <hr>
            <a href="{{ route('gurus.index') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Kembali</a>
        </div>
    </div> --}}

    <!-- Donut Chart -->


@endsection
