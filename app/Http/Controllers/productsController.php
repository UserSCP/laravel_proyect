<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use Exception;
use App\Traits\FormFieldsTrait;

class ProductsController extends Controller
{
    use FormFieldsTrait;
    public function index()
    {
        try {
            $products = Product::with('categories')->get();
            $route = route('products.create');
            return view('products.index', compact('products', 'route'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.product.load_error',['error'=>$e->getMessage()]));
        }
    }
    public function create()
    {
        $fields= $this->getFormFields(['name', 'price', 'brand_id']);
        return view('products.create',compact('fields'));
    }

    public function store(ProductRequest $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:100',
                'price' => 'required|numeric',
                'brand_id'=>'required|exists.brands,id',
                'categories' => 'array',
            'categories.*' => 'exists:categories,id'
            ]);
            $product = Product::create($validated);
            $product->categories()->sync($request->input('categories', []));
            $product->category_names = $product->category_names;
            $product->save();
            return redirect()->route('products.index')->with('create', __('messages.product.created'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.product.create_error',['error'=>$e->getMessage()]));
        }
    }

    public function edit(Product $product)
    {
        try {
            $fields= $this->getFormFields(['name', 'price', 'brand_id', 'categories']);
            return view('products.edit', compact('product','fields'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.product.load_error',['error'=>$e->getMessage()]));
        }
    }

    public function update(Request $request, Product $product)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:100',
                'price' => 'required|numeric',
                'brand_id'=>'required|exists.brands,id',
                'categories' => 'array',
            'categories.*' => 'exists:categories,id'
            ]);
            $product->update($validated);
            $product->categories()->sync($request->input('categories', []));
            $product->category_names = $product->category_names; // Utiliza el accesor para obtener los nombres de categorías
            $product->save();
            return redirect()->route('products.index')->with('edit', __('messages.product.updated'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.product.update_error',['error'=>$e->getMessage()]));
        }
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('products.index')->with('delete', __('messages.product.deleted'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.product.delete_error',['error'=>$e->getMessage()]));
            
        }
    }
}
