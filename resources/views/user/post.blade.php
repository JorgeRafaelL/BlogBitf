@extends('user/app')

@section('bg-img', Storage::disk('local')->url($post->image))

@section('head')
<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endsection

@section('title', $post->title)
@section('sub-title', $post->subtitle)

@section('main-content')
<!-- Post Content -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11&appId=519288548445964';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<article>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-10 mx-auto">
				<small>Fecha de creación: {{ $post->created_at }}</small>
				{{-- Categorías --}}
				@foreach($post->categories as $category)
				<small class="pull-right" style="margin-right: 15px;">
					<a href="{{ route('category',$category->slug) }}">
						{{ $category->name }}
					</a>
				</small>
				
				@endforeach

				{!! htmlspecialchars_decode($post->body) !!}

				{{-- Etiquetas --}}
				<h4>Etiquetas</h4>
				
				@foreach($post->tags as $tag)
				<a href="{{ route('tag',$tag->slug) }}">
					<small class="pull-left" 
					style="margin-right: 15px; text-decoration: underline;
					border-radius: 5px; border: 1px solid gray;
					padding: 5px;
					">
					{{ $tag->name }}
				</small>
			</a>
			@endforeach

		</div>

		<div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="10"></div>
	</div>
</div>
</article>

<hr>
@endsection

@section('footer')
<script src="{{ asset('user/js/prism.js') }}"></script>
@endsection