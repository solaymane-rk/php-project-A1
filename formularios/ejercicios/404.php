<?php
$current_page = 'ej';

require_once '../../includes/navbar.php';

?>
<form action="404-subida.php" method="post">
    <legend>Subida de fichero</legend>

    <label for="archivo">Archivo</label>
    <input type="file" name="archivo" require>

    <br><br>

    <label for="anchura">Anchura</label>
    <input type="number" name="anchura" required>

    <br><br>

    <label for="altura">Altura</label>
    <input type="number" name="altura" required>

    <br><br>

    <button type="submit">Enviar</button>

</form>