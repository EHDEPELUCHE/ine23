@extends('templates.master')

@foreach ($errors->all() as $sError)
    <div class="alert alert-warning">{{ $sError }}</div>
@endforeach

@section('content-center')
<h1 align="center">Juegos encontrados</h1>
<div class="container-fluid" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-10">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($aProduct as $jueguito) 
          <div class="col-sm-2">
            <div class="card">
              <img src={{$jueguito->imgUrl}} class="bd-placeholder-img card-img-top" width="100%" >
              <rect width="100%" height="100%" fill="#55595c">
                <div class="card-body">
                  <h2 class="card_text">{{$jueguito->name}}</h2>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <form class="d-flex" method="GET" action='product/{{$jueguito->id}}'>
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Ver Info</button>
                      </form>
                    </div>
                    @if($jueguito->HasDiscount())
                      <small class="text-muted"><font color="#DC143C" face="Impact" >OFERTÓN</font>
                        <font face="Impact" >{{number_format($jueguito->DiscountApplied(), 2) . " €"}}</font>
                    @else
                      <small class="text-muted">
                        {{$jueguito->price . " €"}}
                    @endif
                    </small>
                  </div>
                </div>
              </rect>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>  
@endsection

@section('content-right')
    <!-- BLOCK: RIGHT -->
    <div class="col-sm-2 sidenav"> <!-- col-sm-2 means two out of twelve columns -->
      <!-- SECTION: Cards -->
      <h2 align="center"><font face="Impact" >Ofertas</font></h2>
      <!-- RECORRO LOS PRODUCTOS EN OFERTA -->
   
      <div class="card card-body bg-light" style="margin-bottom:15px;">
        <h4 class="card-title">¿Faltan Juegos?</h4>
        <p class="card-text">Conctacta con nosotros para sugerir juegos nuevos para añadir al sistema.</p>
        <a href="#" class="btn btn-primary">Contacto</a>
      </div>           
    </div>
  </div>           
</div>
@endsection   