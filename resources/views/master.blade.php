<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


@include('include.style')
    <title>Laravel Project</title>
  </head>
  <body>
  @include('include.navbar')
  <div class="container">
    @if ('status')
            <div class="bg-info text-white text-center">{{ session('status') }}</div>
            @endif

    @yield('content')
  </div>

   @include('include.script')
  </body>
</html>
