@extends('store.template')

@section('content')

	<div class="products">
		@foreach($products as $product)
			<div class="product ">
				<h3>{{ $product->name }}</h3>
				<img src="{{ $product->image }}" width="200">
				<div class="product-info">
					<p>{{ $product->extract }}</p>
					<p>Precio: ${{ number_format($product->price,2) }}</p>
					<p>
						<a href="#">la quiero</a>

					
						<a href="{{ route('product-detail', $product->slug) }}"> Leer mas</a>
					</p>
				</div>
			</div>
		@endforeach
	</div>
@stop
