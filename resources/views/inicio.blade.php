<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio - PanRuta Libre</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f4f8;
            color: #243447;
        }
        header {
            background: #193754;
            color: white;
            padding: 35px 8%;
        }
        header h1 { margin: 0 0 10px; font-size: 32px; }
        nav {
            background: #294d6d;
            padding: 18px 8%;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 30px;
            font-weight: bold;
        }
        nav a:hover { text-decoration: underline; }
        main {
            max-width: 1100px;
            margin: 45px auto;
            padding: 0 20px;
        }
        .bienvenida {
            background: white;
            padding: 35px;
            border-radius: 12px;
            margin-bottom: 25px;
        }
        .modulos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }
        .tarjeta {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 12px #0000000d;
        }
        .tarjeta h2 { margin-top: 0; }
        .boton {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 20px;
            background: #147bd1;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        footer {
            text-align: center;
            padding: 35px;
            color: #536b83;
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
</nav>

<main>
    <section class="bienvenida">
        <h2>Bienvenido a PanRuta Libre</h2>
        <p>
            Plataforma administrativa para gestionar productos
            y clientes de manera organizada.
        </p>
    </section>

    <section class="modulos">
        <div class="tarjeta">
            <h2>Productos</h2>
            <p>Registre, consulte, actualice y desactive productos.</p>
            <a class="boton" href="{{ route('productos.index') }}">
                Administrar productos
            </a>
        </div>

        <div class="tarjeta">
            <h2>Clientes</h2>
            <p>Registre, consulte, actualice y desactive clientes.</p>
            <a class="boton" href="{{ route('clientes.index') }}">
                Administrar clientes
            </a>
        </div>
    </section>
</main>

<footer>
    PanRuta Libre — Grupo 15<br>
    Universidad Abierta para Adultos (UAPA) — 2026
</footer>
</body>
</html>
