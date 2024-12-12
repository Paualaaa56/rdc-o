<?php

$servername = "localhost";
$username = "root"; // Usuario predeterminado de XAMPP
$password = ""; // Contraseña por defecto en XAMPP
$dbname = "rdc"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Insertar datos desde el formulario 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $genero = $_POST['genero'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $id_identificacion = $_POST['id_identificacion'];
    $edad = $_POST['edad'];
    $condiciones_salud = $_POST['condiciones_salud'];
    $historial_medico = $_POST['historial_medico'];

    $sql = "INSERT INTO pacientes (nombres, apellidos, genero, fecha_nacimiento, correo, telefono, direccion, id_identificacion, edad, condiciones_salud, historial_medico)
    VALUES ('$nombres', '$apellidos', '$genero', '$fecha_nacimiento', '$correo', '$telefono', '$direccion', '$id_identificacion', '$edad', '$condiciones_salud', '$historial_medico')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

