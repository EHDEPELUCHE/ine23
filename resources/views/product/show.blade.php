@extends('templates.master')

@section('content-center')
@foreach ($errors->all() as $sError)
    <div class="alert alert-warning">{{ $sError }}</div>
@endforeach
<div class="row">
    <div class="col-sm-7">
        <div class="card">
            <div class="card-body">
                <h1 class="card_text">{{$product->name}}</h1>
                <h2 class="card_text">Empresa: {{$product->Company->name}}</h2>
                <p> {{$product->description}} <p>
            </div>
            <div style="text-align: center" class="flex items-center justify-end mt-5">
                @if (App\Models\User::isEditor())
                    <a style="color: black" class="btn btn-primary" href={{ route('product.edit', $product) }} >
                        <font size="5">Editar producto</font>
                    </a>
                @endif
                <a style="color: black" class="btn btn-primary" href={{ route('cart.add', $product) }} >
                    <font size="5">Añadir al carrito</font>
                    <img src="/img/add_carrito.png" width="25px" heigth="25px">
                </a>
            </div>
        </div>
    </div>
    <div class="col-sm-5 ">
        <div class="card card-body bg-light" >
            <img src=/{{$product->imgUrl}} class="bd-placeholder-img card-img-top" height="512px" >
        </div>
    </div>
</div>
@endsection