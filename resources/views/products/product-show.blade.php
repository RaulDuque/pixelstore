<!-- resources/views/Products/show.blade.php -->

{{-- @extends('layouts.app') --}}

    <div class="container">
        <h1>Detalhes do Produtos</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text"><strong>Descrição:</strong> {{ $product->description }}</p>
                <p class="card-text"><strong>Preço:</strong> R$ {{ $product->price }}</p>
                <p class="card-text"><strong>Em Estoque:</strong> {{ $product->quantity }}</p>
            </div>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
