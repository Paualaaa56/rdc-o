<?php include'/xampp2/htdocs/TestProyecto/TestProyecto/template_pagina_principal/header.php'?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        header {
            background: linear-gradient(rgba(88, 44, 132, 0.8), rgba(45, 23, 77, 0.8)), url('https://via.placeholder.com/1500x800') no-repeat center center/cover;
            height: 80vh;
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

        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .service-item {
            background: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .service-item i {
            font-size: 3rem;
            color: #6f42c1;
            margin-bottom: 15px;
        }

        .service-item h3 {
            font-size: 1.5rem;
            margin: 15px 0;
            color: #333;
        }

        .service-item p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        .stats {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 60px;
        }

        .stat-item {
            text-align: center;
            color: #6f42c1;
        }

        .stat-item h3 {
            font-size: 3rem;
            margin: 0;
        }

        .stat-item p {
            margin: 10px 0 0;
            font-size: 1.2rem;
            color: #333;
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
        <h1>Nuestros Servicios</h1>
        <p>Conectamos a profesionales de la salud con quienes más los necesitan.</p>
    </div>
</header>

<section>
    <h2>¿Qué ofrecemos?</h2>
    <div class="service-grid">
        <div class="service-item">
            <i class="fas fa-user-nurse"></i>
            <h3>Cuidado Integral</h3>
            <p>Profesionales capacitados para brindar atención personalizada a niños, adultos mayores y personas con discapacidad.</p>
        </div>
        <div class="service-item">
            <i class="fas fa-hand-holding-heart"></i>
            <h3>Apoyo Emocional</h3>
            <p>Programas diseñados para garantizar el bienestar emocional de pacientes y familias.</p>
        </div>
        <div class="service-item">
            <i class="fas fa-calendar-check"></i>
            <h3>Gestión de Agendas</h3>
            <p>Plataforma fácil de usar para programar citas y gestionar horarios de forma eficiente.</p>
        </div>
        <div class="service-item">
            <i class="fas fa-comments"></i>
            <h3>Intercomunicador</h3>
            <p>Canales seguros para comunicación directa entre pacientes y profesionales.</p>
        </div>
    </div>
</section>

<section>
    <h2>Impacto en Números</h2>
    <div class="stats">
        <div class="stat-item">
            <h3>500+</h3>
            <p>Pacientes Atendidos</p>
        </div>
        <div class="stat-item">
            <h3>200+</h3>
            <p>Profesionales Registrados</p>
        </div>
        <div class="stat-item">
            <h3>1,000+</h3>
            <p>Horas de Atención</p>
        </div>
    </div>
</section>

<section class="cta">
    <h3>¡Explora Nuestros Servicios!</h3>
    <p>Descubre cómo podemos ayudarte a transformar vidas.</p>
    <button onclick="window.location.href='/registro'">Ver Más</button>
</section>

<footer>
    <p>&copy; 2024 [Tu Plataforma]. Todos los derechos reservados.</p>
</footer>

</body>
</html>

<?php include'../TestProyecto/TestProyecto/template_pagina_principal'?>