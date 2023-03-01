@extends('master.layouts')
@section('title', 'Tambah User')
@section('link', 'User/Tambah')
@section('content')
    <!-- Page Heading -->
    <div class="card o-hidden border-0 shadow-lg">
        <div class="card">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col">
                    <div class="p-3">
                        <div class="text-center">
                            <h1 class="text-gray-900 mb-2"></h1>
                        </div>
                        <form class="user" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row col">
                                <div class="col">
                                    <div class="form-group">
                                        Nama
                                        <input name="nama" type="text" value="{{ old('nama') }}"
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
                                        <input name="email" type="email" value="{{ old('email') }}"
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
                                        <label for="level">Leve User</label>
                                        <select name="level" class="form-control  @error('level') is-invalid @enderror">
                                            <option selected>Pilih level Pengguna</option>
                                            @foreach ($level as $item)
                                                <option value="{{ $item['nama'] }}">{{ $item['nama'] }}</option>
                                            @endforeach
                                        </select>
                                        @error('level')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label>Upload Foto</label>
                                    <br>
                                    <input type="file" name="foto" class="form @error('foto') is-invalid @enderror">
                                    @error('foto')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password"value="{{ old('password') }}"
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
                                        <label for="password_confirmation">Ketik Ulang Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
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
