@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Usuarios
			<small>Aquí se muestran todos los usuarios</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Examples</a></li>
			<li class="active">Blank page</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Usuarios</h3>
				<a href="{{ route('user.create') }}" class="btn btn-primary col-lg-offset-5">Nuevo usuario</a>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
					title="Collapse">
					<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Tabla con los usuarios y sus datos</h3>
							@include('includes.messages')
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>N° de serie</th>
										<th>Nombre del usuario</th>
										<th>Correo electrónico</th>
										<th>Rol asignado</th>
										<th>Estatus</th>
										<th>Editar</th>
										<th>Eliminar</th>
									</tr>
								</thead>
								<tbody>
									@foreach($users as $user)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td>{{ $user->name }}</td>
										<td>{{ $user->email }}</td>
										<td>
											@foreach($user->roles as $role)

											{{ $role->name }},
											@endforeach
										</td>
										<td>{{ $user->status? 'Activo' : 'No activo' }}</td>
										<td><a href="{{ route('user.edit', $user->id) }}"><span class="glyphicon glyphicon-edit text-success"
											style="font-size: 22px;"></span></a>
										</td>
										<td>
											<form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: none">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
											</form>
											<a href="" onclick="
											if (confirm('Seguro?')) {
												event.preventDefault();
												document.getElementById('delete-form-{{ $user->id }}').submit();
											}
											else {
												event.preventDefault();
											}">
											<span class="glyphicon glyphicon-remove text-danger" style="font-size: 22px;"></span>
										</a>
									</td>
								</tr>
								@endforeach

							</tbody>
							<tfoot>
								<tr>
									<th>N° de serie</th>
									<th>Nombre del usuario</th>
									<th>Correo electrónico</th>
									<th>Rol asignado</th>
									<th>Estatus</th>
									<th>Editar</th>
									<th>Eliminar</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>

			</div>
			<!-- /.box-body -->
			<div class="box-footer">
				Footer
			</div>
			<!-- /.box-footer-->
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>
@endsection

@section('footerSection')
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- page script -->
<script>
	$(function () {
		$('#example1').DataTable()

	})
</script>
@endsection