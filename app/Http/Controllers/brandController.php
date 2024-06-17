<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $route = route('brands.create');
        return view('brands.index', compact('brands', 'route'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(BrandRequest $request)
    {
        $validated = $request->validated();  // Usa 'validated()' en lugar de 'validate()'
        Brand::create([
            'name' => $validated['name'],
        ]);
        return redirect()->route('brands.index')->with('success', 'Marca creada');
    }

    public function edit(Brand $brand)
    {
        return view('brands.edit', compact('brand'));
    }

    public function update(BrandRequest $request, Brand $brand)
    {
        $validated = $request->validated();  // Usa 'validated()' en lugar de 'validate()'
        $brand->update($validated);
        return redirect()->route('brands.index')->with('success', 'Marca actualizada');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index')->with('success', 'Marca eliminada');
    }
}
