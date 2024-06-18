<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class categoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        $route=route('categories.create');
        return view('categories.index', compact('categories','route'));
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect()->route('categories.index')->with('create', 'Categoría creada con éxito');
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return redirect()->route('categories.index')->with('edit', 'Categoría actualizada con éxito');
    }
    
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));

    }
    
    public function  destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('delete','Categoria eliminada');
    }
}
