<?php

function addMessageForm()
{
?>
    <div id="addMessageform" class="formulario">
        <h2>Enviar mensaje</h2>
        <form action="./controller.php?orden=agregarMensaje" method="POST">
            <label>ID del Chat:</label>
            <input type="text" name="id_chat" required><br><br>

            <label>Usuario:</label>
            <input type="text" name="usuario" required><br><br>

            <label>Mensaje:</label>
            <textarea name="mensaje" required></textarea><br><br>

            <label>Video YouTube:</label>
            <input type="text" name="video_youtube"><br><br>

            <label>Link HTTPS:</label>
            <input type="text" name="link_https"><br><br>

            <button type="submit">Enviar</button>
        </form>
    </div>
<?php
}
