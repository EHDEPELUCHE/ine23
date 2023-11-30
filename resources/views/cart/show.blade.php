@extends('templates.master')

@section('content-center')
<h1 align="center">Tu carrito</h1>
<div class="container-fluid" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-10">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @php
        $cart = session()->get('cart');
        @endphp
            @if($cart != null)
                @foreach ($cart->htItem as $jueguito) 
                <div class="col-sm-2">
                    <div class="card">
                        <img src="/{{$jueguito['imgUrl']}}" class="bd-placeholder-img card-img-top" width="100%" >
                        <rect width="100%" height="100%" fill="#55595c">
                            <div class="card-body">
                                <h2 class="card_text">{{$jueguito['name']}}</h2>
                                <div class="d-flex justify-content-between align-items-center">                                                    
                                    <small class="text-muted">
                                        {{$jueguito['price'] . " €"}}
                                    </small>
                                </div>
                                <div>
                                <a class="btn btn-light" href={{ route('cart.operate', [ 'operation' => 'removeAll', 'product' => $jueguito['id']]) }}><img src="/img/papelera.png" width="30px" heigth="30px"></a>
                                <a class="btn btn-light" href={{ route('cart.operate', [ 'operation' => 'remove', 'product' => $jueguito['id']]) }}><img src="/img/remove_carrito.png" width="30px" heigth="30px"></a>
                                  {{"cantidad: " . $jueguito['quantity']}}
                                <a class="btn btn-light" href={{ route('cart.operate',  [ 'operation' => 'add', 'product' => $jueguito[ 'id' ]]) }}><img src="/img/add_carrito.png" width="30px" heigth="30px"></a>              
                                </div>
                            </div>
                        </rect>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
