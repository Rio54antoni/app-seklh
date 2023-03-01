@extends('master.layouts')
@section('title', 'Edit User')
@section('link', 'User/Edit')
@section('content')
    <!-- Page Heading -->
    <div class="card o-hidden border-0 shadow-lg">
        <div class="card">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="p-3">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-2"></h1>
                        </div>
                        <form class="user" action="{{ route('users.update', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row col">
                                <div class="col">
                                    <div class="form-group">
                                        Nama
                                        <input name="nama" type="text" value="{{ old('nama', $data->nama) }}"
                                            class="form-control form-control @error('nama') is-invalid @enderror"
                                            id="exampleInputEmail" placeholder="Masukan Nama">
                                        @error('nama')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        Email
                                        <input name="email" type="email" value="{{ old('email', $data->email) }}"
                                            class="form-control form-control @error('email') is-invalid @enderror"
                                            id="exampleInputEmail" placeholder="Masukan email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class=" row col">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="kelas">Leve User</label>
                                        <select name="level" class="form-control  @error('level') is-invalid @enderror">
                                            <option value="">Pilih Level Pengguna</option>
                                            @foreach ($level as $item)
                                                <option value="{{ $item['nama'] }}"
                                                    {{ $data->level == $item['nama'] ? 'selected' : '' }}>
                                                    {{ $item['nama'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('level')
                                            <span class="invalid-feedback" level="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="nama">Upload Foto</label>
                                    <br>
                                    <input type="file" name="foto"
                                        class="form {{ $errors->has('foto') ? ' text-red' : '' }}">
                                    @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="row col">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama">Password</label>
                                        <input type="password" name="password"
                                            value="{{ old('password'), $data->password }}"
                                            class="form-control  @error('password') is-invalid @enderror"
                                            placeholder="Masukan Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama">Ketik Ulang Password</label>
                                        <input type="password" name="password_confirmation"
                                            class="form-control {{ $errors->has('password') ? ' text-red' : '' }}"
                                            placeholder="Masukan Ulang Password">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-facebook btn">
                                Simpan
                            </button>
                            <a href="{{ route('users.index') }}" class="btn btn-google btn">
                                Batal
                            </a>
                        </form>

                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <div class="text-center">
                            <br>
                            <br>
                            <img src="/image/{{ $data->foto }}" width="250px" height="250px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
