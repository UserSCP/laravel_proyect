<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use app\Http\Requests\StoreCategoryRequest;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }


    public function create()
    {
        return view('categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $request->validated();
        Category::create([
            'parent_id' => $request->parent_id,
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Categoria creada');
    }

    public function edit(Category $c)
    {
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, Category $c)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        
        $c->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Categoria actualizada');
    }

    public function destroy(Category $c)
    {
        $c->delete();
        return redirect()->route('categories.index')->with('success', 'Categoria eliminada');
    }
}
