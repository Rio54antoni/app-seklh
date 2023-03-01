@extends('master.layouts')
@section('title', 'Tambah Mata Pelajaran')
@section('link', 'Mata pelajar/Tambah')
{{-- @foreach ($image as $img)
     --}}
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
                            <h1 class="h4 text-gray-900 mb-2">Tambah Mata Pelajaran</h1>
                        </div>
                        <form class="user" action="{{ route('matapelajarans.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input name="namapelajaran" type="text" value="{{ old('namapelajaran') }}"
                                    class="form-control form-control-user @error('namapelajaran') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Masukan Mata Pelajaran">
                            </div>
                            <div class="form-group">
                                <input name="jam" type="text" value="{{ old('jam') }}"
                                    class="form-control form-control-user @error('jam') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Masukan Jam">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-facebook btn">
                                Simpan
                            </button>
                            <a href="{{ route('matapelajarans.index') }}" class="btn btn-google btn">
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
