<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Exception;
use Exeception;

class ProductsController extends Controller
{
    public function index()
    {
        try {
            $products = Product::all();
            $route = route('products.create');
            return view('products.index', compact('products', 'route'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al cargar los productos: ' . $e->getMessage());
        }
    }
    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        try {
            $validated = $request->validated();
            Product::create([
                'name' => $validated['name'],
                'price' => $validated['price'],
            ]);
            return redirect()->route('products.index')->with('create', 'Producto creado');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al crear el producto: ' . $e->getMessage());
        }
    }

    public function edit(Product $product)
    {
        try {
            return view('products.edit', compact('product'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al cargar los productos: ' . $e->getMessage());
        }
    }

    public function update(Request $request, Product $product)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:100',
                'price' => 'required|numeric',
            ]);
            $product->update($validated);
            return redirect()->route('products.index')->with('edit', 'Producto actualizado');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al actualizar el producto: ' . $e->getMessage());
        }
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('products.index')->with('delete', 'Producto eliminado');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al eliminar el producto: ' . $e->getMessage());
        }
    }
}
