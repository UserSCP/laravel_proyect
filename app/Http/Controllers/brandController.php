<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Exception;

class BrandController extends Controller
{
    public function index()
    {
        try {
            $brands = Brand::all();
            $route = route('brands.create');
            return view('brands.index', compact('brands', 'route'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al cargar las marcas: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(BrandRequest $request)
    {
        try {
            $validated = $request->validated();
            Brand::create([
                'name' => $validated['name'],
            ]);
            return redirect()->route('brands.index')->with('create', 'Marca creada');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al crear la marca: ' . $e->getMessage());
        }
    }

    public function edit(Brand $brand)
    {
        try{
        return view('brands.edit', compact('brand'));
        }catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al cargar las marcas: ' . $e->getMessage());
        }
    }

    public function update(BrandRequest $request, Brand $brand)
    {
        try{
        $validated = $request->validated();  // Usa 'validated()' en lugar de 'validate()'
        $brand->update($validated);
        return redirect()->route('brands.index')->with('edit', 'Marca actualizada');
        }catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al actualizar la marca: ' . $e->getMessage());
        }
    }

    public function destroy(Brand $brand)
    {
        try{
        $brand->delete();
        return redirect()->route('brands.index')->with('delete', 'Marca eliminada');
        }catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al eliminar la marca: ' . $e->getMessage());
        }
    }
}
