@extends('master.layouts')
@section('title', 'Tambah Profil Sekolah')
@section('link', 'Tambah')
{{-- @foreach ($image as $img)
     --}}
{{-- @endforeach --}}
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Profil Sekolah</h1>
    </div>
    <div class="card o-hidden border-0 shadow-lg">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="p-3">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-2">Tambah Data</h1>
                        </div>
                        <form class="user" action="{{ route('profilsekolahs.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input name="namas" type="text" value="{{ old('namas') }}" placeholder="Masukan Nama"
                                    class="form-control form-control-user @error('namas') is-invalid @enderror"
                                    id="exampleInputEmail">
                            </div>
                            <div class="form-group">
                                <input name="alamats" type="text" value="{{ old('alamats') }}"
                                    placeholder="Masukan Alamat"
                                    class="form-control form-control-user @error('alamats') is-invalid @enderror"
                                    id="exampleInputEmail">
                            </div>
                            <div class="form-group">
                                <input name="emails" type="email" value="{{ old('emails') }}" placeholder="Masukan Email"
                                    class="form-control form-control-user @error('emails') is-invalid @enderror"
                                    id="exampleInputEmail">
                            </div>
                            <div class="form-group">
                                <input name="notelepon" type="number" value="{{ old('notelepon') }}"
                                    placeholder="Masukan No Telepon"
                                    class="form-control form-control-user @error('notelepon') is-invalid @enderror"
                                    id="exampleInputEmail">
                            </div>
                            <div class="form">
                                <input name="foto" type="file" class="form-user @error('foto') is-invalid @enderror">
                                @error('foto')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-facebook btn">
                                Simpan
                            </button>
                            <a href="{{ route('profilsekolahs.index') }}" class="btn btn-google btn">
                                Kembali
                            </a>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
