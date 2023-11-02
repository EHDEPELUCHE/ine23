@extends('templates.master')

@section('content-center')
<div class="row">
    <div class="col-sm-7">
    <div class="card">
            <div class="card-body">
            <h1 class="card_text">{{$product->name}}</h1>
            <h2 class="card_text">Empresa: {{$product->Company->name}}</h2>
            <p> {{$product->description}} <p>
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