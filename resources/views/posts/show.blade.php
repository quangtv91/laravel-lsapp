@extends('layouts.app')

@section('content')
  <a type="button" class="btn btn-light" href="/posts">Go back</a>
  <h1>{{$post->title}}</h1>
  <div>
    <p>{{$post->body}}</p>
  </div>
  <hr/>
  <small>Written on {{$post->created_at}}</small>
@stop
