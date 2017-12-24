@extends('user/app')

@section('bg-img', asset('user/img/home-bg.jpg'))

@section('title', 'Home')
@section('sub-title', 'Subhome')

@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
	.fa-thumbs-up:hover{
		color: red;
	}
</style>
@endsection

@section('main-content')

<!-- Main Content -->
<div class="container">
	<div class="row" id="app">
		<div class="col-lg-8 col-md-10 mx-auto">

			<posts v-for="post in blog" 
			:title="post.title" 
			:subtitle="post.subtitle"
			:slug="post.slug"
			:posted_by="post.posted_by"
			:created_at = "post.created_at"
			:key = "post.index"
			:post_id = "post.id"
			login = "{{ Auth::check() }}"
			:likes = post.likes.length
			:slug = post.slug
			>
				
			</posts>

			<!-- Pager -->
			<div class="clearfix">
				{{ $posts->links() }}
				<a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>	
			</div>

		</div>
	</div>
</div>

<hr>
@endsection
@section('footer')
<script src="{{ asset('js/app.js') }}"></script>
@endsection
