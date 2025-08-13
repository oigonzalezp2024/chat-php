<?php

// Ruta del archivo JSON (ajusta según ubicación)
$ruta_json = __DIR__ . '/../../data/data.json';

include_once "./leerChat.php";

// Leer el contenido del archivo
$data = file_get_contents($ruta_json);

// Convertir el JSON a array asociativo
$array_php = json_decode($data, true);

// Verificar si se decodificó correctamente
if ($array_php === null) {
    die("Error al decodificar el JSON");
}

leerChat($array_php);
