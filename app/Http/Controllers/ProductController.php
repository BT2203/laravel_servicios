<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;
use Intervention\Image\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = ModelsProduct::with('marca')->get();
        return view('product.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marcas = Marca::all();
        return view('product.create', compact('marcas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'marca_id' => 'required',
        ]);

        $producto = ModelsProduct::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto registrado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
