<?php
include './src/infrastructure/identificarVideo.php';

/**
 * @param string $ruta_json // ruta de acceso a datos
 * @return void // No devuelve valores es una funcion de proceso
 */
function leerChat(string $ruta_json): string
{
    $content = "";

    // Leer el contenido del archivo
    $data = file_get_contents($ruta_json);

    // Convertir el JSON a array asociativo
    $array_php = json_decode($data, true);

    // Verificar si se decodificó correctamente
    if ($array_php === null) {
        die("Error al decodificar el JSON");
    }
    // Mostrar datos generales del chat
    $content .= '<ul>';
    $content .= '<li>ID del chat: ' . $array_php[0]['chat1'][0]['id_chat'] . '</li>';
    $content .= '<li>ID del iniciador: ' . $array_php[0]['chat1'][0]['iniciador'] . '</li>';

    $content .= '<li>Participantes:</li>';
    $content .= '<ul>';
    foreach ($array_php[0]['chat1'][0]['participantes'] as $index => $id_participante) {
        $content .= '<li>Participante ' . ($index + 1) . ': ' . $id_participante . '</li>';
    }
    $content .= '</ul>';
    $content .= '</ul>';

    // Mostrar mensajes con colores
    $participantes = $array_php[0]['chat1'][0]['participantes'];

    $content .= '<ul style="list-style:none; padding:0;">';
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

        $content .= '<li style="margin-bottom:5px;">';
        $content .= '<span style="' . $color . '">Mensaje ' . ($index + 1) . ' (' . $remitente . '): ' . $mensaje['mensaje'] . '</span>';
        $content .= '</li>';
        $content .= '</li>';
        if ($mensaje['video_youtube'] !== "" && $mensaje['video_youtube'] !== null) {


            $codigoVideo = identificarVideo($mensaje['video_youtube']);


            $content .= '    
            <iframe width="560" height="315" src="https://www.youtube.com/embed/' . $codigoVideo . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            ';
        }
    }

    return $content;
}
