<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Exception;
use App\Traits\FormFieldsTrait;

class ProductsController extends Controller
{
    use FormFieldsTrait;

    public function index(Request $request)
    {
        try {
            $breadcrumbs = [
                ['name' => __('fields.navbar.home'), 'url' => route('home')],
                ['name' => __('fields.navbar.option1'), 'url' => route('products.index')],
            ];
            $query = Product::with('categories', 'brand');
            if ($request->has('sort_price')) {
                $sortPrice = $request->get('sort_price');
                $query->orderBy('price', $sortPrice);
                $breadcrumbs[] = ['name' =>  __('fields.table.orderly') . ($sortPrice == 'asc' ? __('fields.table.product.filter_price.option.option2') : __('fields.table.product.filter_price.option.option1')), 'url' => route('products.index', ['sort_price' => $sortPrice])];
            }

            $products = $query->paginate(5);
            $route = route('products.create');
            return view('products.index', compact('products', 'route', 'breadcrumbs'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.product.load_error', ['error' => $e->getMessage()]));
        }
    }

    public function create()
    {
        $breadcrumbs = [
            ['name' => __('fields.navbar.home'), 'url' => route('home')],
            ['name' => __('fields.navbar.option1'), 'url' => route('products.index')],
            ['name' => __('fields.table.create'), 'url' => route('products.create')],
        ];
        $fields = $this->getFormFields(['name', 'price', 'brand_id', 'categories']);
        return view('products.create', compact('fields', 'breadcrumbs'));
    }

    public function store(ProductRequest $request)
    {
        try {
            $validated = $request->validated();

            $product = Product::create([
                'name' => $validated['name'],
                'price' => $validated['price'],
                'brand_id' => $validated['brand_id'],
            ]);

            $product->categories()->sync($request->input('categories', []));
            $product->save();

            return redirect()->route('products.index')->with('create', __('messages.product.created'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.product.create_error', ['error' => $e->getMessage()]));
        }
    }

    public function update(ProductRequest $request, Product $product)
    {
        try {
            $validated = $request->validated();

            $product->update([
                'name' => $validated['name'],
                'price' => $validated['price'],
                'brand_id' => $validated['brand_id'],
            ]);
            $product->categories()->sync($request->input('categories', []));
            $product->save();

            return redirect()->route('products.index')->with('edit', __('messages.product.updated'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.product.update_error', ['error' => $e->getMessage()]));
        }
    }



    public function edit(Product $product)
    {
        try {
            $breadcrumbs = [
                ['name' => __('fields.navbar.home'), 'url' => route('home')],
                ['name' => __('fields.navbar.option1'), 'url' => route('products.index')],
                ['name' => __('fields.table.edit'), 'url' => route('products.edit', $product->id)],
            ];
            $fields = $this->getFormFields(['name', 'price', 'brand_id', 'categories']);

            foreach ($fields as &$field) {
                $field['value'] = $product->{$field['name']} ?? '';
            }

            return view('products.edit', compact('product', 'fields', 'breadcrumbs'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.product.load_error', ['error' => $e->getMessage()]));
        }
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('products.index')->with('delete', __('messages.product.deleted'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.product.delete_error', ['error' => $e->getMessage()]));
        }
    }
}
