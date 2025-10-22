<?php
$current_page = 'ej';
require_once '../../includes/navbar.php';

$errores = [];
$imagen_subida = false;
$ruta_destino = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_FILES['archivo']) || $_FILES['archivo']['error'] != 0) {
        $errores[] = "Error al subir el archivo.";
    } else {
        $tipo = $_FILES['archivo']['type'];
        $tipos_permitidos = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($tipo, $tipos_permitidos)) {
            $errores[] = "Solo se permiten imágenes JPG, PNG o GIF.";
        }
    }

    $anchura = isset($_POST['anchura']) ? (int)$_POST['anchura'] : 0;
    $altura  = isset($_POST['altura']) ? (int)$_POST['altura'] : 0;

    if ($anchura <= 0 || $altura <= 0) {
        $errores[] = "La anchura y la altura deben ser números positivos.";
    }

    $ruta_destino = 'uploads/' . uniqid($_FILES['archivo']['name']);
    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_destino)) {
        $imagen_subida = true;
    } else {
        $errores[] = "No se pudo guardar la imagen en el servidor.";
    }
}


if (!empty($errores)) {
    foreach ($errores as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
}

if ($imagen_subida) {
    echo "<h2>Imagen subida correctamente:</h2>";
    echo "<img src='$ruta_destino' width='$anchura' height='$altura' alt='Imagen subida'>";
}
?>
