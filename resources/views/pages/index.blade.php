@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This is Laravel app</p>
    <p>
      <button type="button" class="btn btn-primary" href="/login">Login</button>
      <button type="button" class="btn btn-success" href="/register">Register</button>
    </p>
  </div>
@stop

