@extends('master.layouts')
@section('title', 'User Management')
@section('link', ' User Management')
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
            <h6 class="m-0 font-weight-bold text-primary"></h6>
            <div class="text-right">
                <a href="{{ route('users.create') }}" class="btn btn-square btn-success"> <span class="badge-counter">
                        <h7>+</h7>
                    </span></a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>foto</th>
                        <th class="text-center">Action</th>
                    </tr>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->level }}</td>
                            <td><img src="/image/{{ $d->foto }}" width="75px" height="75px"></td>
                            <td class="text-center">
                                <form action="{{ route('users.destroy', $d->id) }}" method="POST">
                                    <a href="{{ route('users.show', $d->id) }}" class="btn btn-info btn-square btn-sm">
                                        <i class="far fa-eye">View</i> </a>
                                    <a class="btn btn-warning btn-square btn-sm" href="{{ route('users.edit', $d->id) }}">
                                        <i class="fas fa-edit">Edit</i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                            class="fas fa-trash">Hapus</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
