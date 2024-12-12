<?php include '../template_pagina_principal/header.php'; ?>
<?php 
include '../paciente/conexion.php'; // Conexión a la base de datos
// 
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Fondo de la página */
        .main-container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            background-image: url('/img/p');
            background-size: cover;
            background-position: center;
        }

        /* Navbar fijo */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Contenedor del formulario que ocupa toda la altura restante */
        .form-container {
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con opacidad */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 80px; /* Deja espacio por el navbar fijo */
            flex: 1; /* El formulario ocupa el espacio restante */
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Estilo del formulario */
        .form-content {
            width: 100%;
            max-width: 900px; /* Ancho máximo para no extenderse demasiado */
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #6f42c1;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #6f42c1;
            outline: none;
        }

        .btn-submit {
            width: 100%;
            background-color: #6f42c1;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #5a2e99;
        }
    </style>
</head>
<body>

<div class="main-container">
    <nav>
        <!-- Aquí va el contenido del navbar -->
    </nav>

    <!-- Formulario debajo del navbar -->
    <div class="form-container">
        <div class="form-content">
            <h1>Formulario de Registro de Paciente</h1>
            <!-- Se añadió el atributo action para definir el archivo que procesará los datos -->
            <form action="procesar_registro.php" method="POST">
                <!-- Datos Básicos -->
                <div class="form-group">
                    <label for="name">Nombres:</label>
                    <input type="text" id="name" name="name" placeholder="Ingresa tus nombres" required>
                </div>

                <div class="form-group">
                    <label for="last_name">Apellidos:</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Ingresa tus apellidos" required>
                </div>

                <div class="form-group">
                    <label for="age">Edad:</label>
                    <input type="number" id="age" name="age" placeholder="Ingresa tu edad" required>
                </div>

                <div class="form-group">
                    <label for="gender">Género:</label>
                    <select id="gender" name="gender" required>
                        <option value="">Selecciona tu género</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="phone">Número de Teléfono:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Ingresa tu número de teléfono" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                </div>

                <div class="form-group">
                    <label for="dob">Fecha de Nacimiento:</label>
                    <input type="date" id="dob" name="dob" required>
                </div>

                <!-- Sección Condición del Paciente -->
                <div class="form-group">
                    <label for="patient_type">Tipo de paciente:</label>
                    <select id="patient_type" name="patient_type" required>
                        <option value="">Selecciona el tipo de paciente</option>
                        <option value="niño">Niño</option>
                        <option value="adulto_mayor">Adulto Mayor</option>
                        <option value="discapacidad">Persona con Discapacidad</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="condition_description">Descripción de la condición médica:</label>
                    <textarea id="condition_description" name="condition_description" placeholder="Describe la condición médica o discapacidad" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="mobility_assistance">¿Requiere asistencia para movilizarse?</label>
                    <select id="mobility_assistance" name="mobility_assistance" required>
                        <option value="no">No</option>
                        <option value="si">Sí</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="medications">¿Está tomando algún medicamento de manera regular?</label>
                    <select id="medications" name="medications" required>
                        <option value="no">No</option>
                        <option value="si">Sí</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="allergies">¿Tiene alergias conocidas?</label>
                    <select id="allergies" name="allergies" required>
                        <option value="no">No</option>
                        <option value="si">Sí</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="treatment">¿Recibe algún tipo de tratamiento o terapia?</label>
                    <select id="treatment" name="treatment" required>
                        <option value="no">No</option>
                        <option value="si">Sí</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="autonomy">¿Es capaz de realizar actividades diarias de manera independiente?</label>
                    <select id="autonomy" name="autonomy" required>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="assistance_needed">¿Requiere asistencia para comer, vestirse o bañarse?</label>
                    <select id="assistance_needed" name="assistance_needed" required>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="contact_emergency">Contacto de emergencia:</label>
                    <input type="text" id="contact_emergency" name="contact_emergency" placeholder="Nombre del contacto de emergencia" required>
                </div>

                <!-- Botón de envío -->
                <button type="submit" class="btn-submit">Registrarse</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybPAsI6j"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0b9jX3A4APozj+xQ+IqxR2j0bR4+6pzZTzSf6RI7VdGAyM3p"></script>
</body>
</html>
