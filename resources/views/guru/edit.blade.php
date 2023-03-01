@extends('master.layouts')
@section('title', 'Edit Data Guru')
@section('link', 'Guru/Edit')
@section('content')
    <!-- Page Heading -->

    <div class="card o-hidden border-0 shadow-lg">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="p-3">
                        <div class="text-center">
                            <h4 class="text-gray-900 mb-2 m-0 font-weight-bold">Edit Data</h4>
                        </div>
                        <form class="user" action="{{ route('gurus.update', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                Nama
                                <input name="nama" type="text" value="{{ old('nama', $data->nama) }}"
                                    class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail"
                                    placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                                NIP
                                <input name="nip" type="text" value="{{ old('nip', $data->nip) }}"
                                    class="form-control form-control @error('nip') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Masukan NIP">
                            </div>
                            <div class="form-group">
                                Email
                                <input name="email" type="email" value="{{ old('email', $data->email) }}"
                                    class="form-control form-control @error('email') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Masukan email">
                            </div>
                            <div class="form-group">
                                No Telepon / WA
                                <input name="notelepon" type="number" value="{{ old('notelepon', $data->notelepon) }}"
                                    class="form-control form-control @error('notelepon') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Contoh : 081265473896">
                            </div>
                            <div class="form-group">
                                Alamat
                                <input name="alamat" type="text" value="{{ old('alamat', $data->alamat) }}"
                                    class="form-control form-control @error('alamat') is-invalid @enderror"
                                    id="exampleInputEmail" placeholder="Masukan alamat">
                            </div>
                            <div class="form-group">
                                Agama
                                <select name="id_agama"
                                    class="form-control form-control @error('id_agama') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    @foreach ($agama as $ag)
                                        <option value="{{ $ag->id }}"
                                            {{ old('id_agama', $data->id_agama) == $ag->id ? 'selected' : null }}>
                                            {{ $ag->nama }}
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
                                            {{ old('id_jjenis', $data->id_jk) == $jenis->id ? 'selected' : null }}>
                                            {{ $jenis->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                Jabatan
                                <select name="id_jabatan"
                                    class="form-control form-control @error('id_jabatan') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    @foreach ($jabatan as $jab)
                                        <option value="{{ $jab->id }}"
                                            {{ old('id_jabatan', $data->id_jabatan) == $jab->id ? 'selected' : null }}>
                                            {{ $jab->nama }}
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
                                            {{ old('id_kelas', $data->id_kelas) == $k->id ? 'selected' : null }}>
                                            {{ $k->namakelas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                Pilih Mata Pelajaran
                                <select name="id_mp"
                                    class="form-control form-control @error('id_mp') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    @foreach ($mp as $matapelajaran)
                                        <option value="{{ $matapelajaran->id }}"
                                            {{ old('id_mp', $data->id_mp) == $matapelajaran->id ? 'selected' : null }}>
                                            {{ $matapelajaran->namapelajaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                Status
                                <select name="id_status"
                                    class="form-control form-control @error('id_status') is-invalid @enderror">
                                    <option value="">-Pilih-</option>
                                    @foreach ($status as $sta)
                                        <option value="{{ $sta->id }}"
                                            {{ old('id_status', $data->id_status) == $sta->id ? 'selected' : null }}>
                                            {{ $sta->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    Perbaharui Tanggal Daftar
                                    <input name="tgl_masuk" type="date" value="{{ old('tgl_masuk', $data->tgl_masuk) }}"
                                        class="form form-control @error('tgl_masuk') is-invalid @enderror">
                                </div>
                                <div class="col-md-6">
                                    Tanggal Daftar Sembelumnya :
                                    <p><em>
                                            {{ \Carbon\Carbon::parse($data->tgl_masuk)->isoFormat('dddd, DD MMMM YYYY') }}</em>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="form">
                                Ganti Foto
                                <input name="foto" type="file" class="form @error('foto') is-invalid @enderror"
                                    value="{{ old('foto', $data->foto) }}">
                                @error('foto')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-facebook btn">
                                Simpan
                            </button>
                            <a href="{{ route('gurus.index') }}" class="btn btn-google btn">
                                Kembali
                            </a>
                        </form>
                        <hr>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center">Foto Profil</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-2 text-center">
                                <img src="/image/{{ $data->foto }}">
                                <p> {{ $data->namaguru }}</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
