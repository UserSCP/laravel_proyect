<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return redirect()->route('products.index')->with('success', 'Producto creado');
    }

    public function edit(Product $p)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $p)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|numeric',
        ]);
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return redirect()->route('products.index')->with('success', 'Producto actualizado');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado');
    }
}
