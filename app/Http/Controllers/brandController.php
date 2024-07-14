<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Exception;
use App\Traits\FormFieldsTrait;
use Illuminate\Support\Facades\Log;

class BrandController extends Controller
{
    use FormFieldsTrait;

    public function index(Request $request)
    {
        try {
            $breadcrumbs = [
                ['name' => __('fields.navbar.home'), 'url' => route('home')],
                ['name' => __('fields.navbar.option3'), 'url' => route('brands.index')],
            ];
            $query= Brand::query();
            if ($request->has('sort_name')) {
            $sortName = $request->get('sort_name');
            $query->orderBy('name', $sortName);
                $breadcrumbs[] = ['name' =>  __('fields.table.orderly') . ($sortName == 'asc' ? __('fields.table.brand.filter_alfa.option.option1') : __('fields.table.brand.filter_alfa.option.option2')), 'url' => route('brands.index', ['sort_name' => $sortName])];
        
        }
        $brands = $query->paginate(5);
        $route = route('brands.create');

        return view('brands.index', compact('brands', 'route','breadcrumbs'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.brand.load_error', ['error' => $e->getMessage()]));
        }
        
    }
    public function create()
    {
        $fields = $this->getFormFields(['name']);
        $breadcrumbs = [
            ['name' => __('fields.navbar.home'), 'url' => route('home')],
            ['name' => __('fields.navbar.option3'), 'url' => route('brands.index')],
            ['name'=>__('fields.table.create'),'url'=>route('brands.create')]
        ];
        return view('brands.create', compact('fields','breadcrumbs'));
    }

    public function store(BrandRequest $request)
    {
        try {
            $validated = $request->validated();
            $brand = new Brand();
            $brand->name = $validated['name'];
            $brand->save();
            return redirect()->route('brands.index')->with('success', __('messages.brand.created'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', __('messages.brand.create_error', ['error' => $e->getMessage()]));
        }
    }

    public function edit(Brand $brand)
    {
        try {
            $breadcrumbs = [
                ['name' => __('fields.navbar.home'), 'url' => route('home')],
                ['name' => __('fields.navbar.option3'), 'url' => route('brands.index')],
                ['name'=>__('fields.table.edit'),'url'=>route('brands.edit',$brand->id)]
            ];
            $fields = $this->getFormFields(['name']);
            return view('brands.edit', compact('brand', 'fields','breadcrumbs'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.brand.load_error', ['error' => $e->getMessage()]));
        }
    }

    public function update(BrandRequest $request, Brand $brand)
    {
        try {
            $validated = $request->validated();
            $brand->update($validated);
            return redirect()->route('brands.index')->with('edit', __('messages.brand.updated'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.brand.update_error', ['error' => $e->getMessage()]));
        }
    }

    public function destroy(Brand $brand)
    {
        try {
            $brand->delete();
            return redirect()->route('brands.index')->with('delete', __('messages.brand.deleted'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.brand.delete_error', ['error' => $e->getMessage()]));
        }
    }
}
