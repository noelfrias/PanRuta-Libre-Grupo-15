<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar producto - PanRuta Libre</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f4f8;
            color: #243447;
        }

        header {
            background: #193754;
            color: white;
            padding: 30px 8%;
        }

        header h1 {
            margin: 0 0 10px;
        }

        nav {
            background: #294b6a;
            padding: 15px 8%;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 25px;
            font-weight: bold;
        }

        main {
            max-width: 700px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .panel {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        label {
            display: block;
            margin: 18px 0 7px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 15px;
        }

        .btn {
            display: inline-block;
            padding: 12px 18px;
            margin-top: 25px;
            border: none;
            border-radius: 6px;
            background: #1479d4;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 15px;
        }

        .btn-volver {
            background: #64748b;
            margin-left: 10px;
        }

        .errores {
            background: #fee2e2;
            color: #991b1b;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            margin: 50px 0;
            color: #60758c;
        }
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




    <a href="{{ route('productos.create') }}">Registrar producto</a>
</nav>

<main>
    <div class="panel">

        <h2>Registrar nuevo producto</h2>

        <p>
            Complete los siguientes campos para registrar
            un producto en la base de datos MariaDB.
        </p>

        @if ($errors->any())
            <div class="errores">
                <strong>Revise los siguientes errores:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <label for="nombre">Nombre del producto</label>
            <input
                type="text"
                id="nombre"
                name="nombre"
                value="{{ old('nombre') }}"
                maxlength="255"
                required
            >

            <label for="presentacion">Presentación</label>
            <input
                type="text"
                id="presentacion"
                name="presentacion"
                value="{{ old('presentacion') }}"
                maxlength="100"
                placeholder="Ejemplo: Unidad"
                required
            >

            <label for="costo">Costo RD$</label>
            <input
                type="number"
                id="costo"
                name="costo"
                value="{{ old('costo') }}"
                min="0"
                step="0.01"
                required
            >

            <label for="precio">Precio de venta RD$</label>
            <input
                type="number"
                id="precio"
                name="precio"
                value="{{ old('precio') }}"
                min="0.01"
                step="0.01"
                required
            >

            <button type="submit" class="btn">
                Guardar producto
            </button>

            <a href="{{ route('productos.index') }}" class="btn btn-volver">
                Cancelar
            </a>
        </form>

    </div>
</main>

<footer>
    PanRuta Libre — Grupo 15<br>
    Universidad Abierta para Adultos (UAPA)<br>
    Desarrollo de Proyectos con Software Libre — 2026
</footer>

</body>
</html>
