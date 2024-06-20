<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Exception;

class categoryController extends Controller
{
    public function index()
    {
        try{
        $categories=Category::all();
        $route=route('categories.create');
        return view('categories.index', compact('categories','route'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.category.load_error',['error'=>$e->getMessage()]));
        }
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(CategoryRequest $request)
    {
        try{
        Category::create($request->validated());
        return redirect()->route('categories.index')->with('create',__('messages.category.created'));
        }catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.category.create_error',['error'=>$e->getMessage()]));
        }
    }

    public function update(CategoryRequest $request, Category $category)
    {
        try{
        $category->update($request->validated());
        return redirect()->route('categories.index')->with('edit',__('messages.category.updated'));
        }catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.category.update_error',['error'=>$e->getMessage()]));
        }
    }
    
    public function edit(Category $category)
    {
        try{
        return view('categories.edit', compact('category'));
        }catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.category.load_error',['error'=>$e->getMessage()]));
        }
    }
    
    public function  destroy(Category $category)
    {
        try{
        $category->delete();
        return redirect()->route('categories.index')->with('delete',__('messages.category.deleted'));
        }catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.brand.delete_error',['error'=>$e->getMessage()]));
        }
    }
}
