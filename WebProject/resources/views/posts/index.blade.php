@extends('layouts.app')

@section('content')
	<h1> Posts </h1>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="well">
				<ul>
					<h3><a href="/posts/{{$post->id}}" > {{$post->title}} </a> </h3> 
					<small> Written on {{$post->created_at}} </small>
				</ul>
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<p> No posts found D: </p>
	@endif
@endsection