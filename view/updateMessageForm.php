<?php

function updateMessageForm()
{
?>
    <div id="addMessageform" class="formulario">
        <h2>modificar mensaje</h2>
        <form action="./controller.php?orden=modificarMensaje" method="POST">
            <label>id chat:</label>
            <input type="text" name="id_chat" required><br><br>
            <label>id_mensaje:</label>
            <input type="number" name="id_mensaje" required><br><br>
            <label>usuario:</label>
            <input type="text" name="usuario" required><br><br>
            <label>mensaje:</label>
            <input type="text" name="mensaje" required><br><br>
            <label>video_youtube:</label>
            <input type="text" name="video_youtube" required><br><br>
            <label>link_https:</label>
            <input type="text" name="link_https"><br><br>
            <button type="submit">Enviar</button>
        </form>
    </div>
<?php
}
