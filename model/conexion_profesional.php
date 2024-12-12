<?php
$servername = "localhost";
$username = "root"; // Usuario predeterminado de XAMPP
$password = ""; // Contraseña por defecto en XAMPP
$dbname = "rdc"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $genero = $_POST['genero'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $id_identificacion = $_POST['id_identificacion'];
    $cargo = $_POST['cargo'];
    $certificaciones = $_POST['certificaciones'];
    $experiencia = $_POST['experiencia'];
    $tipo_paciente_atendido = $_POST['tipo_paciente_atendido'];
    $areas_interes = $_POST['areas_interes'];
    $disponibilidad_horaria = $_POST['disponibilidad_horaria'];
    $tipo_atencion = $_POST['tipo_atencion'];
    $idiomas_hablados = $_POST['idiomas_hablados'];
    $emergencia = $_POST['emergencia'];
    $visitas_domicilio = $_POST['visitas_domicilio'];
    $especialidad_tratamiento = $_POST['especialidad_tratamiento'];
    $metodo_tratamiento = $_POST['metodo_tratamiento'];
    $filosofia_trabajo = $_POST['filosofia_trabajo'];
    $seguimiento_largo_plazo = $_POST['seguimiento_largo_plazo'];
    $precio_estimado = $_POST['precio_estimado'];
    $testimonios = $_POST['testimonios'];

    // Inserción de datos
    $sql = "INSERT INTO profesionales (nombres, apellidos, genero, fecha_nacimiento, correo, telefono, direccion, id_identificacion, cargo, certificaciones, experiencia, tipo_paciente_atendido, areas_interes, disponibilidad_horaria, tipo_atencion, idiomas_hablados, emergencia, visitas_domicilio, especialidad_tratamiento, metodo_tratamiento, filosofia_trabajo, seguimiento_largo_plazo, precio_estimado, testimonios)
            VALUES ('$nombres', '$apellidos', '$genero', '$fecha_nacimiento', '$correo', '$telefono', '$direccion', '$id_identificacion', '$cargo', '$certificaciones', '$experiencia', '$tipo_paciente_atendido', '$areas_interes', '$disponibilidad_horaria', '$tipo_atencion', '$idiomas_hablados', '$emergencia', '$visitas_domicilio', '$especialidad_tratamiento', '$metodo_tratamiento', '$filosofia_trabajo', '$seguimiento_largo_plazo', '$precio_estimado', '$testimonios')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
