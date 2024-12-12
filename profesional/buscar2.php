<?php include '/xampp2/htdocs/TestProyecto/TestProyecto/templates_paginas_secundarias/header_profesional.php' ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Pacientes</title>
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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #8c16d4;
        }

        .search-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .search-bar input {
            width: 70%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .search-bar button {
            width: 25%;
            padding: 10px;
            background-color: #8c16d4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .search-bar button:hover {
            background-color: #6a0fa1;
        }

        .filters {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .filters select {
            width: 30%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .patient-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .patient-item {
            background-color: #e8e8e8;
            color: #333;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
        }

        .patient-item:hover {
            background-color: #d6d6d6;
        }

        .patient-item img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .patient-item p {
            margin: 5px 0;
        }

        .patient-item .view-profile {
            font-size: 14px;
            color: #8c16d4;
            cursor: pointer;
        }

        .patient-item .view-profile:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Buscar Pacientes</h1>

    <!-- Barra de búsqueda -->
    <div class="search-bar">
        <input type="text" id="searchQuery" placeholder="Buscar por nombre o condición...">
        <button onclick="searchPatients()">Buscar</button>
    </div>

    <!-- Filtros -->
    <div class="filters">
        <select id="conditionFilter">
            <option value="">Seleccionar condición</option>
            <option value="Diabetes">Diabetes</option>
            <option value="Hipertensión">Hipertensión</option>
            <option value="Cáncer">Cáncer</option>
        </select>

        <select id="locationFilter">
            <option value="">Seleccionar ubicación</option>
            <option value="Bogotá">Bogotá</option>
            <option value="Medellín">Medellín</option>
            <option value="Cali">Cali</option>
        </select>
    </div>

    <!-- Lista de pacientes -->
    <ul class="patient-list" id="patientList">
        <!-- Los pacientes serán listados dinámicamente aquí -->
    </ul>
</div>

<script>
    // Lista simulada de pacientes con rutas de imagen
    const patients = [
        { name: 'Juan Pérez', condition: 'Diabetes', location: 'Bogotá', description: 'Paciente con diabetes tipo 2, en tratamiento.', photo: 'images/juan_perez.jpg' },
        { name: 'María Gómez', condition: 'Hipertensión', location: 'Medellín', description: 'Paciente con hipertensión controlada.', photo: 'images/maria_gomez.jpg' },
        { name: 'Carlos Rodríguez', condition: 'Cáncer', location: 'Cali', description: 'Paciente con diagnóstico de cáncer, en quimioterapia.', photo: 'images/carlos_rodriguez.jpg' }
    ];

    // Función para mostrar pacientes
    function displayPatients(filteredPatients) {
        const patientList = document.getElementById('patientList');
        patientList.innerHTML = ''; // Limpiar la lista actual

        filteredPatients.forEach(function(patient) {
            const li = document.createElement('li');
            li.classList.add('patient-item');
            li.innerHTML = `
                <img src="${patient.photo}" alt="Foto de perfil">
                <div>
                    <p><strong>${patient.name}</strong></p>
                    <p>Condición: ${patient.condition}</p>
                    <p>Ubicación: ${patient.location}</p>
                    <p><span class="view-profile" onclick="viewProfile('${patient.name}')">Ver Perfil</span></p>
                </div>
            `;
            patientList.appendChild(li);
        });
    }

    // Función para buscar pacientes
    function searchPatients() {
        const query = document.getElementById('searchQuery').value.toLowerCase();
        const condition = document.getElementById('conditionFilter').value;
        const location = document.getElementById('locationFilter').value;

        const filteredPatients = patients.filter(patient => {
            return (
                (patient.name.toLowerCase().includes(query) || patient.condition.toLowerCase().includes(query)) &&
                (condition ? patient.condition === condition : true) &&
                (location ? patient.location === location : true)
            );
        });

        displayPatients(filteredPatients);
    }

    // Función para ver detalles del perfil (puede expandirse)
    function viewProfile(name) {
        alert('Viendo perfil de ' + name);
    }

    // Inicialmente mostrar todos los pacientes
    displayPatients(patients);
</script>

</body>
</html>
