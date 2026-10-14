# PanRuta Libre — Grupo 15

Proyecto final de Desarrollo de Proyectos con Software Libre (ISW-304).

Universidad Abierta para Adultos (UAPA), 2026.

## Descripción

PanRuta Libre es una aplicación web para apoyar la gestión
y distribución de productos de panadería.

Permite administrar productos y clientes mediante operaciones
de registro, consulta, actualización y desactivación.

## Tecnologías utilizadas

- Ubuntu Server
- Apache
- PHP
- Laravel
- MariaDB
- Git y GitHub

## Funcionalidades implementadas

### Productos
- Registrar productos.
- Consultar el catálogo.
- Editar información.
- Desactivar productos.

### Clientes
- Registrar clientes.
- Consultar clientes activos.
- Actualizar información.
- Desactivar clientes.

## Base de datos

Nombre: panruta_libre

El archivo de estructura se encuentra en:

database/sql/panruta_libre_estructura.sql

Contiene las definiciones de 15 tablas, sin registros de usuarios
ni datos comerciales.

Para importar la estructura en MariaDB:

    mariadb -u root -p -e "CREATE DATABASE panruta_libre CHARACTER SET utf8mb4;"
    mariadb -u root -p panruta_libre < database/sql/panruta_libre_estructura.sql

## Instalación

Requisitos:
- PHP compatible con la versión de Laravel utilizada.
- Composer.
- MariaDB.
- Apache.

Clonar el proyecto:

    git clone https://github.com/noelfrias/PanRuta-Libre-Grupo-15.git

Entrar al proyecto:

    cd PanRuta-Libre-Grupo-15

Instalar dependencias:

    composer install

Configurar el entorno:

    cp .env.example .env
    php artisan key:generate

Editar el archivo .env con las credenciales de MariaDB:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=panruta_libre
    DB_USERNAME=USUARIO_MARIADB
    DB_PASSWORD=CONTRASENA_MARIADB

Importar la estructura SQL antes de utilizar la aplicación.

El servidor Apache debe apuntar al directorio public
del proyecto Laravel.

## Acceso a la aplicación

Página principal: /

Productos: /productos

Clientes: /clientes

## Repositorio oficial

https://github.com/noelfrias/PanRuta-Libre-Grupo-15

## Nota

La aplicación se desarrolló y probó en un servidor Ubuntu
con Apache y MariaDB, accesible desde un equipo Mac
dentro de una red local.

El repositorio contiene código fuente y estructura SQL.
No contiene los datos reales de la instalación local.
