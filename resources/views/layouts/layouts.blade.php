<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>@yield('title')</title>
  </head>
  <body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')

  </body>
</html>
