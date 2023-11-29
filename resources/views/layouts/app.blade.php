<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  <link rel="stylesheet" href="{{ url('css/app.css') }}">
  <script src="https://kit.fontawesome.com/a41d3240c2.js" crossorigin="anonymous"></script>
  <title>@yield('title')</title>
</head>

<body>
  <main class="container">
    <nav>
      <ul>
        <li><strong><a href="{{ route('home.index') }}" class="contrast">DoubleTree by Hilton</a></strong></li>
      </ul>
      <ul>
        <li><a href="{{ route('clients.index') }}" role="button" class="contrast">Clientes</a></li>
        <li><a href="{{ route('clients.index') }}" role="button" class="contrast">Restaurante</a></li>
        <li><a href="{{ route('clients.index') }}" role="button" class="contrast">Personal</a></li>
      </ul>
    </nav>
    <article>
      @yield('content')
    </article>
  </main>
  @yield('scripts')
</body>

</html>
