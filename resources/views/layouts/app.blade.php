<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel App - @yield('title')</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
  <div class="d-flex dlex-column flex-md-row align-items-center p-3 px-md-4
  bg-white border-bottom border-shaddow-sm mb-3">
    <h5 class="my-0 mr-md-auto font-weight-normal">Laravel App</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="{{ route('home.index') }}">Home</a>
      <a class="p-2 text-dark" href="{{ route('posts.index') }}">Blog Posts</a>
      <a class="p-2 text-dark" href="{{ route('posts.create') }}">Add Blog Post</a>
      <a class="p-2 text-dark" href="{{ route('home.contact') }}">Contact</a>
    </nav>
  </div>
  <div class="container">
    @if(session('status'))
    <div style="background: red; color: white;">
      {{ session('status') }}
    </div>
    @endif
    @yield('content')
  </div>
</body>
</html>