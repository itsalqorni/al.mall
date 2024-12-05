@extends('layout.app')

@section('title', 'Karyawan Baru')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Karyawan Baru</h1>

<div class="row">
    <div class="col-6">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Karyawan Baru</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('karyawan.add.insert') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
                        @error ('nama')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Masukkan email">
                        @error ('email')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukkan alamat"></textarea>
                        @error ('alamat')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>No Telp</label>
                        <input type="number" class="form-control" name="no_telp" placeholder="Masukkan nomor telepon">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
