@extends('layouts.app')

@section('content')
  <!--   <h1> {{$title}} </h1>
    <p> This is my first Laravel application </p> -->

    <div class= "jumbotron text-center">
        <h1>Welcome to my Homepage! </h1>
            <p> This is my first Laravel application </p> 
            <p>    <a class="btn btn-primary btn-lg" href="/login">Login</a> <a class="btn btn-success btn-lg" href="/register">Register</a></p>

    </div>
@endsection