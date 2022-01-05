@extends('layouts.app')

@section('title', 'Blog')

@section('content')

  <!-- @if(count($posts))

  @foreach($posts as $key => $post)

  <h2>{{ $key }} {{ $post['title'] }}</h2>

  @endforeach

  @else

  <h2>No Posts Found</h2>

  @endif -->

  @forelse ($posts as $key => $post)
     @include('posts.partials.post')
  @empty
    <h2>No Posts Found</h2>
  @endforelse

@endsection