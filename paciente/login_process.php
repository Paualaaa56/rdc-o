<?php
include '/conexion.php'; // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario
    $nombres = $_POST['name'];
    $apellidos = $_POST['last_name'];
    $edad = $_POST['age'];
    $genero = $_POST['gender'];
    $telefono = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashear contraseña
    $dob = $_POST['dob'];
    $tipo_paciente = $_POST['patient_type'];
    $descripcion_condicion = $_POST['condition_description'];
    $movilidad_asistencia = $_POST['mobility_assistance'];
    $medicamentos = $_POST['medications'];
    $alergias = $_POST['allergies'];
    $tratamiento = $_POST['treatment'];
    $autonomia = $_POST['autonomy'];
    $asistencia_necesaria = $_POST['assistance_needed'];
    $contacto_emergencia = $_POST['contact_emergency'];

    try {
        // Preparar y ejecutar la consulta para insertar los datos
        $sql = "INSERT INTO usuarios (
                    nombres, apellidos, edad, genero, telefono, correo, contraseña, 
                    fecha_nacimiento, tipo_paciente, descripcion_condicion, 
                    movilidad_asistencia, medicamentos, alergias, tratamiento, 
                    autonomia, asistencia_necesaria, contacto_emergencia
                ) VALUES (
                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
                )";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $nombres, $apellidos, $edad, $genero, $telefono, $email, $password,
            $dob, $tipo_paciente, $descripcion_condicion, 
            $movilidad_asistencia, $medicamentos, $alergias, $tratamiento,
            $autonomia, $asistencia_necesaria, $contacto_emergencia
        ]);

        echo "<script>alert('Registro exitoso'); window.location.href='login.php';</script>";
    } catch (Exception $e) {
        echo "Error al registrar el usuario: " . $e->getMessage();
    }
}
?>
