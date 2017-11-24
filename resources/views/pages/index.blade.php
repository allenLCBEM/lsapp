@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the Lavarvel app.</p>
        <p><a href="/lsapp/public/login" class="btn btn-primary btn-lg" role="button">Login</a> <a href="/lsapp/public/register" class="btn btn-success btn-lg" role="button">Register</a></p>
    </div>
   
@endsection
