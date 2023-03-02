@extends('master.layouts')
@section('title', ' Edit Profil Sekolah')
@section('link', 'Profil Sekolah/Edit')
{{-- @foreach ($image as $img) --}}
{{-- @endforeach --}}
@section('content')
    <!-- Page Heading -->

    <div class="card o-hidden border-0 shadow-lg">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="p-3">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-2">Edit Data</h1>
                        </div>
                        <form class="user" action="{{ route('profilsekolahs.update', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                Nama Sekolah
                                <input name="nama" type="text"
                                    class="form-control form-control @error('nama') is-invalid @enderror"
                                    id="exampleInputEmail" value="{{ old('nama', $data->nama) }}">
                            </div>
                            <div class="form-group">
                                Alamat
                                <input name="alamat" type="text"
                                    class="form-control form-control @error('alamat') is-invalid @enderror"
                                    id="exampleInputEmail" value="{{ old('alamat', $data->alamat) }}">
                            </div>
                            <div class="form-group">
                                Email
                                <input name="email" type="email"
                                    class="form-control form-control @error('email') is-invalid @enderror"
                                    id="exampleInputEmail" value="{{ old('email', $data->email) }}">
                            </div>
                            <div class="form-group">
                                No. Telepon
                                <input name="notelepon" type="number"
                                    class="form-control form-control @error('notelepon') is-invalid @enderror"
                                    id="exampleInputEmail" value="{{ old('notelepon', $data->notelepon) }}">
                            </div>
                            <div class="form-group">
                                NSS
                                <input name="nss" type="number"
                                    class="form-control form-control @error('nss') is-invalid @enderror"
                                    id="exampleInputEmail" value="{{ old('nss', $data->nss) }}">
                            </div>
                            <div class="form-group">
                                Akreditasi
                                <select name="akreditasi"
                                    class="form-control form-control @error('akreditasi') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    <option value="A"
                                        {{ old('akreditasi', $data->akreditasi) == 'A' ? 'selected' : null }}>A</option>
                                    <option value="B"
                                        {{ old('akreditasi', $data->akreditasi) == 'B' ? 'selected' : null }}>B</option>
                                    <option value="C"
                                        {{ old('akreditasi', $data->akreditasi) == 'C' ? 'selected' : null }}>C</option>
                                    <option value="TT"
                                        {{ old('akreditasi', $data->akreditasi) == 'TT' ? 'selected' : null }}>TT</option>
                                </select>
                            </div>
                            <div class="form">
                                <input name="foto" type="file" class="form @error('foto') is-invalid @enderror"
                                    value="{{ old('foto', $data->foto) }}">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-facebook btn">
                                Simpan
                            </button>
                            <a href="{{ route('profilsekolahs.index') }}" class="btn btn-google btn">
                                Batal
                            </a>
                        </form>
                        <hr>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-2">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 text-center">
                            <h6 class="m-0 font-weight-bold text-primary">Logo Sekolah</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-2 text-center">
                                <img src="/image/{{ $data->foto }}" width="250px" height="250px">
                                <p> {{ $data->namas }}</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
