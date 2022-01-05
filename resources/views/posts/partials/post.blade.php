@if($loop->odd)
  <h2>{{ $key }} {{ $post['title']}}</h2>
@else
  <h2 style="background-color:lightgray">{{ $key }} {{ $post['title']}}</h2>
@endif