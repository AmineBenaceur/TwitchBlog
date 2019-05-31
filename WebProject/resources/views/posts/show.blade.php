@extends('layouts.app')
@section('content')
	
	@if(is_null($post))
		<a href="/posts" class="btn btn-default">Go Back </a>
		<h1> oops! Something messed up mannnng </h1>
	@else
	<a href="/posts" class="btn btn-default"> Go Back </a>
		<h1> {{$post->title}} </h1>
		
		<div>
			<p> {{$post->body}} </p>
		</div>
		<hr>
		<small> {{$post->created_at}} </small>
	@endif
	
@endsection