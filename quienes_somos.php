<?php include'/xampp2/htdocs/TestProyecto/TestProyecto/template_pagina_principal/header.php'?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Sobre Nosotros?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background: linear-gradient(rgba(88, 44, 132, 0.5), rgba(45, 23, 77, 0.5)), url('/TestProyecto/img/logo.jpeg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
             color: #fff; 
            text-align: center;
        }

        header h1 {
            font-size: 4rem;
            font-weight: bold;
            margin: 0;
            animation: fadeInDown 1.5s;
        }

        header p {
            font-size: 1.5rem;
            margin-top: 20px;
            animation: fadeInUp 2s;
        }

        section {
            padding: 80px 15px;
        }

        section h2 {
            font-size: 2.5rem;
            color: #6f42c1;
            margin-bottom: 30px;
            position: relative;
            animation: fadeIn 1.2s ease-in-out;
        }

        section h2::after {
            content: '';
            width: 100px;
            height: 3px;
            background: #6f42c1;
            display: block;
            margin: 10px auto 0;
        }

        .text-center p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
        }

        .values {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 40px;
        }

        .value-item {
            width: 250px;
            background: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .value-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .value-item i {
            font-size: 2rem;
            color: #6f42c1;
            margin-bottom: 15px;
        }

        .image-section img {
            width: 100%;
            max-width: 350px;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .image-section img:hover {
            transform: scale(1.05);
        }

        .cta {
            background: linear-gradient(45deg, #6f42c1, #55217b);
            color: #fff;
            padding: 60px 20px;
            text-align: center;
            border-radius: 15px;
            margin-top: 40px;
        }

        .cta h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .cta button {
            background: #fff;
            color: #6f42c1;
            border: none;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .cta button:hover {
            background: #e3d5f5;
            color: #55217b;
        }

        footer {
            background-color: #6f42c1;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

<header>
    <div>
        <h1>¿Quiénes somos?</h1>
        <p>Donde el cuidado y la atención personalizada son nuestra prioridad.</p>
    </div>
</header>

<section>
    <h2>Introducción</h2>
    <p>Somos una plataforma diseñada para conectar a pacientes con necesidades específicas con profesionales de la salud altamente calificados.</p>
</section>

<section>
    <h2>Nuestra Misión</h2>
    <p>Ofrecer un espacio accesible y confiable que facilite el cuidado y la atención personalizada, promoviendo empatía y profesionalismo.</p>
</section>

<section>
    <h2>Nuestra Visión</h2>
    <p>Ser líderes en América Latina como el puente más confiable entre pacientes y profesionales de la salud.</p>
</section>

<section>
    <h2>Nuestros Valores</h2>
    <div class="values">
        <div class="value-item">
            <i class="fas fa-heart"></i>
            <p><strong>Empatía:</strong> Entendemos y cuidamos las necesidades individuales.</p>
        </div>
        <div class="value-item">
            <i class="fas fa-lightbulb"></i>
            <p><strong>Innovación:</strong> Soluciones modernas y prácticas.</p>
        </div>
        <div class="value-item">
            <i class="fas fa-users"></i>
            <p><strong>Inclusión:</strong> Todos son bienvenidos.</p>
        </div>
        <div class="value-item">
            <i class="fas fa-shield-alt"></i>
            <p><strong>Confianza:</strong> Profesionales verificados y responsables.</p>
        </div>
    </div>
</section>

<section>
    <h2>¿Qué nos hace únicos?</h2>
    <div class="image-section">
        <img src="https://via.placeholder.com/350x200" alt="Atención personalizada">
        <img src="https://via.placeholder.com/350x200" alt="Conexión efectiva">
        <img src="https://via.placeholder.com/350x200" alt="Cuidado integral">
    </div>
</section>

<section class="cta">
    <h3>Únete a nuestra comunidad</h3>
    <p>Ya seas un paciente o un profesional, te invitamos a transformar vidas con nosotros.</p>
    <button onclick="window.location.href='/registro'">Regístrate Ahora</button>
</section>

<footer>
    <p>&copy; 2024 [Tu Plataforma]. Todos los derechos reservados.</p>
</footer>

</body>
</html>


<?php include'../TestProyecto/TestProyecto/template_pagina_principal/footer.php'?>