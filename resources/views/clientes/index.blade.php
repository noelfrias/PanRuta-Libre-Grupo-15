@extends('clientes.layout')

@section('contenido')
<h2>Catálogo de clientes</h2>
<p>Clientes activos registrados en MariaDB.</p>
<a class="btn" href="{{ route('clientes.create') }}">+ Registrar cliente</a>

<table>
    <thead>
        <tr>
            <th>ID</th><th>Nombre</th><th>Teléfono</th>
            <th>Zona</th><th>Pago</th><th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id_cliente }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>{{ $cliente->zona }}</td>
            <td>{{ $cliente->condicion_pago }}</td>
            <td>
                <a class="btn edit" href="{{ route('clientes.edit', $cliente->id_cliente) }}">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente->id_cliente) }}" method="POST" style="display:inline" onsubmit="return confirm('¿Desactivar este cliente?')">
                    @csrf
                    @method('DELETE')
                    <button class="danger" type="submit">Desactivar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="6">No hay clientes activos.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
