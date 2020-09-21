<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    @include('partials.header')

    <main class="container">
      @yield('content')
    </main>

    @include('partials.footer')
  </body>
</html>
