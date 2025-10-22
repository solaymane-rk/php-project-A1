<?php
$current_page = 'ej';

require_once '../../includes/navbar.php';

?>
<form action="405-img.php" method="post" enctype="multipart/form-data">
    <legend>Subida de fichero</legend>

    <label for="archivo">Archivo</label>
    <input type="file" name="archivo" required>

    <br><br>

    <label for="anchura">Anchura</label>
    <input type="number" name="anchura" required>

    <br><br>

    <label for="altura">Altura</label>
    <input type="number" name="altura" required>

    <br><br>

    <button type="submit">Enviar</button>
</form>
