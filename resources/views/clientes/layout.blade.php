<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes - PanRuta Libre</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f2f4f8; color: #243447; }
        header { background: #193754; color: white; padding: 30px 8%; }
        header h1 { margin: 0 0 12px; }
        nav { background: #294d6d; padding: 16px 8%; }
        nav a { color: white; text-decoration: none; margin-right: 25px; font-weight: bold; }
        main { max-width: 1100px; margin: 35px auto; padding: 30px; background: white; border-radius: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 13px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background: #e7edf4; }
        input, select { width: 100%; padding: 11px; margin: 7px 0 17px; border: 1px solid #ccd5df; border-radius: 5px; }
        label { font-weight: bold; }
        button, .btn { display: inline-block; border: 0; border-radius: 5px; padding: 11px 15px; background: #147bd1; color: white; text-decoration: none; cursor: pointer; }
        .danger { background: #c93d2c; }
        .edit { background: #e5a000; }
        .success { padding: 15px; background: #e2f5e6; color: #17612d; }
        .error { color: #b3261e; }
        footer { text-align: center; padding: 25px; color: #536b83; }
    </style>
</head>
<body>
<header>
    <h1>PanRuta Libre</h1>
    <p>Sistema de Gestión y Distribución de Productos</p>
</header>
<nav>
    <a href="{{ route('inicio') }}">Inicio</a>
    <a href="{{ route('productos.index') }}">Productos</a>
    <a href="{{ route('clientes.index') }}">Clientes</a>
    <a href="{{ route('clientes.create') }}">Registrar cliente</a>
</nav>
<main>
    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <div class="error">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @yield('contenido')
</main>
<footer>PanRuta Libre — Grupo 15 | UAPA — 2026</footer>
</body>
</html>
