<?php
$host = 'localhost';  // Nombre del servidor de base de datos
$dbname = 'rdc'; // Nombre de tu base de datos
$username = 'root';  // Tu usuario de base de datos
$password = '';  // Tu contraseña de base de datos

try {
    // Conexión PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("No se pudo conectar a la base de datos: " . $e->getMessage());
}
?>
