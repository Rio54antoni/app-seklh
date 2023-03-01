@extends('master.layouts')
@section('title', 'Setting')
@section('link', 'Setting')
{{-- @foreach ($image as $img) --}}
{{-- @endforeach --}}
@section('content')
    <!-- Page Heading -->
    <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }} <strong>!!!</strong>
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="m-0 font-weight-bold text-primary">Profil Sistem</h4>
                    </div>
                    {{-- <div class=" col-md-6 text-right">
                        <a href="{{ route('profilsekolahs.create') }}" class="btn btn-square btn-success"> <span
                                class="badge-counter">
                                <h7>+</h7>
                            </span></a>
                    </div> --}}
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>

                            <th>Logo</th>
                            <th>Nama Sekolah</th>
                            <th>Alamat </th>
                            <th>Email</th>
                            <th>No. Telepon</th>
                            <th>NSS</th>
                            <th>Akreditasi</th>
                            <th class="text-center">Action</th>
                        </tr>
                        @foreach ($data as $d)
                            <tr>
                                <td><img src="/image/{{ $d->foto }}" width="100px" height="100px"></td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->alamat }}</td>
                                <td>{{ $d->email }}</td>
                                <td>{{ $d->notelepon }}</td>
                                <td>{{ $d->nss }}</td>
                                <td>{{ $d->akreditasi }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('profilsekolahs.show', $d->id) }}" class="btn btn-info btn-sm">
                                            <i class="far fa-eye">View</i>
                                        </a>
                                        &nbsp;
                                        <a href="{{ route('profilsekolahs.edit', $d->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit">Edit</i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
