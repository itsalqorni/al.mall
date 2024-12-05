@extends('layout.app')

@section('title', 'Edit Karyawan')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Edit Karyawan</h1>

<form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
    @csrf
    @method('POST')

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $karyawan->nama }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $karyawan->email }}" required>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $karyawan->alamat }}" required>
    </div>

    <div class="mb-3">
        <label for="no_telp" class="form-label">No Telepon</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $karyawan->no_telp }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
