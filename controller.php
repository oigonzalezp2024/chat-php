<?php
include_once './src/infrastructure/agregarMensaje.php';

$orden = $_GET['orden'];

if ($orden === 'agregarMensaje') {
    // recibiendo los datos del formulario
    $id_chat = $_POST['id_chat'];
    $usuario = $_POST['usuario'];
    $mensaje = $_POST['mensaje'];
    $video_youtube = $_POST['video_youtube'] ?? "";
    $link_https = $_POST['link_https'] ?? "";
    // ejecutando la funcion de agregar mensaje
    agregarMensaje(
        $id_chat,
        $usuario,
        $mensaje,
        $video_youtube,
        $link_https
    );
    header('Location: ./');
} else if ($orden === 'mostrarChat') {
    echo "aqui el codigo";
} else if ($orden === 'modificarMensaje') {
    echo "aqui el codigo";
} else if ($orden === 'eliminarMensaje') {
    echo "aqui el codigo";
}
exit;