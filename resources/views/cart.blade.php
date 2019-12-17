@extends ("plantilla")

@section("title")
  Mis carrito de compras
@endsection

@section("main")
  <h1>Mi carrito</h1>
  @if (Auth::user() -> productsInCart () ->isNotEmpty())
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Cuadro</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach (Auth::user() -> productsInCart as $productInCart ())
          <tr>
            <th>
              {{--img es un dato de la columna img de la tabla product, el alt es la descpricion de la imagen aca seria name--}}
              {{-- <img src="{{productInCart->product->img}}" alt="{{productInCart->product->name}}"> --}}
            </th>
            {{-- <td>{{productInCart->product->name}}</td>
            <td>{{productInCart->product->price}}</td>
            <td>{{productInCart->product->price}}</td> --}}
          </tr>
        @endforeach
        </tbody>
      </table>
  @else
    <p>No tenés productos en el carrito</p>
  @endif








{{--
<html lang="es">

  <!-- Head -->
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- CSRF Token Esto viene de app.blade.php -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- Scripts Esto viene de app.blade.php-->
      <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Reset -->
<link rel="stylesheet" href="/css/reset.css">

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/c028c941e3.js" crossorigin="anonymous"></script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300|Shadows+Into+Light&display=swap" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="/css/styles.css ">      <title>Carrito</title>
  </head>

</head>


<header>

  <div class="primary-wrap row">

    <div class="brand-wrap col-2 offset-5">
              <h1>
                  <a href="/index">
          <img src="/img/logo.png" alt="Galería de Arte" class="logo">
          <!-- Galería de Arte -->
                  </a>
               </h1>
    </div>

</header>
<body>
  <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
          <div class="container">
              {{--<a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>--}}
              {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button> --}}

              {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                  <!-- Right Side Of Navbar -->

                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{--hola xxxx--}}{{--{{ Auth::user()->name }}--}} <!--<span class="caret"></span>
                              {{-- </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                  <a class="dropdown-item" href="/index">Ir al incio</a>

                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Cerrar sesion') }}
                                  </a>
 --}}

                                  {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> --}}
                                      {{-- @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div> --}}
      {{-- </nav> --}} --}}

      {{-- <main class="py-4">
          @yield('content')
      </main> --}}
  {{-- </div>

    <br>
    <br>
    <br>
    <br>

</body>

<footer class="row">


</footer> --}} --}}
