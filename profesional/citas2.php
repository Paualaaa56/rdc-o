<?php include '/xampp2/htdocs/TestProyecto/TestProyecto/templates_paginas_secundarias/header_profesional.php' ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000; /* Fondo negro fuera del contenedor */
            color: #f4f4f4; /* Texto claro fuera del contenedor */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background-color: #ffffff; /* Fondo blanco para el contenedor */
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
    <h1>Appointments</h1>

    <!-- Appointment list -->
    <ul class="appointment-list" id="appointmentList">
        <!-- Appointments will be dynamically generated here -->
    </ul>

    <!-- Appointment details section -->
    <div class="appointment-details" id="appointmentDetails">
        <h2>Appointment Details</h2>
        <p id="appointmentInfo"></p>

        <div class="appointment-actions">
            <button onclick="confirmAppointment()">Confirm Appointment</button>
            <button onclick="cancelAppointment()">Cancel Appointment</button>
        </div>
    </div>
</div>

<script>
    // Simulated appointments for demonstration
    const appointments = [
        { 
            id: 1, 
            patient: 'John Doe', 
            professional: 'Dr. Smith', 
            date: '2024-12-15 10:00 AM', 
            details: 'General Checkup', 
            contract: 'Service Contract: Full checkup with consultation.' 
        },
        { 
            id: 2, 
            patient: 'Jane Doe', 
            professional: 'Dr. Lee', 
            date: '2024-12-20 09:30 AM', 
            details: 'Dental Consultation', 
            contract: 'Service Contract: Includes dental exam and cleaning.' 
        }
    ];

    // Function to display appointment list
    function displayAppointments() {
        const appointmentList = document.getElementById('appointmentList');
        appointmentList.innerHTML = ''; // Clear previous list

        appointments.forEach(appointment => {
            const listItem = document.createElement('li');
            listItem.classList.add('appointment-item');
            listItem.onclick = () => showAppointmentDetails(appointment);
            listItem.innerHTML = `
                <p><strong>Patient:</strong> ${appointment.patient}</p>
                <p><strong>Professional:</strong> ${appointment.professional}</p>
                <p><strong>Date:</strong> ${appointment.date}</p>
                <p><strong>Details:</strong> ${appointment.details}</p>
                <button>View Details</button>
            `;
            appointmentList.appendChild(listItem);
        });
    }

    // Function to show appointment details
    function showAppointmentDetails(appointment) {
        const appointmentDetails = document.getElementById('appointmentDetails');
        const appointmentInfo = document.getElementById('appointmentInfo');
        appointmentInfo.innerHTML = ` 
            <strong>Patient:</strong> ${appointment.patient}<br>
            <strong>Professional:</strong> ${appointment.professional}<br>
            <strong>Date:</strong> ${appointment.date}<br>
            <strong>Details:</strong> ${appointment.details}<br>
            <strong>Contract:</strong> ${appointment.contract}
        `;
        appointmentDetails.style.display = 'block';
    }

    // Function to confirm appointment
    function confirmAppointment() {
        alert('Your appointment has been confirmed!');
    }

    // Function to cancel appointment
    function cancelAppointment() {
        const confirmation = confirm('Are you sure you want to cancel this appointment?');
        if (confirmation) {
            alert('Your appointment has been canceled.');
        }
    }

    // Initialize the page with appointments
    displayAppointments();
</script>

</body>
</html>
