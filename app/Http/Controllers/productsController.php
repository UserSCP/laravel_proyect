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
        $request->validated();
        Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'description' => $request->input('description')??'Sin descripcion',
            'stock' => $request->input('stock'),
        ]);

        return redirect()->route('products.index')->with('success', 'Producto creado');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, Product $p)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|numeric',
            'description'=> 'nullable|string|max:100',
            'stock' => 'required|in:sin stock,poco stock,en stock',

        ]);
        
        $p->update($request->all());
        return redirect()->route('products.index')->with('success', 'Producto actualizado');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado');
    }
}
