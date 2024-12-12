<?php include '/xampp2/htdocs/TestProyecto/TestProyecto/templates_paginas_secundarias/header_profesional.php' ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes - Profesional</title>
    <style>
        /* Estilo general */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000; /* Fondo negro fuera del contenedor */
            color: #f4f4f4; /* Color claro para texto fuera del contenedor */
        }

        header {
            background-color: #8c16d4;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        /* Contenedor principal de la página */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: white;  /* Fondo blanco para el contenedor */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .messages-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .messages-header h1 {
            font-size: 1.5rem;
            color: #333;
        }

        .messages-list {
            margin-top: 20px;
        }

        .message-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .message-item:hover {
            background-color: #f9f9f9;
        }

        .message-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .message-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #8c16d4;
        }

        .message-info div {
            max-width: 300px;
        }

        .message-info h4 {
            margin: 0;
            color: #333;
        }

        .message-info p {
            margin: 5px 0 0;
            color: #666;
            font-size: 0.9rem;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .message-actions button {
            background-color: #8c16d4;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .message-actions button:hover {
            background-color: #6e12a6;
        }

        footer {
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            background-color: #8c16d4;
            color: white;
        }

        /* Estilo del botón 'Nuevo Mensaje' */
        .messages-header button {
            background-color: #8c16d4;
            color: white;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }

        .messages-header button:hover {
            background-color: #6e12a6;
        }
    </style>
</head>
<body>
  

    <div class="container">
        <div class="messages-header">
            <h1>Bandeja de Entrada</h1>
            <button onclick="window.location.href='enviar_mensaje.php'">Nuevo Mensaje</button>
        </div>

        <div class="messages-list">
            <!-- Mensaje de ejemplo -->
            <div class="message-item">
                <div class="message-info">
                    <img src="img/paciente1.jpg" alt="Paciente 1">
                    <div>
                        <h4>Juan Pérez</h4>
                        <p>Hola, necesito información sobre tus servicios...</p>
                    </div>
                </div>
                <div class="message-actions">
                    <button onclick="window.location.href='ver_mensaje.php?id=1'">Ver</button>
                </div>
            </div>

            <!-- Repite para más mensajes -->
            <div class="message-item">
                <div class="message-info">
                    <img src="img/paciente2.jpg" alt="Paciente 2">
                    <div>
                        <h4>María López</h4>
                        <p>¿Podrías atender a mi madre este fin de semana?</p>
                    </div>
                </div>
                <div class="message-actions">
                    <button onclick="window.location.href='ver_mensaje.php?id=2'">Ver</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Plataforma de Intercomunicadores</p>
    </footer>
</body>
</html>
