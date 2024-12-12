<?php include'/xampp2/htdocs/TestProyecto/TestProyecto/template_pagina_principal/header.php'?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f5fc;
            margin: 0;
            padding: 0;
        }

        /* Encabezado */
        .blog-header {
            text-align: center;
            padding: 50px 20px;
            background: linear-gradient(rgba(88, 44, 132, 0.7), rgba(45, 23, 77, 0.7)), 
                        url('/TestProyecto/img/blog-background.jpg') no-repeat center center/cover;
            color: white;
        }

        .blog-header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .blog-header p {
            font-size: 1.2rem;
            font-style: italic;
        }

        /* Área de búsqueda */
        .search-bar {
            margin: 20px auto;
            max-width: 600px;
        }

        .search-bar input {
            width: calc(100% - 80px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
        }

        .search-bar button {
            width: 80px;
            border: none;
            background-color: #6f42c1;
            color: white;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #5a2e99;
        }

        /* Contenido del blog */
        .blog-container {
            padding: 40px 20px;
        }

        .blog-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
            transition: transform 0.3s;
        }

        .blog-card:hover {
            transform: scale(1.05);
        }

        .blog-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-card-body {
            padding: 20px;
            background-color: white;
        }

        .blog-card-title {
            color: #6f42c1;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .blog-card-text {
            color: #555;
            font-size: 0.9rem;
        }

        .read-more {
            text-decoration: none;
            color: #6f42c1;
            font-weight: bold;
            display: inline-block;
            margin-top: 10px;
        }

        .read-more:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- Encabezado -->
<div class="blog-header">
    <h1>Bienvenidos a Nuestro Blog</h1>
    <p>Explora historias, consejos y novedades sobre cuidado y salud</p>
</div>

<!-- Área de búsqueda -->
<div class="search-bar text-center">
    <input type="text" placeholder="Busca artículos, temas o consejos...">
    <button>Buscar</button>
</div>

<!-- Contenido del blog -->
<div class="blog-container container">
    <div class="row">
        <!-- Artículo 1 -->
        <div class="col-md-4">
            <div class="blog-card">
                <img src="/TestProyecto/img/post1.jpg" alt="Artículo 1">
                <div class="blog-card-body">
                    <h2 class="blog-card-title">Consejos para el cuidado de niños</h2>
                    <p class="blog-card-text">Aprende las mejores prácticas para el cuidado de niños y cómo crear un entorno seguro y estimulante.</p>
                    <a href="#" class="read-more">Leer más</a>
                </div>
            </div>
        </div>

        <!-- Artículo 2 -->
        <div class="col-md-4">
            <div class="blog-card">
                <img src="/TestProyecto/img/post2.jpg" alt="Artículo 2">
                <div class="blog-card-body">
                    <h2 class="blog-card-title">Cómo cuidar a un adulto mayor</h2>
                    <p class="blog-card-text">Descubre estrategias efectivas para brindar el mejor cuidado a los adultos mayores.</p>
                    <a href="#" class="read-more">Leer más</a>
                </div>
            </div>
        </div>

        <!-- Artículo 3 -->
        <div class="col-md-4">
            <div class="blog-card">
                <img src="/TestProyecto/img/post3.jpg" alt="Artículo 3">
                <div class="blog-card-body">
                    <h2 class="blog-card-title">Conexión entre pacientes y profesionales</h2>
                    <p class="blog-card-text">Cómo nuestra plataforma facilita la comunicación entre cuidadores y pacientes.</p>
                    <a href="#" class="read-more">Leer más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include'../TestProyecto/TestProyecto/template_pagina_principal/footer.php'?>