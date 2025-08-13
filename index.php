<?php
// usa el recurso de infrastructura (código fuente)
include_once "./src/infrastructure/leerChat.php";
// Acceso a datos
$ruta_json = './src/infrastructure/data.json';
// ejecución del programa
$result = leerChat($ruta_json);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $result;
    ?>
</body>
</html>