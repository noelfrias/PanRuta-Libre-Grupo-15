<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - PanRuta Libre</title>

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
            max-width: 1100px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .panel {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        .acciones {
            margin: 25px 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background: #1479d4;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-editar {
            background: #e6a600;
        }

        .btn-eliminar {
            background: #c0392b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 14px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #e8eef5;
        }

        .mensaje {
            background: #e4f6e7;
            color: #226534;
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

        <h2>Catálogo de productos</h2>

        <p>
            Consulte y administre los productos registrados
            en la base de datos MariaDB.
        </p>

        @if (session('success'))
            <div class="mensaje">
                {{ session('success') }}
            </div>
        @endif

        <div class="acciones">
            <a href="{{ route('productos.create') }}" class="btn">
                + Registrar nuevo producto
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Presentación</th>
                    <th>Costo RD$</th>
                    <th>Precio RD$</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id_producto }}</td>

                        <td>{{ $producto->nombre }}</td>

                        <td>{{ $producto->presentacion }}</td>

                        <td>
                            {{ number_format($producto->costo, 2) }}
                        </td>

                        <td>
                            {{ number_format($producto->precio, 2) }}
                        </td>

                        <td>
                            <a
                                href="{{ route('productos.edit', $producto->id_producto) }}"
                                class="btn btn-editar"
                            >
                                Editar
                            </a>

                            <form
                                action="{{ route('productos.destroy', $producto->id_producto) }}"
                                method="POST"
                                style="display:inline;"
                                onsubmit="return confirm('¿Desea desactivar este producto?');"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-eliminar">
                                    Desactivar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            No hay productos activos registrados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</main>

<footer>
    PanRuta Libre — Grupo 15<br>
    Universidad Abierta para Adultos (UAPA)<br>
    Desarrollo de Proyectos con Software Libre — 2026
</footer>

</body>
</html>
