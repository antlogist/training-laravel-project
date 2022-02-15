@if($loop->odd)
  <h2>{{ $key }} {{ $post->title}}</h2>
@else
  <h2 style="background-color:lightgray">{{ $key }} {{ $post->title}}</h2>
@endif

<div>
  <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete!">

  </form>
</div>