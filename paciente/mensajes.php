<?php include '/xampp2/htdocs/TestProyecto/TestProyecto/templates_paginas_secundarias/header_paciente.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes - Paciente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000; /* Fondo cambiado a negro */
        }

        header {
            background-color: #8c16d4;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: white;
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
                    <img src="img/profesional1.jpg" alt="Profesional 1">
                    <div>
                        <h4>Enfermera Carolina</h4>
                        <p>Hola, estoy disponible para el cuidado que solicitaste...</p>
                    </div>
                </div>
                <div class="message-actions">
                    <button onclick="window.location.href='ver_mensaje.php?id=1'">Ver</button>
                </div>
            </div>

            <!-- Repite para más mensajes -->
            <div class="message-item">
                <div class="message-info">
                    <img src="img/profesional2.jpg" alt="Profesional 2">
                    <div>
                        <h4>Carlos Rodríguez</h4>
                        <p>Quiero confirmar la cita agendada para mañana.</p>
                    </div>
                </div>
                <div class="message-actions">
                    <button onclick="window.location.href='ver_mensaje.php?id=2'">Ver</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
