<head>
	<title> Laporan Pendaftaran Santri Baru Jenjang MA </title>
	<!-- DataTables -->
	<link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>


@extends('layouts.app')


@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-8">
				<h1> <b>MA</b> </h1>
			</div>
			<div class="col-sm-4">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
					<li class="breadcrumb-item active">Laporan</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title"> Pendaftaran santri baru jenjang MA </h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Fasilitas</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
								</tr>
							</thead>
							<tbody>
								<!-- Variabel php untuk nomor-->    <?php
								$nomer = 1;
								?>
								<!-- ambil data di database-->
								@foreach($siswa as $siswa)
								<tr>
									<th>{{ $nomer++}}</th>
									<td>{{ $siswa->nama}} </td>
									<td>{{ $siswa->fasilitas}} </td>
									<td>{{ $siswa->jeniskelamin}} </td>
									<td>{{ $siswa->desa}}, {{ $siswa->kecamatan}}, {{ $siswa->state}}, {{ $siswa->country}} </td>
								</tr>
								@endforeach  
							</tbody>
						</table>

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


	@endsection