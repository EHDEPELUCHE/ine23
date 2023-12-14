@extends('templates.master')

@section('content-center')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success', null)[0] }}
        </div>
    @endif
    @foreach ($errors->all() as $sError)
        <div class="alert alert-warning">{{ $sError }}</div>
    @endforeach
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Datos de usuario
        </div>
        <div class="card-body">
            <form name="edit-user-form" id="edit-user-form" 
            action="{{ route('product.update', ['product' => $product]) }}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" required="" value="{{ $product->name }}" />
                    <label for="description">Descripción</label>
                    <input type="text" id="description" name="description" class="form-control" value="{{ $product->description }}"/>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-primary">{{ __('auth.Save') }}</button>          
                </div>
            </form>
        </div>
    </div>
@endsection