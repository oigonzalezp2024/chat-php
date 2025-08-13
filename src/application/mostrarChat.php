<?php
// usa el recurso de infrastructura (código fuente)
include_once "./infrastructure/leerChat.php";

// Acceso a datos
$ruta_json = '/infrastructure/data.json';

// ejecución del programa
leerChat($ruta_json);
