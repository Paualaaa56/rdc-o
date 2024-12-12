<?php
session_start();
include '../paciente/conexion.php'; // Conexión a la base de datos

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirigir al login si no está autenticado
    exit;
}

try {
    // Obtener los datos del usuario desde la base de datos
    $userId = $_SESSION['user_id'];
    $sql = "SELECT * FROM usuarios WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userId]);
    $user = $stmt->fetch();

    if (!$user) {
        echo "Usuario no encontrado.";
        exit;
    }
} catch (Exception $e) {
    echo "Error al obtener datos del usuario: " . $e->getMessage();
    exit;
}
?>

<?php include '/xampp2/htdocs/TestProyecto/TestProyecto/templates_paginas_secundarias/header_paciente.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Paciente</title>
    <style>
        /* Estilo actual sin cambios */
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #333;
            margin: 0;
            padding: 0;
        }
        /* Resto del estilo igual que en tu código original */
    </style>
</head>
<body>
    <div class="profile-container">

        <!-- Sección de Información Personal -->
        <div class="personal-info">
            <img src="/TestProyecto/img/segunda_imagen_paciente.webp" alt="Foto de Perfil" class="profile-pic">
            <h1><?= htmlspecialchars($user['nombres'] . ' ' . $user['apellidos']) ?></h1>
            <p><strong>Correo:</strong> <?= htmlspecialchars($user['correo']) ?></p>
            <p><strong>Teléfono:</strong> <?= htmlspecialchars($user['telefono']) ?></p>
            <p><strong>Dirección:</strong> <?= htmlspecialchars($user['direccion'] ?? 'No proporcionada') ?></p>
            <p><strong>Género:</strong> <?= htmlspecialchars($user['genero']) ?></p>
            <p><strong>Fecha de Nacimiento:</strong> <?= htmlspecialchars($user['fecha_nacimiento']) ?></p>
        </div>

        <!-- Sección de Información Médica -->
        <div class="health-conditions">
            <h2>Condiciones de Salud</h2>
            <p><strong>Edad:</strong> <?= htmlspecialchars($user['edad']) ?> años</p>
            <p><strong>Condiciones de Salud:</strong> <?= htmlspecialchars($user['condicion_medica'] ?? 'No especificado') ?></p>
            <p><strong>Descripción de la Condición:</strong> <?= htmlspecialchars($user['descripcion_condicion'] ?? 'No especificado') ?></p>
        </div>

        <!-- Sección de Opciones de Cuidadores -->
        <div class="caregiver-options">
            <h2>Cuidador Disponible</h2>
            <ul>
                <li><strong>Cuidador: Marta González</strong> - Especialidad: Cuidado de adultos mayores</li>
                <li><strong>Cuidador: Pedro Rodríguez</strong> - Especialidad: Asistencia a personas con discapacidades</li>
            </ul>
            <p><a href="ver_perfil_cuidador.php">Ver perfil completo de cuidadores</a></p>
        </div>

        <!-- Botón para modificar la información -->
        <button class="modify-btn" onclick="window.location.href='modificar_informacion.php'">Modificar Información</button>
    </div>
</body>
</html>
