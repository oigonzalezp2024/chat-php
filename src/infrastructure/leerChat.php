<?php

function leerChat($array_php){
    // Mostrar datos generales del chat
echo '<ul>';
echo '<li>ID del chat: ' . $array_php[0]['chat1'][0]['id_chat'] . '</li>';
echo '<li>ID del iniciador: ' . $array_php[0]['chat1'][0]['iniciador'] . '</li>';

echo '<li>Participantes:</li>';
echo '<ul>';
foreach ($array_php[0]['chat1'][0]['participantes'] as $index => $id_participante) {
    echo '<li>Participante ' . ($index + 1) . ': ' . $id_participante . '</li>';
}
echo '</ul>';
echo '</ul>';

// Mostrar mensajes con colores
$participantes = $array_php[0]['chat1'][0]['participantes'];

echo '<ul style="list-style:none; padding:0;">';
foreach ($array_php[0]['chat1'][0]['mensajes'] as $index => $mensaje) {
    if ($mensaje['usuario'] === $participantes[0]) {
        $remitente = "Participante 1";
        $color = "background-color:green; color:white; padding:8px; border-radius:5px; display:inline-block;";
    } elseif ($mensaje['usuario'] === $participantes[1]) {
        $remitente = "Participante 2";
        $color = "background-color:blue; color:white; padding:8px; border-radius:5px; display:inline-block;";
    } else {
        $remitente = "Desconocido";
        $color = "background-color:gray; color:white; padding:8px; border-radius:5px; display:inline-block;";
    }

    echo '<li style="margin-bottom:5px;">';
    echo '<span style="' . $color . '">Mensaje ' . ($index + 1) . ' (' . $remitente . '): ' . $mensaje['mensaje'] . '</span>';
    echo '</li>';
}
echo '</ul>';
}