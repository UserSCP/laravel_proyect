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
        $route = route('products.create'); 
        return view('products.index', compact('products', 'route'));
    }
    

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();

        Product::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            // 'description' => $request->input('description', 'Sin descripción')
        ]);

        return redirect()->route('products.index')->with('success', 'Producto creado');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|numeric',
            // // 'description' => 'nullable|string|max:100',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Producto actualizado');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado');
    }
}
