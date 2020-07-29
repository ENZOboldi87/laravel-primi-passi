<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Il corso per diventare web developer e trovare un nuovo lavoro</title>
  </head>
  <body>
    @include('partials.header')
    <main>
      <div class="container">
        @yield('content')
      </div>
    </main>
    @include('partials.footer')

  </body>
</html>
