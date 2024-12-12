<?php
// Suponemos que ya estás conectando a la base de datos
include '/xampp2/htdocs/TestProyecto/TestProyecto/db_conexion.php';

$id_profesional = $_GET['id']; // ID del profesional pasado por la URL

// Obtener la información del profesional desde la base de datos
$query = "SELECT * FROM profesionales WHERE id = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id_profesional]);
$profesional = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario y actualizarlos en la base de datos
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    // Actualizar la información en la base de datos
    $updateQuery = "UPDATE profesionales SET nombre = ?, correo = ?, telefono = ?, direccion = ? WHERE id = ?";
    $stmt = $pdo->prepare($updateQuery);
    $stmt->execute([$nombre, $correo, $telefono, $direccion, $id_profesional]);

    // Redirigir al perfil profesional después de actualizar
    header('Location: /perfil_profesional.php?id=' . $id_profesional);
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Información Profesional</title>
    <style>
        /* Agregar los estilos que necesites para el formulario */
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>Modificar Información Profesional</h2>
        <form method="POST">
            <div class="personal-info">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $profesional['nombre']; ?>" required><br>

                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" value="<?php echo $profesional['correo']; ?>" required><br>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" value="<?php echo $profesional['telefono']; ?>" required><br>

                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" value="<?php echo $profesional['direccion']; ?>" required><br>

                <button type="submit" class="modify-btn">Guardar Cambios</button>
            </div>
        </form>
    </div>
</body>
</html>
