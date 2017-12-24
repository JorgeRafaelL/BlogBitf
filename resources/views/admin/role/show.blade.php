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
			Roles
			<small>it all starts here</small>
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
				<h3 class="box-title">Roles</h3>
				<a href="{{ route('role.create') }}" class="btn btn-primary col-lg-offset-5">Nuevo rol</a>

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
							<h3 class="box-title">Data Table With Full Features</h3>
							@include('includes.messages')
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>N° de serie</th>
										<th>Nombre del rol</th>
										<th>Editar</th>
										<th>Eliminar</th>
									</tr>
								</thead>
								<tbody>
									@foreach($roles as $role)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td>{{ $role->name }}</td>
										<td><a href="{{ route('role.edit', $role->id) }}"><span class="glyphicon glyphicon-edit text-success"
											style="font-size: 22px;"></span></a>
										</td>
										<td>
											<form id="delete-form-{{ $role->id }}" action="{{ route('role.destroy', $role->id) }}" method="POST" style="display: none">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
											</form>
											<a href="" onclick="
											if (confirm('Seguro?')) {
												event.preventDefault();
												document.getElementById('delete-form-{{ $role->id }}').submit();
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
									<th>Nombre del rol</th>
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