@extends('master.layouts')
@section('title', 'Tambah Jabatan')
@section('link', 'Jabatan/Tambah')
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
                            <h1 class="h4 text-gray-900 mb-2"></h1>
                        </div>
                        <form class="user" action="{{ route('jabatans.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input name="nama" type="text" value="{{ old('nama') }}"
                                    class="form-control form-control @error('nama') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Masukan Nama">
                                @error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="keterangan" type="text" value="{{ old('keterangan') }}"
                                    class="form-control form-control @error('keterangan') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Masukan keterangan">
                                @error('keterangan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-facebook btn">
                                Simpan
                            </button>
                            <a href="{{ route('jabatans.index') }}" class="btn btn-google btn">
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
