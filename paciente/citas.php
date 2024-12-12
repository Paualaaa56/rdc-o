<?php include '/xampp2/htdocs/TestProyecto/TestProyecto/templates_paginas_secundarias/header_paciente.php' ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000; /* Fondo negro fuera del formulario y navbar */
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background-color: #ffffff; /* Fondo blanco para el contenido */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #8c16d4;
            margin-bottom: 20px;
        }

        .appointment-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .appointment-item {
            background-color: #f8f8f8;
            color: #333;
            margin: 15px 0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .appointment-item:hover {
            background-color: #e0e0e0;
            transform: scale(1.02);
        }

        .appointment-item p {
            margin: 0;
        }

        .appointment-details {
            display: none;
            margin-top: 30px;
            background-color: #f0f0f0;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .appointment-details h2 {
            color: #8c16d4;
        }

        .appointment-actions button {
            margin-right: 15px;
            padding: 12px 25px;
            background-color: #8c16d4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .appointment-actions button:hover {
            background-color: #6a0fa1;
        }

        .appointment-actions button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Citas de Cuidado</h1>

    <!-- Lista de citas -->
    <ul class="appointment-list" id="appointmentList">
        <!-- Las citas se generarán dinámicamente aquí -->
    </ul>

    <!-- Sección de detalles de la cita -->
    <div class="appointment-details" id="appointmentDetails">
        <h2>Detalles de la cita</h2>
        <p id="appointmentInfo"></p>

        <div class="appointment-actions">
            <button onclick="confirmAppointment()">Confirmar cita</button>
            <button onclick="cancelAppointment()">Cancelar cita</button>
        </div>
    </div>
</div>

<script>
    // Citas simuladas para demostración (reemplazar con la obtención real de la base de datos)
    const appointments = [
        { 
            id: 1, 
            cliente: 'Familia Smith', // El nombre de la familia que requiere cuidado
            cuidador: 'Ana Pérez', // El nombre del cuidador
            fecha: '2024-12-15 10:00 AM', 
            tipoServicio: 'Cuidado de niños', // Tipo de servicio que se está ofreciendo
            detalles: 'Cuidar a los niños mientras los padres están fuera.', 
            ubicacion: 'Casa de la familia', // Lugar donde se realiza el servicio
            contrato: 'Contrato de servicio: Cuidado de niños por 3 horas.'
        },
        { 
            id: 2, 
            cliente: 'Juan Pérez', // El nombre de la persona a cuidar (adulto mayor)
            cuidador: 'Carlos Gómez', 
            fecha: '2024-12-20 09:30 AM', 
            tipoServicio: 'Cuidado de adulto mayor', 
            detalles: 'Asistencia con actividades diarias y compañía.',
            ubicacion: 'Casa del paciente',
            contrato: 'Contrato de servicio: Cuidado de adulto mayor por 4 horas.'
        }
    ];

    // Función para mostrar la lista de citas desde la perspectiva del paciente
    function displayAppointments() {
        const appointmentList = document.getElementById('appointmentList');
        appointmentList.innerHTML = ''; // Limpiar lista anterior

        appointments.forEach(appointment => {
            const listItem = document.createElement('li');
            listItem.classList.add('appointment-item');
            listItem.onclick = () => showAppointmentDetails(appointment);
            listItem.innerHTML = `
                <p><strong>Cliente:</strong> ${appointment.cliente}</p>
                <p><strong>Cuidador:</strong> ${appointment.cuidador}</p>
                <p><strong>Fecha:</strong> ${appointment.fecha}</p>
                <p><strong>Tipo de servicio:</strong> ${appointment.tipoServicio}</p>
                <button>Ver detalles</button>
            `;
            appointmentList.appendChild(listItem);
        });
    }

    // Función para mostrar los detalles de la cita desde la perspectiva del paciente
    function showAppointmentDetails(appointment) {
        const appointmentDetails = document.getElementById('appointmentDetails');
        const appointmentInfo = document.getElementById('appointmentInfo');
        appointmentInfo.innerHTML = `
            <strong>Cliente:</strong> ${appointment.cliente}<br>
            <strong>Cuidador:</strong> ${appointment.cuidador}<br>
            <strong>Fecha:</strong> ${appointment.fecha}<br>
            <strong>Tipo de servicio:</strong> ${appointment.tipoServicio}<br>
            <strong>Detalles:</strong> ${appointment.detalles}<br>
            <strong>Ubicación:</strong> ${appointment.ubicacion}<br>
            <strong>Contrato:</strong> ${appointment.contrato}
        `;
        appointmentDetails.style.display = 'block';
    }

    // Función para confirmar la cita desde la perspectiva del paciente
    function confirmAppointment() {
        alert('¡Tu cita ha sido confirmada!');
    }

    // Función para cancelar la cita desde la perspectiva del paciente
    function cancelAppointment() {
        const confirmation = confirm('¿Estás seguro de que quieres cancelar esta cita?');
        if (confirmation) {
            alert('Tu cita ha sido cancelada.');
        }
    }

    // Inicializar la página con las citas
    displayAppointments();
</script>

</body>
</html>
