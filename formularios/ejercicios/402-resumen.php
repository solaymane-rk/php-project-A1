<?php
$current_page = 'ej';

require_once '../../includes/navbar.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    $datos = [];
    $errores = [];

    if(isset($_POST['nombre-apellidos'])) {
        $datos['nombre_apellidos'] = trim($_POST['nombre-apellidos']);
    }

    if(isset($_POST['email'])) {
        $datos['email'] = trim($_POST['email']);
        $es_valido = filter_var($datos['email'], FILTER_VALIDATE_EMAIL);
        if(!$es_valido) {
            $errores[] = 'El email no es valido';
        }        
    }

    if(isset($_POST['url'])) {
        $datos['url'] = trim($_POST['url']);
    }

    if(isset($_POST['sexo'])) {
        $datos['sexo'] = $_POST['sexo'];
    }

    if(isset($_POST['convivientes'])) {
        $datos['convivientes'] = trim($_POST['convivientes']);
        $es_valido = filter_var($datos['convivientes'], FILTER_VALIDATE_INT);
        if(!$es_valido) {
            $errores[] = 'El email no es valido';
        }      
    }
    
    if(isset($_POST['aficiones'])) {
        $datos['aficiones'] = $_POST['aficiones'];
    }

    if(isset($_POST['menu'])) {
        $datos['menu'] = $_POST['menu'];
    }
    
    // echo '<pre>';
    // print_r($datos);
    // echo '</pre>';

    if(!empty($errores)) {
        foreach($errores as $error) {
            echo "<h2>$error</h2>";
        }
    }

    if (!empty($datos)) {
        echo '<h2>Datos recibidos</h2>';
        echo '<table>';

        foreach ($datos as $key => $value) {
            echo '<tr>';
            echo '<td><strong>' . $key . '</strong></td>';
            if (is_array($value)) {
                echo '<td>' . implode(', ', $value) . '</td>';
            } else {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    }
} 