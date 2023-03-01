@extends('master.layouts')
@section('title', 'Data Kelas')
@section('link', 'Kelas')
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
            <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
            <div class="text-right">
                <a href="{{ route('kelas.create') }}" class="btn btn-square btn-success"> <span class="badge-counter">
                        <h7>+</h7>
                    </span></a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Keterangan Kelas</th>
                        <th class="text-center">Action</th>
                    </tr>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $d->namakelas }}</td>
                            <td>{{ $d->keterangan }}</td>
                            <td class="text-center">
                                <form action="{{ route('kelas.destroy', $d->id) }}" method="POST">
                                    {{-- <a class="btn btn-info btn-square btn-sm" href="{{ route('kelas.show', $d->id) }}"><i
                                            class="far fa-eye">View</i></a> --}}
                                    <a class="btn btn-warning btn-square btn-sm" href="{{ route('kelas.edit', $d->id) }}">
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
            <div class="text">
                <a href="{{ route('super_admin.akses') }}" class="btn btn-square btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
