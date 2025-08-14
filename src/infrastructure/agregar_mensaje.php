<?php
// Ruta al archivo JSON
$archivo = './data.json';

// Leer JSON existente
$datos_json = file_get_contents($archivo);
$chats = json_decode($datos_json, true);

// Datos recibidos del formulario
$id_chat = $_POST['id_chat'];
$usuario = $_POST['usuario'];
$mensaje = $_POST['mensaje'];
$video_youtube = $_POST['video_youtube'] ?? "";
$link_https = $_POST['link_https'] ?? "";

// Estructura de mensaje nuevo
$nuevo_mensaje = [
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

// Buscar el chat por su ID y agregar el mensaje
$mensaje_agregado = false;
foreach ($chats as &$chat_data) {
    foreach ($chat_data as &$chat) {
        if ($chat[0]['id_chat'] === $id_chat) {
            $chat[0]['mensajes'][] = $nuevo_mensaje;
            $mensaje_agregado = true;
            break 2; // Salir de ambos foreach
        }
    }
}

// Guardar cambios si se encontró el chat
if ($mensaje_agregado) {
    file_put_contents($archivo, json_encode($chats, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo "✅ Mensaje agregado correctamente.";
} else {
    echo "❌ No se encontró el chat con ID: $id_chat";
}
?>
