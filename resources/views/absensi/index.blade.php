@extends('layouts.app')

@section('content')


<head>
  <title> Absen - Pondok Pesantren Askhabul Kahfi</title>
</head>


    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
<!-- Notifikasi ------------------------------------------------- -->
        @if(session('sukses'))
        <div class="alert alert-success mt-3" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Absensi Muhasabah Online 2022</h2>
                    </div>
                    <div class="card-body">
                        <a href="/absensi/create" class="btn btn-small btn-success mb-2">Print Data</a>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Nama Santri</th>
                                  <th>Wali</th>
                                  <th>Kelas</th>
                                  <th>Alamat</th>
                                  <th>Foto</th>
                                  <th>Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($absen as $item)
                            <tbody>
                             <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->name_wali }}</td>
                              <td>{{ $item->kelas }}</td>
                              <td>{{ $item->alamat }}</td>
                              <td align="center">
                                  <a href="{{url('/storage')}}/{{ $item->foto }}" data-lightbox="image">

                                    <img src="{{url('/storage')}}/{{ $item->foto }}" width="60" alt="">
                                  </a>
                              </td>
                              <td align="center">
                                <form action="{{ route('absensi.destroy', $item->id) }}" method="post">
                                  @method("DELETE")
                                  @csrf
                                  <button type="submit" class="badge badge-danger badge-pill border-0" onclick=" return confirm('Apakah yakin ingin menghapus data ini ?')">
                                    Delete
                                  </button>
                                </form>
                              </td>
                             </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- EndModal ------------------------------------------------- -->



    </section>
    <!-- /.content -->




@endsection






