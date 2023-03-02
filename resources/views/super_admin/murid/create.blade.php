@extends('master.layouts')
@section('title', 'Tambah Data Murid')
@section('link', 'Murid/Tambah')
@section('content')
    <!-- Page Heading -->
    @if ($message = Session::get('error'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }} <strong>!!!</strong>
        </div>
    @endif
    <div class="card o-hidden border-0 shadow-lg">
        <div class="card-body p-2">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-3">
                        <div class="text-center">
                            <h4 class="text-gray-900 mb-2 m-0 font-weight-bold">Tambah Data</h4>
                        </div>
                        <form class="user" action="{{ route('murids.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row col">
                                <div class="col">
                                    <div class="form-group">
                                        Nama
                                        <input name="nama" type="text" value="{{ old('nama') }}"
                                            class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail"
                                            placeholder="Masukan Nama">
                                        @error('nama')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        Agama
                                        <select name="id_agama"
                                            class="form-control  @error('id_agama') is-invalid @enderror">
                                            <option value="">-Pilih-</option>
                                            @foreach ($agama as $ag)
                                                <option value="{{ $ag->id }}"
                                                    {{ old('id_agama') == $ag->id ? 'selected' : null }}>
                                                    {{ $ag->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_agama')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>
                            </div>
                            <div class="row col">
                                <div class="col">
                                    <div class="form-group">
                                        NIS
                                        <input name="nis" type="number" value="{{ old('nis') }}"
                                            class="form-control @error('nis') is-invalid @enderror" id="exampleInputEmail"
                                            placeholder="Masukan NIS">
                                        @error('nis')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        Tanggal Masuk
                                        <input name="tgl_masuk" type="date" value="{{ old('tgl_masuk') }}"
                                            class="form-control @error('tgl_masuk') is-invalid @enderror">
                                        @error('tgl_masuk')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row col">
                                <div class="row col-6">
                                    <div class="col">
                                        <div class="form-group">
                                            No Telepon / WA Orang Tua
                                            <input name="nohp" type="number" value="{{ old('nohp') }}"
                                                class="form-control form-control @error('nohp') is-invalid @enderror"
                                                placeholder="Contoh : 081265473896">
                                            @error('nohp')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row col">
                                        <div class="col">
                                            <div class="form-group">
                                                Jenis Kelamin
                                                <select name="id_jk"
                                                    class="form-control  @error('id_jk') is-invalid @enderror">
                                                    <option value="">-Pilih-</option>
                                                    @foreach ($jk as $jenis)
                                                        <option value="{{ $jenis->id }}"
                                                            {{ old('id_jk') == $jenis->id ? 'selected' : null }}>
                                                            {{ $jenis->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('id_jk')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row col">
                                    <div class="col">
                                        <div class="form-group">
                                            Tempat Lahir
                                            <input name="tempat_lahir" type="text" value="{{ old('tempat_lahir') }}"
                                                class="form-control  @error('tempat_lahir') is-invalid @enderror"
                                                id="exampleInputEmail" placeholder="Masukan Tempat lahir">
                                            @error('tempat_lahir')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            Tanggal Lahir
                                            <input name="tgl_lahir" type="date" value="{{ old('tgl_lahir') }}"
                                                class="form-control @error('tgl_lahir') is-invalid @enderror">
                                            @error('tgl_lahir')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row col">
                                <div class="col">
                                    <div class="form-group">
                                        Nama Ayah
                                        <input name="nama_ayah" type="text" value="{{ old('nama_ayah') }}"
                                            class="form-control @error('nama_ayah') is-invalid @enderror"
                                            placeholder="Masukan Nama ayah">
                                        @error('nama_ayah')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        Nama Ibu
                                        <input name="nama_ibu" type="text" value="{{ old('nama_ibu') }}"
                                            class="form-control @error('nama_ibu') is-invalid @enderror"
                                            placeholder="Masukan Nama ibu">
                                        @error('nama_ibu')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row col ">
                                <div class="col">
                                    <div class="form-group text-left">
                                        Alamat
                                        <textarea name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                                            placeholder="Masukan alamat">{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                </div>
                            </div>
                            Upload Foto
                            <div class="form">
                                <input name="foto" type="file" class=" @error('foto') is-invalid @enderror"
                                    title="Pilih File Foto">
                                @error('foto')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-facebook ">
                                Simpan
                            </button>
                            <a href="{{ route('murids.index') }}" class="btn btn-google ">
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
