<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Exception;
use App\Traits\FormFieldsTrait;
class categoryController extends Controller
{
    use FormFieldsTrait;
    public function index(Request $request)
    {
        try{
            $breadcrumbs = [
                ['name' => __('fields.navbar.home'), 'url' => route('home')],
                ['name' => __('fields.navbar.option2'), 'url' => route('categories.index')],
            ];
            $query = Category::query();
            if ($request->has('parent_id') && $request->parent_id != '') {
                $query->where('parent_id', $request->parent_id);
                $parentCategory = Category::find($request->parent_id);
                if ($parentCategory) {
                    $breadcrumbs[] = ['name' => __('fields.table.relation').$parentCategory->name, 'url' => route('categories.index', ['parent_id' => $request->parent_id])];
                }
            } else {
                $query->whereHas('children');
            }
        
            $categories = $query->paginate(5);
            $parentCategories = Category::whereHas('children')->pluck('name', 'id');
            $route = route('categories.create');
        
            return view('categories.index', compact('categories', 'route', 'parentCategories', 'breadcrumbs'));
        
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.category.load_error',['error'=>$e->getMessage()]));
        }
    }
    public function create()
    {
        $breadcrumbs = [
            ['name' => __('fields.navbar.home'), 'url' => route('home')],
            ['name' => __('fields.navbar.option2'), 'url' => route('categories.index')],
            ['name' => __('fields.table.create'), 'url' => route('categories.create')],

        ];
        $fields= $this->getFormFields(['name','category']);
        return view('categories.create',compact('fields','breadcrumbs'));
    }
    public function store(CategoryRequest $request)
    {
        try{
            $validatedData = $request->validated();
                if ($validatedData['parent_id'] != null) {
            $parentCategory = Category::find($validatedData['parent_id']);
            if (!$parentCategory) {
                return redirect()->back()->withInput()->withErrors(['parent_id' => 'Parent category not found.']);
            }
        }

        Category::create($validatedData);
        
        return redirect()->route('categories.index')->with('create', __('messages.category.created'));
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
            $breadcrumbs = [
                ['name' => __('fields.navbar.home'), 'url' => route('home')],
                ['name' => __('fields.navbar.option2'), 'url' => route('categories.index')],
                ['name' => __('fields.table.edit'), 'url' => route('categories.edit',$category->id)],
    
            ];
            $fields= $this->getFormFields(['name','category']);
        return view('categories.edit', compact('category','fields','breadcrumbs'));
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
