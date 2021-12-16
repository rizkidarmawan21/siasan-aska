<head>
  <title> Data Masuk - Pondok Pesantren Askhabul Kahfi</title>
</head>

@extends('layouts.app')



@section('content')





<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1> Selamat Datang Di Ponpes Askhabul Kahfi </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
          <li class="breadcrumb-item active">Pendaftaran</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <!-- Notifikasi ------------------------------------------------- -->
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
    @endif

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Silakah untuk melakukan Tes seleksi</h3>
          </div>
          <!-- /.card-header -->
          
          <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jalur</th>
                  <th>Nama</th>
                  <th>Jenjang</th>
                  <th>Fasilitas</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <!-- Variabel php untuk nomor-->    
                <?php
                $nomer = 1;
                ?>
                <!-- ambil data di database-->
                @foreach($data_siswa as $siswa)
                <tr>
                  <th>{{ $nomer++}}</th>
                  <td>{{ $siswa->jalurpendaftaran}} </td>
                  <td>{{ $siswa->nama}} </td>
                  <td>{{ $siswa->jenjang}} </td>
                  <td>{{ $siswa->fasilitas}} </td>
                  <td>{{ $siswa->jeniskelamin}} </td>
                  <td>{{ $siswa->desa}}, {{ $siswa->kecamatan}}, {{ $siswa->state}}, {{ $siswa->country}} </td>
                  <td>  
                    <label  class="badge {{($siswa->status == 1) ? 'badge-success' : 'badge-danger'}}" >
                      @if ($siswa->status == 1)
                      <a href="{{url('/daftar/data/status/'.$siswa->id)}}" class="text-white"> {{ ($siswa->status == 0) ? 'Belum Tes' : 'Sudah diterima' }} </a>
                    @else
                      <a href="{{url('/daftar/data/status/'.$siswa->id)}}" class="text-white"> {{ ($siswa->status == 0) ? 'Belum Tes' : 'Sudah diterima' }} </a>
                    @endif
                    </label> 
                  </td>
                  <td>
                    <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('detail')}}" class="btn btn-success btn-sm">
                      <i class="fas fa-folder"></i> Detail</a>
                    <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')"><i class="fas fa-trash"></i> Delete</a>
                  </td>
                </tr>
                @endforeach  
              </tbody>
            </table>

            <br>
            <a href="{{url('daftar/dataditerima')}}" class="btn btn-success"> Data sudah diterima</a>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>

@endsection
