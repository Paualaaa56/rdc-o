<?php 
include 'conexion.php'; // Archivo de conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Contraseña encriptada
    $dob = $_POST['dob'];
    $patient_type = $_POST['patient_type'];
    $condition_description = $_POST['condition_description'];
    $mobility_assistance = $_POST['mobility_assistance'];
    $medications = $_POST['medications'];

    // Iniciar una transacción
    try {
        $pdo->beginTransaction();

        // Insertar el usuario
        $sql = "INSERT INTO usuarios (nombres, apellidos, correo, telefono, fecha_nacimiento, genero, role, contraseña)
                VALUES (?, ?, ?, ?, ?, ?, 'paciente', ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $last_name, $email, $phone, $dob, $gender, $password]);

        // Obtener el ID del último usuario insertado
        $user_id = $pdo->lastInsertId();

        // Insertar el paciente
        $sql = "INSERT INTO pacientes (usuario_id, edad, condiciones_salud, tipo_paciente, movilidad_asistencia, medicamentos)
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id, $age, $condition_description, $patient_type, $mobility_assistance, $medications]);

        // Confirmar la transacción
        $pdo->commit();

        echo "Registro exitoso!";
    } catch (Exception $e) {
        // Si ocurre algún error, deshacer la transacción
        $pdo->rollBack();
        echo "Error en el registro: " . $e->getMessage();
    }
}
?>
