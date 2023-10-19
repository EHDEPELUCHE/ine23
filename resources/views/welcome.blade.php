@extends('templates.master')

@section('content-center')

<h1 align="center">Echa un vistazo a estos juegazos</h1>
<div class="container-fluid" style="margin-top:30px">
  <div class="row">
    <!-- CAMBIAR ESTO CUANDO TENGAMOS DB-->
    <div class="col-sm-10">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col-sm-2">
            <div class="card">
              <img src="/img/bobesponja.png" class="bd-placeholder-img card-img-top" width="100">
              <rect width="100%" height="100%" fill="#55595c">
                <div class="card-body">
                  <h2 class="card_text">
                    Bob Esponja 
                  </h2>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <form class="d-flex" method="POST" action="mostrar">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Ver Info</button>
                      </form>
                    </div>
                    <small class="text-muted">35€</small>
                  </div>
                </div>
              </rect>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="card shadow-sm">
              <img src="/img/CookingMama.png" class="bd-placeholder-img card-img-top" width="100">
            </div>
          </div>
          <div class="col-sm-2">
            <div class="card shadow-sm">
              <img src="/img/fireemblemfates.png" class="bd-placeholder-img card-img-top" width="100">
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="/img/GTAV.jpg" class="bd-placeholder-img card-img-top" width="100">
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="/img/TheLastOfUs.jpg" class="bd-placeholder-img card-img-top" width="100">
            </div>
          </div>
        </div>
      </div>
    </div>  

@endsection

@section('content-right')
    <!-- BLOCK: RIGHT -->
    <div class="col-sm-2 sidenav"> <!-- col-sm-2 means two out of twelve columns -->
      <!-- SECTION: Cards -->
      <h2>Recomendamos  </h2>
      <!-- Style are directly included in the style attribute just for illustrative reasons. -->
      <!-- However, including them in <style> or in a CSS file is a better practice. -->
      <div class="card card-body bg-faded" style="background-color: #0ff; margin-bottom:15px;">
          <h4 class="card-title">Bob Esponja</h4>
          <p class="card-text">Bob Esponja es un rpg no lineal en el que nuestro héroe amarillo deberá salvar fondo de bikini.</p>
          <a href="#" class="btn btn-primary">Ver Juego</a>
      </div>
      <div class="card card-body bg-faded" style="background-color: #0ff; margin-bottom:15px;">
          <h4 class="card-title">Cooking Mama</h4>
          <p class="card-text">Cooking Mama es un inmersivo juego de simulación en el que nos pondremos en la piel de una cocinera</p>
          <a href="#" class="btn btn-primary">Ver Juego</a>
      </div>           
      <div class="card card-body bg-light" style="margin-bottom:15px;">
        <h4 class="card-title">¿Faltan Juegos?</h4>
        <p class="card-text">Conctacta con nosotros para sugerir juegos nuevos para añadir al sistema.</p>
        <a href="#" class="btn btn-primary">Contacto</a>
      </div>           
    </div>
  </div>           
</div>

@endsection    
