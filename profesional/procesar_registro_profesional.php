<?php
include 'conexion.php'; // Conexión a la base de datos

// Obtener los datos del formulario
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$identificacion = $_POST['identificacion'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptación de la contraseña

// Información específica del profesional
$especializacion = $_POST['especializacion'];
$experiencia = $_POST['experiencia'];
$certificaciones = $_POST['certificaciones'];
$disponibilidad = $_POST['disponibilidad'];
$areas_interes = $_POST['areas_interes'];

// Insertar en la tabla 'usuarios'
$query = "INSERT INTO usuarios (nombres, apellidos, correo, telefono, direccion, contraseña, role) 
          VALUES (?, ?, ?, ?, ?, ?, 'profesional')";
$stmt = $conexion->prepare($query);
$stmt->bind_param("ssssss", $nombres, $apellidos, $email, $telefono, $direccion, $password);
$stmt->execute();

// Obtener el ID del usuario recién insertado
$usuario_id = $stmt->insert_id;

// Insertar en la tabla 'profesionales'
$query_profesional = "INSERT INTO profesionales (usuario_id, cargo, experiencia, certificaciones, disponibilidad_horaria, areas_interes) 
                      VALUES (?, ?, ?, ?, ?, ?)";
$stmt_profesional = $conexion->prepare($query_profesional);
$stmt_profesional->bind_param("isisss", $usuario_id, $especializacion, $experiencia, $certificaciones, $disponibilidad, $areas_interes);
$stmt_profesional->execute();

// Redirigir a una página de perfil o al inicio de sesión
header("profesional/perfil2.php");
exit;
?>
