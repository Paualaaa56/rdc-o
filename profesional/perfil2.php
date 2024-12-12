<?php include '/xampp2/htdocs/TestProyecto/TestProyecto/templates_paginas_secundarias/header_profesional.php' ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Profesional</title>
    <style>
        /* Estilo general */
        body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Fondo negro fuera del formulario */
            color: #333;
            margin: 0;
            padding: 0;
        }

        .profile-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white; /* Fondo blanco dentro del contenedor */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Estilo de la sección de Información Personal */
        .personal-info {
            text-align: center;
            border-bottom: 2px solid #8c16d4;
            padding-bottom: 20px;
        }

        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #8c16d4;
        }

        .personal-info h1 {
            margin: 10px 0;
            color: #8c16d4;
        }

        .personal-info p {
            margin: 5px 0;
        }

        /* Estilo de las secciones */
        .professional-info, .work-methods, .reviews, .certifications {
            margin-top: 20px;
        }

        h2 {
            color: #8c16d4;
            border-bottom: 2px solid #8c16d4;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        p, ul {
            line-height: 1.6;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            list-style-type: disc;
        }

        /* Estilo del botón de modificación */
        .modify-btn {
            background-color: #8c16d4;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .modify-btn:hover {
            background-color: #6a0fa1;
        }

        /* Estilo para el formulario de subir certificados */
        .upload-certificates input[type="file"] {
            margin-top: 10px;
        }

        /* Estilo responsivo */
        @media (max-width: 600px) {
            .profile-container {
                padding: 15px;
            }

            .profile-pic {
                width: 100px;
                height: 100px;
            }

            h1 {
                font-size: 20px;
            }

            h2 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Perfil de Profesional</h2>
    <div class="row">
        <div class="col-md-4">
            <!-- Foto de perfil -->
            <img src="<?php echo $datos_profesional['foto_perfil']; ?>" alt="Foto de perfil" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-8">
            <!-- Información del profesional -->
            <h3><?php echo $datos_profesional['nombres'] . ' ' . $datos_profesional['apellidos']; ?></h3>
            <p><strong>Correo Electrónico:</strong> <?php echo $datos_profesional['correo']; ?></p>
            <p><strong>Teléfono:</strong> <?php echo $datos_profesional['telefono']; ?></p>
            <p><strong>Dirección:</strong> <?php echo $datos_profesional['direccion']; ?></p>
            <p><strong>Cargo:</strong> <?php echo $datos_profesional['cargo']; ?></p>
            <p><strong>Años de experiencia:</strong> <?php echo $datos_profesional['experiencia']; ?> años</p>
            <p><strong>Certificaciones:</strong> <?php echo $datos_profesional['certificaciones']; ?></p>
            <p><strong>Áreas de Interés:</strong> <?php echo $datos_profesional['areas_interes']; ?></p>
            <p><strong>Disponibilidad Horaria:</strong> <?php echo $datos_profesional['disponibilidad_horaria']; ?></p>
        </div>
    </div>
</div>

</body>
</html>
