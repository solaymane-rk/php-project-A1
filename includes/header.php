<?php
$ruta_base = dirname($_SERVER['PHP_SELF']);
$ruta_base2 = dirname($_SERVER['PHP_SELF'], 2);

if($current_page == 'inicio') {
    $ruta = $ruta_base . '/css/style.css';
} else {
    $ruta = $ruta_base2 . '/css/style.css';
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Mi Sitio Web'; ?></title>
    <link rel="stylesheet" href="<?= $ruta ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php require_once 'navbar.php'; ?>
    
    <header class="site-header">
        <div class="container">
            <h1>Mi Sitio Web</h1>
            <p>Estructura modular con PHP</p>
        </div>
    </header>