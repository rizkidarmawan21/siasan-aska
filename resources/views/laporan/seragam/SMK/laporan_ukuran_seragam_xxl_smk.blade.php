<head>
	<title> Laporan Seragam SMK ukuran XXL </title>
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
				<h1> <b>Laporan Seragam SMK ukuran XXL</b> </h1>
			</div>
			<div class="col-sm-4">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('/seragam')}}">Seragam</a></li>
					<li class="breadcrumb-item active">SMK</li>
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
						<h3 class="card-title"> Laporan Seragam SMK ukuran <b>XXL</b> </h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Jenjang</th>
									<th>Seragam</th>
								</tr>
							</thead>
							<tbody>
								<!-- Variabel php untuk nomor-->    <?php
								$nomer = 1;
								?>
								<!-- ambil data di database-->
								@foreach($ukuran_seragam as $seragam)
								<tr>
									<th>{{ $nomer++}}</th>
									<td>{{ $seragam->nama}} </td>
									<td>{{ $seragam->jeniskelamin}} </td>
									<td>{{ $seragam->jenjang}} </td>
									<td>{{ $seragam->seragam}} </td>
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