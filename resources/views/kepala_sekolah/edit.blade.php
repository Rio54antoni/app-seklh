@extends('master.layouts')
@section('title', 'Edit Data Kepala Sekolah')
@section('link', 'Kepala Sekolah/Edit')
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
                        <form class="user" action="{{ route('kepalasekolahs.update', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input name="nama" type="text"
                                    class="form-control form-control-user @error('nama') is-invalid @enderror"
                                    id="exampleInputEmail" value="{{ old('nama', $data->nama) }}">
                            </div>
                            <div class="form-group">
                                <input name="nip" type="text"
                                    class="form-control form-control-user @error('nip') is-invalid @enderror"
                                    id="exampleInputEmail" value="{{ old('nip', $data->nip) }}">
                            </div>

                            <div class="form-group">
                                <select name="jk" class="form-control form-control @error('jk') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    <option value="Laki-laki" {{ old('jk', $data->jk) == 'Laki-laki' ? 'selected' : null }}>
                                        Laki-Laki
                                    </option>
                                    <option value="Perempuan" {{ old('jk', $data->jk) == 'Perempuan' ? 'selected' : null }}>
                                        Perempuan
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input name="alamat" type="text"
                                    class="form-control form-control-user @error('alamat') is-invalid @enderror"
                                    id="exampleInputEmail" value="{{ old('alamat', $data->alamat) }}">
                            </div>
                            <div class="form-group">
                                <input name="notelepon" type="number"
                                    class="form-control form-control-user @error('notelepon') is-invalid @enderror"
                                    id="exampleInputEmail" value="{{ old('notelepon', $data->notelepon) }}">
                            </div>
                            <div class="form">
                                <input name="foto" type="file" class="form-user @error('foto') is-invalid @enderror"
                                    value="{{ old('foto', $data->foto) }}">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-facebook btn">
                                Simpan
                            </button>
                            <a href="{{ route('kepalasekolahs.index') }}" class="btn btn-google btn">
                                Batal
                            </a>
                        </form>
                        <hr>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-2">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center">Foto Profil</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-2 text-center">
                                <img src="/image/{{ $data->foto }}">
                                <p> {{ $data->nama }}</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
