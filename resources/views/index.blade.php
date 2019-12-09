@extends ("plantilla")
@section('titulo')
  Rincon Del Arte
@endsection
@section ("principal")
  <!-- Contenido principal de la página -->
  <main class="row">

    <!-- Barra lateral -->
    <section class="col-2 sidebar">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


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

    </div>
</section>
    </div>
  </main>
@endsection
