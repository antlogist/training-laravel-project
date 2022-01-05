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
    {{-- @break($key == 1) --}}
   {{-- @continue($key == 1) --}}
    @if($loop->odd)
      <h2>{{ $key }} {{ $post['title']}}</h2>
    @else
      <h2 style="background-color:lightgray">{{ $key }} {{ $post['title']}}</h2>
    @endif
  @empty
    <h2>No Posts Found</h2>
  @endforelse

@endsection