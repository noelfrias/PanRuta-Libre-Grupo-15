<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // READ: Consultar productos activos
    public function index()
    {
        $productos = Producto::where('estado', 1)
            ->orderBy('id_producto')
            ->get();

        return view('productos.index', compact('productos'));
    }

    // CREATE: Mostrar formulario de registro
    public function create()
    {
        return view('productos.create');
    }

    // CREATE: Guardar producto nuevo
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'presentacion' => 'required|string|max:100',
            'costo' => 'required|numeric|min:0',
            'precio' => 'required|numeric|gt:0',
        ]);

        $datos['estado'] = 1;

        Producto::create($datos);

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto registrado correctamente.');
    }

    // UPDATE: Mostrar formulario de edición
    public function edit($id)
    {
        $producto = Producto::where('estado', 1)
            ->findOrFail($id);

        return view('productos.edit', compact('producto'));
    }

    // UPDATE: Guardar los cambios
    public function update(Request $request, $id)
    {
        $producto = Producto::where('estado', 1)
            ->findOrFail($id);

        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'presentacion' => 'required|string|max:100',
            'costo' => 'required|numeric|min:0',
            'precio' => 'required|numeric|gt:0',
        ]);

        $producto->update($datos);

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto actualizado correctamente.');
    }

    // DELETE: Eliminación lógica
    public function destroy($id)
    {
        $producto = Producto::where('estado', 1)
            ->findOrFail($id);

        $producto->update(['estado' => 0]);

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto desactivado correctamente.');
    }
}
