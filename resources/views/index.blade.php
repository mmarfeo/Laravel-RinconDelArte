@extends ("plantilla")
@section('titulo')
  Rincon Del Arte
@endsection
@section ("principal")

  <!-- Contenido principal de la página -->
  <main class="row">

    <!-- Barra lateral -->
    <section class="col-2 sidebar">









      <img class="arte" src="img/arte-6.jpeg" alt="">

    </section>
    <div class="main-content col-10 row">

      <!-- Carousel -->
<div class="carousel-container col-12 row">
<section id="demo" class="carousel slide col-12" data-ride="carousel">

<!-- Indicadores del carousel -->
<ul class="carousel-indicators">
<li data-target="#demo" data-slide-to="0" class="active"></li>
<li data-target="#demo" data-slide-to="1"></li>
<li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- Imágenes del carousel -->
<div class="carousel-inner">

<div class="carousel-item active">
<a href="#">
  <img src="img/carousel1.png" alt="...">
</a>
</div>

<div class="carousel-item">
<a href="#">
  <img src="img/carousel2.png" alt="...">
</a>
</div>

<div class="carousel-item">
<a href="#">
  <img src="img/carousel3.png" alt="...">
</a>
</div>

</div>

<!-- Controles del carousel -->
<div>
<a class="carousel-control-prev" href="#demo" data-slide="prev">
<span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
<span class="carousel-control-next-icon"></span>
</a>
</div>

</section>
</div>
<!-- Productos -->
<section class="col-12 row">
    <div class="products-container col-12 row">

@forelse ($products as $product)
{{--{{dd($productos ?? '')}};--}}

<article class="col-4">
    <a href="#" class="col-12"><img src={{$product->img }} alt=""></a>
    <p class="col-12">Nombre: {{$product->name ?? ''}}</p>
    <p class="col-12">Descripción: {{$product->desc}}</p>
    <p class="col-12">Precio: ${{$product->price }}</p>
    <!--<p class="col-12">Técnica</p>
    <p class="col-12">Precio</p>-->
    @guest
      {{--Le saque al boton la clase -primary que es la que le da el color azul cuando se cliquea, viene por defecto en laravel--}}
      <a href="{{ route('login') }}" class="btn btn boton col-7 offset-3">Agregar al carrito</a>
    @else
      {{--El ['productId' => $product->id] es un parametro requerido que le pedi a la route del addProduct --}}
      <form action="{{ route('addProductToCart', ['productId' => $product->id]) }}" method="post">
        {{ csrf_field() }}
        {{-- {{dd($product->id)}} --}}

        <div class="col-8 offset-2 boton">
          <input type="hidden" name="product_id" value="{{$product->id}}">
          <button type="submit" class="btn btn-danger">Agregar al carrito</button>
        </div>
        <br />

      </form>
    @endguest


        {{-- <a href="{{route('login')}}" class="link-boton">Agregar al carrito</a> --}}

</article>
@empty
@endforelse



      {{-- @guest
        <a href="{{ route('login') }}" class="link-boton">Agregar al carrito</a>
      @else
        {{--El ['productId' => $product->id] es un parametro requerido que le pedi a la route del addProduct --}}
        {{-- <form action="{{ route('addProductToCart', ['productId' => $product->id]) }}" method="post">
          {{ csrf_field() }} --}}
          {{-- <input type="hidden" name="product_id" value="{{ $product->id }}">
          <br />
          <button type="submit" class="link-boton">Agregar al carrito</button>
        </form> --}}
      {{-- @endguest --}}




{{-- <div class="row">
  <div class="col-12 col-lg-6">
    <img src="{{ $product->imageUrl }}" alt="{{ $product->name }}" />
  </div>
  <div class="col-12 col-lg-6">
    <p class="display-2 font-weight-bold">${{ $product->price }}</p>
    @guest
      <a href="{{ route('login') }}" class="btn btn-dark btn-lg">Agregar al carrito</button>
    @else --}}
      {{--El ['productId' => $product->id] es un parametro requerido que le pedi a la route del addProduct --}}
      {{-- <form action="{{ route('addProductToCart', ['productId' => $product->id]) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="product_id" value="{{ $product->id }}"> --}}
        {{-- <label for="count">Cantidad</label>
        <select id="count" name="count">
            @for ($i = 1; $i <= 10; $i++)
              <option value="{{$i}}">{{$i}}</option>
            @endfor --}}
        {{-- </select> --}}
        <br />
        {{-- <button type="submit" class="btn btn-dark btn-lg">Agregar al carrito</button> --}}
      </form>
    {{-- @endguest --}}
  </div>
</div>
<!--
<article class="col-4">
    <a href="#" class="col-12"><img src="img/cuadro.jpg" alt=""></a>
    <h3 class="col-12">Título</h3>
    <p class="col-12">Autor</p>
    <p class="col-12">Fecha</p>
    <p class="col-12">Técnica</p>
    <p class="col-12">Precio</p>
    <div class="col-8 offset-2 boton">
        <a href="#" class="link-boton">Agregar al carrito</a>
    </div>
</article>


<article class="col-4">
    <a href="#" class="col-12"><img src="img/cuadro.jpg" alt=""></a>
    <h3 class="col-12">Título</h3>
    <p class="col-12">Autor</p>
    <p class="col-12">Fecha</p>
    <p class="col-12">Técnica</p>
    <p class="col-12">Precio</p>
    <div class="col-8 offset-2 boton">
        <a href="#" class="link-boton">Agregar al carrito</a>
    </div>
</article>
{{--@forelse ($productos ?? '' as $producto)
  {{$producto->NomProducto}}
@endforelse--}}
    </div>
    <div class="products-container col-12 row">

<article class="col-4">
    <a href="#" class="col-12"><img src="img/cuadro.jpg" alt=""></a>
    <h3 class="col-12">Título</h3>
    <p class="col-12">Autor</p>
    <p class="col-12">Fecha</p>
    <p class="col-12">Técnica</p>
    <p class="col-12">Precio</p>
    <div class="col-8 offset-2 boton">
        <a href="#" class="link-boton">Agregar al carrito</a>
    </div>
</article>


<article class="col-4">
    <a href="#" class="col-12"><img src="img/cuadro.jpg" alt=""></a>
    <h3 class="col-12">Título</h3>
    <p class="col-12">Autor</p>
    <p class="col-12">Fecha</p>
    <p class="col-12">Técnica</p>
    <p class="col-12">Precio</p>
    <div class="col-8 offset-2 boton">
        <a href="#" class="link-boton">Agregar al carrito</a>
    </div>
</article>


<article class="col-4">
    <a href="#" class="col-12"><img src="img/cuadro.jpg" alt=""></a>
    <h3 class="col-12">Título</h3>
    <p class="col-12">Autor</p>
    <p class="col-12">Fecha</p>
    <p class="col-12">Técnica</p>
    <p class="col-12">Precio</p>
    <div class="col-8 offset-2 boton">
        <a href="#" class="link-boton">Agregar al carrito</a>
    </div>
</article>
-->
    </div>
</section>
    </div>
  </main>
@endsection
