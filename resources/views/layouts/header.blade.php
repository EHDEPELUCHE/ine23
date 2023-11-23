<!-- LAYOUT: HEADER -->
      <!-- SECTION: Main menu -->
 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="/ico/icon.jfif" width="50px" heigth="70px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav mr-auto me-auto mb-2 mb-md-0">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        
        @if(Auth::check())
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"> {{Auth::user()->name}} </a> </li>
        <li class="nav-item"><a class="nav-link" href="/user/logout"><img src="/img/logout.png" width="30px" heigth="30px" > </a> </li>
        @else
        <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Registrarse</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Iniciar Sesión</a></li> 
        @endif
      </ul>
      @php
      if(session()->get('cart') != null)
        $items = session()->get('cart')->iTotalItems;
      else
      $items=0;
      @endphp
      <ul class="navbar-nav mr-auto mb-2 mb-md-0">
      <li class="nav-item"><a class="nav-link" href='/cart' ><img src="/img/carrito.png" width="40px" heigth="40px"></a></li>
      @if($items>0)
        <font color="white"> {{$items}}  </font>
      @endif
</ul>
      <form class="d-flex form-inline" role="search" METHOD= "GET" ACTION="buscador" >
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>