@extends('layouts.app')

@section('title', $post['title'])

@section('content')

@if($post['is_new'])
<div>A new blog post</div>
@elseif(!$post['is_new'])
<div>An old blog post</div>
@endif

@unless($post['is_new'])
<div>Old post. Unless used</div>
@endunless

  <h1>{{ $post['title'] }}</h1>
  <p>{{ $post['content'] }}</p>

  @isset($post['has_comments'])
  <div>The post has some comments</div>
  @endisset

@endsection