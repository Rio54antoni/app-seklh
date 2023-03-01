@extends('master.layouts')
@section('title', 'Data Kepala Sekolah')
@section('link', 'Kepala Sekolah')
{{-- @foreach ($image as $img) --}}
{{-- @endforeach --}}
@section('content')
    <!-- Page Heading -->

    <!-- Content Row -->

    <!-- Content Row -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }} <strong>!!!</strong>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kepala sekolah</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Gender</th>
                        <th>Alamat</th>
                        <th>No telepon</th>
                        <th class="text-center">Action</th>
                    </tr>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><img src="/image/{{ $d->foto }}" width="100px" height="100px"></td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->nip }}</td>
                            <td>{{ $d->jk }}</td>
                            <td>{{ $d->alamat }}</td>
                            <td>{{ $d->notelepon }}</td>
                            <td class="text-center">
                                <a href="{{ route('kepalasekolahs.show', $d->id) }}" class="btn btn-info btn-square btn-sm">
                                    <i class="far fa-eye">View</i>
                                    <a href="{{ route('kepalasekolahs.edit', $d->id) }}"
                                        class="btn btn-warning btn-square btn-sm">
                                        <i class="fas fa-edit">Edit</i>
                                    </a>
                                    {{-- <form action="{{ route('kepalasekolahs.destroy', $d->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
