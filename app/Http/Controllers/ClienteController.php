<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::where('estado', 1)
            ->orderBy('id_cliente')
            ->get();

        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:120',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'required|string|max:200',
            'zona' => 'required|string|max:100',
            'condicion_pago' => 'required|in:CONTADO,CREDITO',
            'limite_credito' => 'required|numeric|min:0',
        ]);

        $datos['estado'] = 1;

        Cliente::create($datos);

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente registrado correctamente.');
    }

    public function edit($id)
    {
        $cliente = Cliente::where('estado', 1)
            ->findOrFail($id);

        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::where('estado', 1)
            ->findOrFail($id);

        $datos = $request->validate([
            'nombre' => 'required|string|max:120',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'required|string|max:200',
            'zona' => 'required|string|max:100',
            'condicion_pago' => 'required|in:CONTADO,CREDITO',
            'limite_credito' => 'required|numeric|min:0',
        ]);

        $cliente->update($datos);

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy($id)
    {
        $cliente = Cliente::where('estado', 1)
            ->findOrFail($id);

        $cliente->update(['estado' => 0]);

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente desactivado correctamente.');
    }
}
