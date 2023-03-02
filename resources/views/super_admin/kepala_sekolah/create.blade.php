@extends('master.layouts')
@section('title', 'Tambah Data Kepala Sekolah')
{{-- @foreach ($image as $img) --}}
{{-- @endforeach --}}
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Kepala Sekolah</h1>
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
                        <form class="user" action="{{ route('kepalasekolahs.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input name="nama" type="text" value="{{ old('nama') }}"
                                    class="form-control form-control-user @error('nama') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                                <input name="nip" type="text" value="{{ old('nip') }}"
                                    class="form-control form-control-user @error('nip') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Masukan NIP">
                            </div>
                            <div class="form-group">
                                <select name="jk" class="form-control form-control @error('jk') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    <option value="Laki-laki" {{ old('jk') == 'Laki-laki' ? 'selected' : null }}>Laki-Laki
                                    </option>
                                    <option value="Perempuan" {{ old('jk') == 'Perempuan' ? 'selected' : null }}>Perempuan
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input name="alamat" type="text" value="{{ old('alamat') }}"
                                    class="form-control form-control-user @error('alamat') is-invalid @enderror"
                                    placeholder="Masukan Alamat" id="exampleInputEmail">
                            </div>
                            <div class="form-group">
                                <input name="notelepon" type="number" value="{{ old('notelepon') }}"
                                    class="form-control form-control-user @error('notelepon') is-invalid @enderror"
                                    placeholder="Masukan No Telepon" id="exampleInputEmail">
                            </div>
                            <div class="form">
                                <input name="foto" type="file" class="form-user @error('foto') is-invalid @enderror">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-facebook btn-user">
                                Simpan
                            </button>
                            <a href="{{ route('profilsekolahs.index') }}" class="btn btn-google btn-user">
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
