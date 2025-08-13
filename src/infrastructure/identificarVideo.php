<?php

function identificarVideo($url)
{

    // 1. Analiza la URL para obtener sus componentes
    $url_components = parse_url($url);

    // 2. Extrae la cadena de consulta (query string)
    //    La cadena de consulta contiene todos los parámetros, incluyendo el 'v' (video ID)
    if (isset($url_components['query'])) {
        // 3. Analiza la cadena de consulta para obtener los parámetros individuales
        parse_str($url_components['query'], $params);

        // 4. Verifica si el parámetro 'v' existe y obtén su valor
        if (isset($params['v'])) {
            $video_id = $params['v'];
            echo "El código del video es: " . $video_id;
        } else {
            echo "No se encontró el código del video en la URL.";
        }
    } else {
        echo "La URL no tiene una cadena de consulta.";
    }
    return $video_id;
}
