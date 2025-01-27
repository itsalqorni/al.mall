
@extends('layout.app')

@section('title', 'karyawan')

@section('content')
                  <!-- Page Heading -->
                  <h1 class="h3 mb-2 text-gray-800">Karyawan</h1>

                  @if (session('message'))
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                                 
                 <!-- DataTales Example -->
                 <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <a href="{{ route('karyawan.insert') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah </a>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                  <tr class="text-center">
                                      <th>No</th>
                                      <th>Nama</th>
                                      <th>Emai</th>
                                      <th>Alamat</th>
                                      <th>No Telp</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php $no = 1; ?>
                                @foreach ($karyawan as $row)
                                  <tr class="text-center">
                                      <td>{{ $no++ }}</td>
                                      <td>{{ $row->nama }}</td>
                                      <td>{{ $row->email }}</td>
                                      <td>{{ $row->alamat }}</td>
                                      <td>{{ $row->no_telp }}</td>
                                      <td>
                                        <a href="{{ route('karyawan.edit', $row->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        
                                        <form action="{{ route('karyawan.delete', $row->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                        
                                      </td>
                                  </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
@endsection
