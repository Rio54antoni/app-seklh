@extends('master.layouts')
@section('title', 'Admin')
@section('link', 'Dashboard')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
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
