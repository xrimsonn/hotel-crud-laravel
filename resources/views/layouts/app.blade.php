<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  <link rel="stylesheet" href="{{ url('css/app.css') }}">
  <script src="https://kit.fontawesome.com/a41d3240c2.js" crossorigin="anonymous"></script>
  <link rel="icon" href="{{ url('/icons/bell-concierge-solid.svg') }}" type="image/x-icon">
  <title>@yield('title')</title>
</head>

<body>
  <main class="container">
    <nav>
      <ul>
        <li><strong><a href="{{ route('home.index') }}" class="contrast"><i class="fa-solid fa-bell-concierge fa-bounce"></i> OneTree by Halton</a></strong></li>
      </ul>
      <ul>
        <li><a href="{{ route('clients.index') }}" role="button" class="contrast">Clientes</a></li>
        <li><a href="{{ route('orders.index') }}" role="button" class="contrast">Ordenes</a></li>
        <li><a href="{{ route('staff.index') }}" role="button" class="contrast">Personal</a></li>
      </ul>
    </nav>
    <article>
      @yield('content')
      <footer>
        José Antonio Rosales &copy;2023<br />
        <a class="secondary" target="_blank" href="https://www.instagram.com/antonnn_o/"><i class="fa-brands fa-instagram fa-lg"></i></a>
        <a class="secondary" target="_blank" href="https://github.com/xrimsonn"><i class="fa-brands fa-github fa-lg"></i></a>
        <a class="secondary" target="_blank" href="https://www.linkedin.com/in/antonio-rosales-207793263/"><i class="fa-brands fa-linkedin fa-lg"></i></a>
      </footer>
    </article>
  </main>
  @yield('scripts')
</body>

</html>
