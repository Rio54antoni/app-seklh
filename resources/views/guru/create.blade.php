@extends('master.layouts')
@section('title', 'Tambah Data Guru')
@section('link', 'Guru/Tambah')
@section('content')
    <!-- Page Heading -->
    <div class="card o-hidden border-0 shadow-lg col-lg-6">
        <div class="card-body p-2">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-3">
                        <div class="text-center">
                            <h4 class="text-gray-900 mb-2 m-0 font-weight-bold">Tambah Data</h4>
                        </div>
                        <form class="user" action="{{ route('gurus.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                Nama
                                <input name="nama" type="text" value="{{ old('nama') }}"
                                    class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail"
                                    placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                                NIP
                                <input name="nip" type="number" value="{{ old('nip') }}"
                                    class="form-control form-control @error('nip') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Masukan NIP">
                            </div>
                            <div class="form-group">
                                Email
                                <input name="email" type="email" value="{{ old('email') }}"
                                    class="form-control form-control @error('email') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Masukan email">
                            </div>
                            <div class="form-group">
                                No Telepon / WA
                                <input name="notelepon" type="number" value="{{ old('notelepon') }}"
                                    class="form-control form-control @error('notelepon') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Contoh : 081265473896">
                            </div>
                            <div class="form-group">
                                Alamat
                                <textarea name="alamat" type="text" class="form-control form-control @error('alamat') is-invalid @enderror"
                                    placeholder="Masukan alamat">{{ old('alamat') }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                Agama
                                <select name="id_agama"
                                    class="form-control form-control @error('id_agama') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    @foreach ($agama as $ag)
                                        <option value="{{ $ag->id }}"
                                            {{ old('id_agama') == $ag->id ? 'selected' : null }}>{{ $ag->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                Jenis Kelamin
                                <select name="id_jk"
                                    class="form-control form-control @error('id_jk') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    @foreach ($jk as $jenis)
                                        <option value="{{ $jenis->id }}"
                                            {{ old('id_jk') == $jenis->id ? 'selected' : null }}>{{ $jenis->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                Jabatan
                                <select name="id_jabatan"
                                    class="form-control form-control @error('id_jabatan') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    @foreach ($jabatan as $jabat)
                                        <option value="{{ $jabat->id }}"
                                            {{ old('id_jabatan') == $jabat->id ? 'selected' : null }}>{{ $jabat->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                Kelas
                                <select name="id_kelas"
                                    class="form-control form-control @error('id_kelas') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    @foreach ($kelas as $k)
                                        <option value="{{ $k->id }}"
                                            {{ old('id_kelas') == $k->id ? 'selected' : null }}>{{ $k->namakelas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                Mata Pelajaran
                                <select name="id_mp"
                                    class="form-control form-control @error('id_mp') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    @foreach ($mp as $matapelajaran)
                                        <option value="{{ $matapelajaran->id }}"
                                            {{ old('id_mp') == $matapelajaran->id ? 'selected' : null }}>
                                            {{ $matapelajaran->namapelajaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                Status
                                <select name="id_status"
                                    class="form-control form-control @error('id_status') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    @foreach ($status as $stat)
                                        <option value="{{ $stat->id }}"
                                            {{ old('id_status') == $stat->id ? 'selected' : null }}>{{ $stat->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                Tanggal Daftar
                                <input name="tgl_masuk" type="date" value="{{ old('tgl_masuk') }}"
                                    class="form-control @error('tgl_masuk') is-invalid @enderror">
                            </div>
                            Upload Foto
                            <div class="form">
                                <input name="foto" type="file"
                                    class=" @error('foto') is-invalid @enderror"title="Pilih File Foto">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-facebook ">
                                Simpan
                            </button>
                            <a href="{{ route('gurus.index') }}" class="btn btn-google ">
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
