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
						<h3 class="box-title">Nuevo usuario</h3>
					</div>

					@include('includes.messages')
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="{{ route('user.store') }}" method="POST">
						{{ csrf_field() }}
						<div class="box-body">
							<div class="col-lg-offset-3 col-lg-6">

								<div class="form-group">
									<label for="name">Nombre del usuario</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Escribe el nombre" value="{{ old('name') }}">
								</div>

								<div class="form-group">
									<label for="email">Correo electrónico</label>
									<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
								</div>

								<div class="form-group">
									<label for="phone">Télefono</label>
									<input type="number" class="form-control" id="phone" name="phone" placeholder="Número de telefono" value="{{ old('phone') }}">
								</div>

								<div class="form-group">
									<label for="password">Contraseña</label>
									<input type="text" class="form-control" id="password" name="password" placeholder="Contraseña" value="{{ old('password', str_random(8)) }}">
								</div>

								<div class="form-group">
									<label for="password_confirmation">Confirmar contraseña</label>
									<input type="text" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Contraseña" 
									value="{{ old('password_confirmation') }}">
								</div>

								<div class="form-group">
									<label for="">Estatús</label>
									<div class="checkbox">
									<label for="">
										<input type="checkbox" name="status" 
										@if(old('status') == 1) checked @endif
										value="1">Click para activar
									</label>
								</div>
								</div>
								
								<div class="form-group ">
									<label >Asignar roles</label>
									<div class="row">
										@foreach($roles as $role)
										<div class="col-lg-3">
											<div class="checkbox">
												<label for="">
													<input type="checkbox" name="role[]" value="{{ $role->id }}">{{ $role->name }}
												</label>
											</div>
										</div>
										@endforeach
									</div>

								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary">Crear usuario</button>
									<a href="{{ route('user.index') }}" class="btn btn-warning">Atrás</a>
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