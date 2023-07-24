@extends('products.product-layout')
@section('title',)
@section('contents')
<div class="row container">
    <div class="col s12 m3">
        <img src="{{ asset('images/product-placeholder.png') }}" class="responsive-img" >
    </div>
    <div class="col s18 m3">
        <h1>Detalhes do Produtos</h1>
                <h5 class="card-title">{{ $product->name }}</h5>
                <p {{ $product->description }}</p>
                <p R$ {{ $product->price }}</p>
                <p  {{ $product->quantity }}</p>
    </div>
    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Voltar</a>
</div>

@endsection

