@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  @if (count($posts) > 0)
    @foreach ($posts as $post)
      <div class="card mb-2">
        <div class="card-body">
          <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
          <p class="card-text">{{$post->created_at}}</p>
        </div>
      </div>
    @endforeach
{{--    {{$posts->links()}}--}}
  @else
    <p>No posts found</p>
  @endif
@stop
