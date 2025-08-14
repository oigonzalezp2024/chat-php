<?php

function modificarMensaje(
    $id_chat,
    $id_mensaje,
    $usuario,
    $mensaje,
    $video_youtube,
    $link_https
) {
    // Ruta al archivo JSON
    $archivo = './src/infrastructure/data.json';

    // Leer JSON existente
    $datos_json = file_get_contents($archivo);
    $chats = json_decode($datos_json, true);

    // Estructura de mensaje modificado
    $mensaje_modificado = [
                        "id_mensaje" => $id_mensaje,
                        "usuario" => $usuario,
                        "mensaje" => $mensaje,
                        "video_youtube" => $video_youtube,
                        "video_cargado" => "",
                        "link_https" => $link_https,
                        "audio" => "",
                        "imagen" => "",
                        "babull_video" => "",
                        "babull_link" => ""
                    ];
    // por defecto asume que no se va encontrar el mensaje.
    $mensaje_encontrado = false;

    // Buscar el chat por su ID y el mensaje por índice
    foreach($chats as &$chat){
        if(isset($chat["chat1"][0]["mensajes"])){
            foreach($chat["chat1"][0]["mensajes"] as &$temp){

                if($temp['id_mensaje'] == $id_mensaje){
                    // Aquí se realiza la modificación del mensaje
                    $temp = $mensaje_modificado;
                    // cambia a true cuando encue tra el mensaje.
                    $mensaje_encontrado = true;
                    break;                    
                }
            }
        }
    }
    
    // Guardar cambios si se encontró el mensaje
    if ($mensaje_encontrado) {
        file_put_contents($archivo, json_encode($chats, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        echo "✅ Mensaje modificado correctamente.";
    } else {
        echo "❌ No se encontró el mensaje en el chat con ID: $id_chat";
    }
}
