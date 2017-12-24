@extends('admin.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Text Editors
			<small>Advanced form element</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Editors</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">

				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Nuevo permiso</h3>
					</div>

					@include('includes.messages')
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="{{ route('permission.store') }}" method="POST">
						{{ csrf_field() }}
						<div class="box-body">
							<div class="col-lg-offset-3 col-lg-6">

								<div class="form-group">
									<label for="name">Nombre del permiso</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Escribe un permiso">
								</div>

								<div class="form-group">
									<label for="for">Para quien</label>
									<select name="for" id="for" class="form-control">
										<option selected disabled>Selecciona para quien</option>
										<option value="user">Usuario</option>
										<option value="post">Publicación</option>
										<option value="other">Otro</option>
									</select>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary">Crear permiso</button>
									<a href="{{ route('permission.index') }}" class="btn btn-warning">Atrás</a>
								</div>
							</div>

							
						</div>
						<!-- /.box-body -->

					</form>
				</div>
				<!-- /.box -->

				
			</div>
			<!-- /.col-->
		</div>
		<!-- ./row -->
	</section>
	<!-- /.content -->
</div>
@endsection