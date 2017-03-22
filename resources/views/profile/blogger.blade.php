@extends('layout')

	@include('partials.css-links')
	<link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">
	<style type="text/css">
		body {
			background-image: url('{{asset('images/header-bg.jpg')}}');
		}
	</style>


@section('content')

	<nav>
		<div class="container">
			<img src="{{ URL::asset('images/iPOST Logo.png')}}" style="height:50px;">
			<a href="/"><button class="btn btn-danger">Log out</button></a>
		</div>
	</nav>

	<div class="container">

	@foreach($blogger as $user)


		@include('partials.modal-new-blog')

		<aside>
			<img src="{{URL::asset('images/profile.png')}}" id="pic">
			<div id="blogger-info">
				<h1> {{ $user->name }} </h1>
				<h3> {{ $user->username }} </h3>
			</div>

			<div>
				<button class="btn btn-primary" data-toggle="modal" data-target="#newBlogModal">Create a new blog</button>
			</div>

		</aside>

		<section id="blogs">
			<p> {{ $user->blogs }}
			</p>
		</section>

	@endforeach
	</div>
	
@endsection

	@include('partials.js-links')