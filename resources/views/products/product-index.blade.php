<!-- resources/views/product-index.blade.php -->
@extends('products.product-layout')
@section('title')
@section('contents')
@php
    use Illuminate\Support\Str;
@endphp

<div class="row container">

    @foreach ($products as $product)

    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('images/product-placeholder.png') }}">
                <a href="{{ route('products.show', $product->id) }}" class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">visibility</i></a>
            </div>
            <div class="card-content">
                <span class="card-title">{{ $product->name }}</span>
                <p>{{ Str::limit($product->description, 30) }}</p>
            </div>
        </div>
    </div>

    @endforeach
    <div class="row center">
        {{ $products->links('custom.pagination') }}

    </div>
</div>
@endsection



