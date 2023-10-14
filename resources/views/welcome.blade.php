<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    -->
    
    <link rel="shortcut icon" href="img/icon.jfif">
    
    <style>
      .fakeimg { height: 100px; background: #aaa; }
    </style>

    <title>My INE project P1</title>
  </head>

  <body>

    <!-- LAYOUT: HEADER -->
      <!-- SECTION: Main menu -->
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#"><img src="/img/icon.jfif" width="50px" heigth="70px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav mr-auto me-auto mb-2 mb-md-0">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Registrarse</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Iniciar Sesión</a></li>   
          </ul>
         
          <form class="d-flex form-inline" role="search" METHOD= "GET" ACTION="buscador" >
            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
           </div>
        </div>  
      </nav>
   


     
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




    <!-- LAYOUT: FOOTER -->
    <div class="jumbotron text-center" style="margin-bottom:0;padding:20px">
    <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2023 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><img src="/ico/icon.jfif" width="50px" heigth="70px"></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
  </footer>
</div>
    </div>

    <!-- Loading Javascripts -->   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>')</script>
    <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>