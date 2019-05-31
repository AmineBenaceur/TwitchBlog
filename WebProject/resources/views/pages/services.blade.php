@extends('layouts.app')

@section('content')
    	<h1> Services  </h1> 
    	<p1> This is the Services page </p1>

    	@if(count($services)  > 0)
    		@foreach($services as $x )
    		<ul class="list-group">
    			<li class = "list-group-item"> {{$x}} </li>
    		</ul>
    		@endforeach 			
    	@endif

@endsection