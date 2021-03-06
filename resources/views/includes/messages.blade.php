<!--Notificaciones -->
@if (session('notification'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
	{{ session('notification') }}
</div>
@endif

<!--Errores -->
@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif