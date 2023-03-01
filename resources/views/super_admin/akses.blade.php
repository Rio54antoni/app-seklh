@extends('master.layouts')
@section('title', 'Management')
@section('link', 'Management APP')
{{-- @foreach ($image as $img) --}}
{{-- @endforeach --}}
@section('content')
    <!-- Page Heading -->

    <!-- Content Row -->
    <div class="card shadow mb-2">
        <div class="card-header py-2">
            <h6 class="m-0 font-weight-bold text-primary">Basic Data !!</h6>
        </div>
        <div class="card-head text-lg">
            <div class="card shadow mb-2">
                <a href="{{ route('agamas.index') }}" class="btn btn-info btn-rectangle text-lg">Agama</a>
            </div>
        </div>
        <div class="card-head text-lg">
            <div class="card shadow mb-2">
                <a href="{{ route('jabatans.index') }}" class="btn btn-primary btn-rectangle text-lg">Jabatan</a>
            </div>
        </div>
        <div class="card-head text-lg">
            <div class="card shadow mb-2">
                <a href="{{ route('jenisks.index') }}" class="btn btn-warning btn-rectangle text-lg">Jenis kelamin</a>
            </div>
        </div>
        <div class="card-head text-lg">
            <div class="card shadow mb-2">
                <a href="{{ route('statuses.index') }}" class="btn btn-danger btn-rectangle text-lg">Status</a>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }} <strong>!!!</strong>
            </div>
        @endif
    </div>
@endsection
