<?php include'/xampp2/htdocs/TestProyecto/TestProyecto/templates_paginas_secundarias/header_paciente.php' ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Profesionales de la Salud</title>
    <style>
        /* Cambiar el color de fondo del body a negro */
        body {
            font-family: Arial, sans-serif;
            background-color: #000000; /* Fondo negro */
            margin: 0;
            padding: 0;
            color: #fff; /* Texto blanco para contrastar con el fondo negro */
        }

        /* Estilo para el contenedor principal del contenido */
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

        .professional-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .professional-item {
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

        .professional-item:hover {
            background-color: #d6d6d6;
        }

        .professional-item img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .professional-item p {
            margin: 5px 0;
        }

        .professional-item .view-profile {
            font-size: 14px;
            color: #8c16d4;
            cursor: pointer;
        }

        .professional-item .view-profile:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Buscar Profesionales de la Salud</h1>

    <!-- Barra de búsqueda -->
    <div class="search-bar">
        <input type="text" id="searchQuery" placeholder="Buscar por nombre o especialidad...">
        <button onclick="searchProfessionals()">Buscar</button>
    </div>

    <!-- Filtros -->
    <div class="filters">
        <select id="specialtyFilter">
            <option value="">Selecciona la Especialidad</option>
            <option value="Cuidador">Cuidador</option>
            <option value="Niñera">Niñera</option>
            <option value="Cuidador Adulto Mayor">Cuidador Adulto Mayor</option>
            <option value="Médico">Médico</option>
        </select>

        <select id="locationFilter">
            <option value="">Selecciona la Ubicación</option>
            <option value="Bogotá">Bogotá</option>
            <option value="Medellín">Medellín</option>
            <option value="Cali">Cali</option>
        </select>

        <select id="availabilityFilter">
            <option value="">Selecciona Disponibilidad</option>
            <option value="Disponible">Disponible</option>
            <option value="No Disponible">No Disponible</option>
        </select>
    </div>

    <!-- Lista de profesionales -->
    <ul class="professional-list" id="professionalList">
        <!-- Los profesionales de salud se mostrarán aquí -->
    </ul>
</div>

<script>
    // Lista simulada de profesionales
    const professionals = [
        { name: 'Marta González', specialty: 'Cuidador Adulto Mayor', location: 'Bogotá', availability: 'Disponible', description: 'Cuidadora especializada en el cuidado de adultos mayores.', photo: 'images/marta_gonzalez.jpg' },
        { name: 'Carlos Ramírez', specialty: 'Médico', location: 'Medellín', availability: 'No Disponible', description: 'Médico general con experiencia en enfermedades crónicas.', photo: 'images/carlos_ramirez.jpg' },
        { name: 'Ana López', specialty: 'Niñera', location: 'Cali', availability: 'Disponible', description: 'Niñera experimentada en el cuidado y desarrollo de niños pequeños.', photo: 'images/ana_lopez.jpg' }
    ];

    // Función para mostrar los profesionales filtrados
    function displayProfessionals(filteredProfessionals) {
        const professionalList = document.getElementById('professionalList');
        professionalList.innerHTML = ''; // Limpiar la lista actual

        filteredProfessionals.forEach(function(professional) {
            const li = document.createElement('li');
            li.classList.add('professional-item');
            li.innerHTML = `
                <img src="${professional.photo}" alt="Foto de Perfil">
                <div>
                    <p><strong>${professional.name}</strong></p>
                    <p>Especialidad: ${professional.specialty}</p>
                    <p>Ubicación: ${professional.location}</p>
                    <p><span class="view-profile" onclick="viewProfile('${professional.name}')">Ver Perfil</span></p>
                </div>
            `;
            professionalList.appendChild(li);
        });
    }

    // Función para buscar profesionales
    function searchProfessionals() {
        const query = document.getElementById('searchQuery').value.toLowerCase();
        const specialty = document.getElementById('specialtyFilter').value;
        const location = document.getElementById('locationFilter').value;
        const availability = document.getElementById('availabilityFilter').value;

        const filteredProfessionals = professionals.filter(professional => {
            return (
                (professional.name.toLowerCase().includes(query) || professional.specialty.toLowerCase().includes(query)) &&
                (specialty ? professional.specialty === specialty : true) &&
                (location ? professional.location === location : true) &&
                (availability ? professional.availability === availability : true)
            );
        });

        displayProfessionals(filteredProfessionals);
    }

    // Función para ver el perfil del profesional
    function viewProfile(name) {
        alert('Visualizando el perfil de ' + name);
    }

    // Mostrar todos los profesionales al inicio
    displayProfessionals(professionals);
</script>

</body>
</html>
