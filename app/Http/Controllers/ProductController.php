<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(4);

        return view('products.product-index', compact('products'));
    }

    public function list()
    {
        $products = Product::all();

        return view('products.product-list', compact('products'));
    }

    public function create()
    {
        return view('products.product-create');
    }

    public function store(ProductRequest $request)
    {
        $dataForm = $request->validated();

        Product::create($dataForm);

        return redirect()->route('products.index')->with('success', 'Produto criado com sucesso!');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.product-show', compact('product'));
    }
    public function details($slug) {
        $products = Product::where('slug',$slug);

        return view('site.detailsm', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.product-edit', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        $dataForm = $request->validated();

        $product = Product::findOrFail($id);
        $product->update($dataForm);

        return redirect()->route('products.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produto excluído com sucesso!');
    }

}
