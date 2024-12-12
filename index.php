<?php include'/xampp2/htdocs/TestProyecto/TestProyecto/template_pagina_principal/header.php'?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo general */
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden; /* Evita que se muestre scroll */
        }

        /* Contenedor del slide */
        .slider-container {
            position: relative;
            width: 100%;
            height: 100vh; /* Ocupa toda la pantalla */
            overflow: hidden;
        }

        /* Imágenes deslizantes */
        .slider-container img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 2s ease-in-out; /* Efecto de desvanecimiento */
        }

        /* Texto centrado */
        .slider-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            font-family: 'Arial', sans-serif;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        .slider-text h1 {
            font-size: 4rem;
            margin: 0;
        }

        .slider-text p {
            font-size: 1.5rem;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="slider-container">
        <!-- Imágenes -->
        <img src="/TestProyecto/img/caregiver_child.webp" alt="Cuidado 1">
        <img src="/TestProyecto/img/caregiver_old.jpg" alt="Cuidado 2">
        <img src="/TestProyecto/img/caregiver_des.jpg" alt="Cuidado 3">
        <img src="/TestProyecto/img/enfermeria.jpg" alt="Cuidado 3">

        <!-- Texto centrado -->
        <div class="slider-text">
            <h1>Bienvenidos</h1>
            <p>Cuidamos de ti y tus seres queridos</p>
        </div>
    </div>

    <script>
        // Script para cambiar imágenes
        const images = document.querySelectorAll('.slider-container img');
        let current = 0;

        function showSlide(index) {
            images.forEach((img, i) => {
                img.style.opacity = i === index ? '1' : '0';
            });
        }

        function nextSlide() {
            current = (current + 1) % images.length;
            showSlide(current);
        }

        // Mostrar la primera imagen y empezar el loop
        showSlide(current);
        setInterval(nextSlide, 4000); // Cambiar cada 4 segundos
    </script>
</body>
</html>

       


        <?php include'../TestProyecto/TestProyecto/template_pagina_principal/footer.php'?>
