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
			Publicaciones
			<small>Todas las publicaciones están aquí</small>
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
				<h3 class="box-title">Empezar a publicar</h3>
				@can('posts.create', Auth::user())
				<a href="{{ route('post.create') }}" class="btn btn-primary col-lg-offset-5">Nueva publicación</a>
				@endcan

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
										<th>Titulo de la publicación</th>
										<th>Subtitulo de la publicación</th>
										<th>Nombre de rastro</th>
										<th>Fecha de creación</th>
										@can('posts.update', Auth::user())
										<th>Editar</th>
										@endcan
										@can('posts.delete', Auth::user())
										<th>Eliminar</th>
										@endcan
									</tr>
								</thead>
								<tbody>
									@foreach($posts as $post)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td>{{ $post->title }}</td>
										<td>{{ $post->subtitle }}</td>
										<td>{{ $post->slug }}</td>
										<td>{{ $post->created_at }}</td>

										@can('posts.update', Auth::user())
										<td><a href="{{ route('post.edit', $post->id) }}"><span class="glyphicon glyphicon-edit text-success"
											style="font-size: 22px;"></span></a>
										</td>
										@endcan

										@can('posts.delete', Auth::user())
										<td>
											<form id="delete-form-{{ $post->id }}" action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: none">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
											</form>
											<a href="" onclick="

											if (confirm('Seguro?')) {
												event.preventDefault();
												document.getElementById('delete-form-{{ $post->id }}').submit();
											}
											else {
												event.preventDefault();
											}

											{{--  swal({
												title: '¿Estás seguro de eliminar?',
												text: 'Una vez eliminado no podrás recuperarlo!',
												icon: 'warning',
												buttons: true,
												dangerMode: true,
											})
											.then((willDelete) => {
												if (willDelete) {

													event.preventDefault();
													document.getElementById('delete-form-{{ $post->id }}').submit();

													swal('Eliminado con exito!', {
													icon: 'success',
												});
											} 
											else {
											event.preventDefault();
											swal('No se eliminó el usuario!', {
											title: 'Cancelado!',
											icon: 'error'
										});
									}
								}); --}}

								">
								<span class="glyphicon glyphicon-remove text-danger" style="font-size: 22px;"></span>
							</a>
						</td>
						@endcan
					</tr>
					@endforeach

				</tbody>
				<tfoot>
					<tr>
						<th>N° de serie</th>
						<th>Titulo de la publicación</th>
						<th>Subtitulo de la publicación</th>
						<th>Nombre de rastro</th>
						<th>Fecha de creación</th>
						@can('posts.update', Auth::user())
						<th>Editar</th>
						@endcan
						@can('posts.delete', Auth::user())
						<th>Eliminar</th>
						@endcan
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
<script src="{{ asset('admin/bower_components/sweetalert/sweetalert.min.js') }}"></script>
<!-- page script -->
<script>
	$(function () {
		$('#example1').DataTable()

	})
</script>
@endsection