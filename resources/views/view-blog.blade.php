@extends('layout')

	@include('partials.css-links')
	<link rel="stylesheet" type="text/css" href="{{asset('css/blogs.css')}}">
	<style type="text/css">
		body {
			background-image: url('{{asset('images/header-bg.jpg')}}');
		}
	</style>

@section('content')

	@include('partials.modal-sign-up')
	@include('partials.modal-sign-in')

	<nav>
		<div class="container">
			<img src="{{ URL::asset('images/iPOST Logo.png')}}" style="height:50px;">
			<button class="sign-up button" data-toggle="modal" data-target="#signUpModal"> Sign Up </button>
			<button class="button" data-toggle="modal" data-target="#signInModal"> Sign In </button>
		</div>
	</nav>


	@foreach($blog as $blog)
	<div class="blog">
		<h1> {{ $blog->subject}} </h1>
		<hr>
		<p> {{ $blog->body }} </p>
		<hr>
		<p> Posted by: <span>{{ $blog->blogger->name }}</span>
	</div>
	@endforeach



@endsection

	@include('partials.js-links')