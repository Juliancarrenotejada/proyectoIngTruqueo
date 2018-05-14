@extends('store.template')

@section('content')

<h1> Detalle del Producto</h1>

<div class="product-block">
        <img src="{{ $product->image }}" width="300">
    </div>

    <div class="product-block">
        <h3>{{ $product->name}}</h3><hr>
       <div class="product-info panel">
        <p>{{ $product->description }}</p>
        <h3>
            <span class="label label-success">Precio: ${{ number_format($product->price,2) }}</span>
        </h3>
         <p>
         	<a href="#">la quiero </a> 
         	</p>
    </div>
     </div>
<p>
    <a class="btn btn-primary" href="{{ route('home') }}"><i class="fa fa-chevron-circle-left"></i> Regresar</a>
</p> 
     @stop
