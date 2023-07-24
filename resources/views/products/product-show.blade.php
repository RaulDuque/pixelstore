@extends('products.product-layout')
@section('contents')

<div class="row container">
    <div class="col s6 m3">
        <img src="{{ asset('images/product-placeholder.png') }}" class="responsive-img" >
    </div>
    <div class="col s6 m3">
        <h5>Detalhes do Produto</h5>
        <h5>Nome: {{ $product->name }}</h5>
        <p>Descrição: {{ $product->description }}</p>
        <p> Valaor: R${{ $product->price }}</p>
        <p>Quantidade:{{ $product->quantity }}</p>
    </div>
</div>
<a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Voltar</a>

@endsection

