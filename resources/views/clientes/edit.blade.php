@extends('clientes.layout')

@section('contenido')
<h2>Editar cliente</h2>
<form method="POST" action="{{ route('clientes.update', $cliente->id_cliente) }}">
    @csrf
    @method('PUT')
    @include('clientes.formulario', ['textoBoton' => 'Actualizar cliente'])
</form>
@endsection
