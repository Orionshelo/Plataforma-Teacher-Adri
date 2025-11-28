<?php

// Cargar configuración
$config = include __DIR__ . '/../config/app.php';

/**
 * Obtiene los datos del currículo desde el archivo JSON.
 * Simula una consulta a base de datos.
 */
function getCurriculum() {
    $json = file_get_contents(__DIR__ . '/../data/curriculum.json');
    return json_decode($json, true);
}

/**
 * Helper para obtener clases de color basadas en el estado o tipo.
 */
function getStatusColor($status) {
    switch ($status) {
        case 'completed': return 'bg-green-100 text-green-700 border-green-200';
        case 'active': return 'bg-blue-100 text-blue-700 border-blue-200';
        case 'locked': return 'bg-gray-100 text-gray-500 border-gray-200';
        default: return 'bg-gray-100 text-gray-700';
    }
}

/**
 * Helper para renderizar iconos dinámicamente (si fuera necesario en PHP puro)
 * Por ahora usamos data-lucide en el frontend.
 */
