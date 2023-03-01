@extends('master.layouts')
@section('title', 'Edit')
@section('link', 'Agama/Edit')
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
                        <form class="user" action="{{ route('agamas.update', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input name="nama" type="text"
                                    class="form-control form-control-user @error('nama') is-invalid @enderror"
                                    id="exampleInputEmail" value="{{ old('nama', $data->nama) }}">
                            </div>
                            <div class="form-group">
                                <input name="keterangan" type="text"
                                    class="form-control form-control-user @error('keterangan') is-invalid @enderror"
                                    id="exampleInputEmail" value="{{ old('keterangan', $data->keterangan) }}">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-facebook btn">
                                Simpan
                            </button>
                            <a href="{{ route('agamas.index') }}" class="btn btn-google btn">
                                Batal
                            </a>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
