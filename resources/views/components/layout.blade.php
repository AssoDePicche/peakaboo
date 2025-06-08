<html>
  <head>
    <title>{{ $title ?? 'Peekaboo' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

  <body>
    {{ $slot }}

    <footer>
      <hr>
      <aside>Copyright &copy; {{ date('Y') }} <a href='/'>Peekaboo</a></aside>
    </footer>
  </body>
</html>
