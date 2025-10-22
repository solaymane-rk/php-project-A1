<?php
$current_page = 'ej';

require_once '../../includes/navbar.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    if(!empty($_POST)) {
        echo "<h1>Los datos llegaron correctamente</h1>";
        foreach($_POST as $key => $value) {
            echo "<h2>$key = $value</h2>";
        }
    } else {
        echo "<h1>No se ha recibido nada</h1>";
    }
}