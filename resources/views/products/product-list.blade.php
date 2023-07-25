@extends('products.product-layout')
@section('title')
@section('contents')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-EDGE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
<body>
    <div class=" row container mx-auto">
        <h1 class="text-4xl font-bold mb-4">Catálogo de Produtos</h1>
        @if (count($products) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade em Estoque</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm"><i class="material-icons">visibility</i></a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                    </div>
                                    <div class="col">
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')"><i class="material-icons">delete_forever</i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No products found.</p>
        @endif
    </div>
</body>
