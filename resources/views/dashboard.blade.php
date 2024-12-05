@extends('layout.app')

@section('title', 'Dashboard Karyawan')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Selamat Datang di Dashboard Karyawan</h1>

{{-- <div class="row">
    <!-- Card: Total Perusahaan -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Perusahaan yang Bekerja Sama</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-building fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="row">
    <!-- Card: Total Karyawan -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Karyawan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">120</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Karyawan Baru -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Karyawan Baru</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Karyawan Aktif -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Karyawan Aktif</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">105</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-check fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Karyawan Nonaktif -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Karyawan Nonaktif</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-times fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Card: Aktivitas Karyawan -->
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <h5 class="font-weight-bold text-primary">Aktivitas Karyawan Terbaru</h5>
                <p class="text-muted">Di bawah ini adalah ringkasan aktivitas terbaru yang dilakukan oleh karyawan Anda:</p>

                <div class="row">
                    <!-- Aktivitas 1 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Tugas Selesai</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">30 Tugas</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-check-circle fa-2x text-success"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Aktivitas 2 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Karyawan Aktif</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">105</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-check fa-2x text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Aktivitas 3 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            Karyawan Absen</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">5 Absen</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-times fa-2x text-danger"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="mt-3">
                    Aktivitas ini mencakup tugas yang sudah diselesaikan oleh karyawan, status keaktifan mereka, dan jumlah absensi yang terjadi selama periode ini.
                </p>
                <p>
                    Pastikan untuk memonitor perkembangan karyawan Anda untuk mencapai produktivitas yang lebih baik dalam waktu dekat.
                </p>
            </div>
        </div>
    </div>
</div>

<h1 class="h3 mb-4 text-gray-800">Aktivitas Sehari-hari Karyawan</h1>

<div class="row">
    <!-- Card: Aktivitas Sehari-hari -->
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <h5 class="font-weight-bold text-primary">Ringkasan Kegiatan Karyawan Hari Ini</h5>
                <p class="text-muted">Berikut adalah ringkasan kegiatan yang dilakukan oleh karyawan selama hari ini:</p>

                <div class="row">
                    <!-- Aktivitas 1 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Laporan Pekerjaan Terselesaikan</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">20 Laporan</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-file-alt fa-2x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Aktivitas 2 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Karyawan Menghadiri Rapat</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">12 Rapat</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-success"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Aktivitas 3 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Karyawan Hadir di Kantor</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">95%</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar-check fa-2x text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Aktivitas 4 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            Karyawan Absen</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">5 Absen</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-times fa-2x text-danger"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="mt-3">
                    Aktivitas karyawan adalah segala bentuk kegiatan yang dilakukan oleh individu dalam lingkungan kerja untuk mencapai tujuan dan sasaran yang telah ditetapkan oleh perusahaan. Setiap aktivitas karyawan berperan penting dalam mendukung kelancaran operasional dan perkembangan organisasi secara keseluruhan. Aktivitas ini bisa bervariasi, mulai dari tugas rutin yang berulang setiap hari hingga proyek-proyek jangka panjang yang membutuhkan perencanaan dan kolaborasi tim.

Setiap hari, karyawan terlibat dalam berbagai aktivitas yang berhubungan dengan pekerjaan mereka, seperti menghadiri rapat, menyelesaikan tugas individu, berkomunikasi dengan rekan kerja, dan membuat keputusan yang berdampak pada kinerja perusahaan. Selain itu, karyawan juga seringkali terlibat dalam pengambilan keputusan strategis, menyelesaikan masalah operasional, atau memberikan ide-ide baru untuk inovasi yang bisa meningkatkan efisiensi kerja.
                </p>
                <p>
                    Pastikan untuk selalu memonitor aktivitas karyawan guna menjaga tingkat produktivitas dan keberhasilan tim Anda.
                </p>
            </div>
        </div>
    </div>
</div>

{{-- <!-- Tabel Data Karyawan -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>tiger.nixon@example.com</td>
                        <td>+62 812345678</td>
                        <td>Aktif</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>garrett.winters@example.com</td>
                        <td>+62 812345678</td>
                        <td>Nonaktif</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
@endsection
