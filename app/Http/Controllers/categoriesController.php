<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use app\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $route = route('categories.index'); 

        return view('categories.index', compact('categories', 'route'));
    }


    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $validated = $request->validated();
        Category::create(['id_parent'=>$validated['id_parent'],'name' => $validated['name'],]) ;       

        return redirect()->route('products.index')->with('success', 'categoria creado');
    
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $validated = $request->validated();
        $category->update($validated);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function edit(Category $c)
    {
        return view('categories.edit', compact('category'));
    }
    
    public function destroy(Category $c)
    {
        $c->delete();
        return redirect()->route('categories.index')->with('success', 'Categoria eliminada');
    }
}
