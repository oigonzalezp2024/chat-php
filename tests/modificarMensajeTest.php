<?php
include_once '../src/infrastructure/modificarMensaje.php';

$id_chat = "234673456354";
$id_mensaje = "1";
$usuario = "1234";
$mensaje = "jorge cambio";
$video_youtube = "";
$link_https = "";

modificarMensaje(
    $id_chat,
    $id_mensaje,
    $usuario,
    $mensaje,
    $video_youtube,
    $link_https
);
