@extends('layouts.app')

@section('content')

<head>
  <title> Edit - Pondok Pesantren Askhabul Kahfi</title>
</head>

<br>

<!-- Notifikasi ------------------------------------------------- -->
@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endif

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">

			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="card card-primary">

					<div class="card-header">
						<h3 class="card-title"> Edit Data Waktu Pendaftaran </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('waktu_pendaftaran') }}/{{$waktu_pendaftaran->id}}/{{('updatewaktu_pendaftaran')}}" method="POST" enctype="multharga_awalart/form-data" >
						{{csrf_field()}}
						<div class="card-body">

							<!-- __________________________________________________________________________________ -->
							<!-- transfer -->                        
							<div class="form-group row">
								<div class="col-md-12">
									<label for="transfer"> Waktu Pendaftaran </label>
									<input id="transfer" type="text" class="form-control @error('transfer') is-invalid @enderror" name="transfer" value="{{ $waktu_pendaftaran->transfer}}" placeholder="" required autocomplete="transfer" autofocus>
									@error('transfer')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							
								<!-- Tombol -->
								<div class="col-md-6">
									<br><br>
									<button type="submit" class="btn btn-primary">
										Update
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /.card -->
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->



@stop