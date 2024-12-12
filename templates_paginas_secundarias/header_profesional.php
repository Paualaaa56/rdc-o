<!doctype html>
<html lang="es">

<head>
    <title>Red De Cuidado</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="/img/logo.jpeg" type="image/jpeg" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        /* Estilo base para los enlaces */
        .navbar-nav .nav-link {
            position: relative;
            text-transform: uppercase;
            font-weight: 500;
            color: white;
            text-decoration: none; /* Remueve subrayado predeterminado */
            padding: 10px 15px; /* Agrega algo de padding */
            transition: color 0.3s ease;
        }

        /* Efecto cuando el mouse pasa sobre el enlace */
        .navbar-nav .nav-link:hover {
            color: #9c27b0; /* Color blanco al pasar el mouse */
        }

        /* Línea morada debajo del enlace */
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #edf2ef;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease-out;
        }

        /* Mostrar la línea morada al pasar el mouse */
        .navbar-nav .nav-link:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /* Personalización del fondo de la navbar */
        nav.navbar {
            background-color: #8c16d4; /* Color de fondo morado para el navbar */
        }

        /* Si hay un menú desplegable, asegurarse de que también tenga el efecto */
        .navbar-nav .nav-item.dropdown:hover .nav-link {
            color: #fff;
        }

        .navbar-nav .dropdown-menu {
            background-color: #8c16d4; /* Fondo del dropdown */
            border: none; /* Quita el borde */
        }

        .navbar-nav .dropdown-item {
            color: white;
        }

        .navbar-nav .dropdown-item:hover {
            background-color: #7b2cbf; /* Fondo morado claro cuando se pasa el mouse */
        }

        /* Estilo del botón "Cerrar sesión" para integrarlo con la navbar */
        #cerrarSesion {
            background-color: #8c16d4; /* Color de fondo morado */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        #cerrarSesion:hover {
            background-color: #7b2cbf; /* Fondo más oscuro cuando pasa el mouse */
        }
    </style>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="perfil2.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mensajes2.php">Mensajes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buscar2.php">Buscar perfiles de pacientes</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="citas2.php">Citas</a>
                    </li>

                    <!-- Botón de cerrar sesión -->
                    <li class="nav-item">
                        <button id="cerrarSesion" class="nav-link">Cerrar sesión</button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <script>
        // Enlazamos el evento directamente sin esperar al evento "DOMContentLoaded"
        document.getElementById("cerrarSesion").onclick = function () {
            var confirmar = confirm("¿Seguro que quieres cerrar sesión?");
            if (confirmar) {
                window.location.href = "c:/xampp2/htdocs/TestPyoyecto/login.php"; // Redirige a login.php
            }
        };
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybPAsI6j7V+fB7M7bB+QPHmY2go5cxwggbeGCUvGqlH8Idp5V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0RzF1WzDgU6VrFqz03oVDCpR9LZyfyLJl+Y2k9t84K2+Px7h" crossorigin="anonymous"></script>
</body>

</html>
