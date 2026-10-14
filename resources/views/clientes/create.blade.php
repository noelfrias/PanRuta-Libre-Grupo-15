@extends('clientes.layout')

@section('contenido')
<h2>Registrar nuevo cliente</h2>
<form method="POST" action="{{ route('clientes.store') }}">
    @csrf
    @include('clientes.formulario', ['textoBoton' => 'Guardar cliente'])
</form>
@endsection
