@extends('master.layouts')
@section('title', 'Murid')
@section('link', 'Murid')
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
            <div class="row">
                {{-- <div class="col-md-6">
                    <h4 class="m-0 font-weight-bold text-primary">User Management</h4>
                </div> --}}
                <div class=" col-md-12 text-right">
                    <a href="{{ route('murids.create') }}" class="btn btn-square btn-success btn-sm"><i
                            class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="GET" action="{{ route('murids.index') }}" class="form-inline mb-3">
                    <div class="form-group mr-2">
                        <input type="text" name="keyword" value="{{ old('keyword') }}" class="form-control"
                            placeholder="Cari...">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button>
                </form>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Agama</th>
                        <th>Jenis Kelamin</th>
                        {{-- <th>Email</th> --}}
                        {{-- <th>Alamat</th> --}}
                        {{-- <th>No.Tlp</th> --}}
                        {{-- <th>Tanggal Masuk</th> --}}
                        {{-- <th>Foto</th> --}}
                        <th class="text-center">Aksi</th>
                    </tr>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->nis }}</td>
                            <td>{{ $d->agama->nama }}</td>
                            <td>{{ $d->jeniskelamin->nama }}</td>
                            {{-- <td>{{ $d->email }}</td> --}}
                            {{-- <td>{{ $d->alamat }}</td> --}}
                            {{-- <td>{{ $d->notelepon }}</td> --}}
                            {{-- <td>{{ \Carbon\Carbon::parse($d->tgl_masuk)->isoFormat('dddd, DD MMMM YYYY') }}</td> --}}
                            {{-- <td><img src="/image/{{ $d->foto }}" width="100px" height="100px"></td> --}}
                            <td class="text-center">
                                <form action="{{ route('murids.destroy', $d->id) }}" method="POST">
                                    <a href="{{ route('murids.show', $d->id) }}" class="btn btn-info btn-square btn-sm">
                                        <i class="far fa-eye">View</i> </a>
                                    <a href="{{ route('murids.edit', $d->id) }}" class="btn btn-warning btn-square btn-sm">
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
                <div class="d-flex">
                    {!! $data->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
