<!-- <nav class="navbar">
    <div class="container">
        <div class="logo">
            <a href="index.php">Logo</a>
        </div>
        <ul class="nav-menu">
            <li><a href="index.php" class="<?php echo ($current_page == 'inicio') ? 'active' : ''; ?>">Inicio</a></li>
            <li><a href="about.php" class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>">Acerca de</a></li>
            <li><a href="services.php" class="<?php echo ($current_page == 'services') ? 'active' : ''; ?>">Servicios</a></li>
            <li><a href="contact.php" class="<?php echo ($current_page == 'contact') ? 'active' : ''; ?>">Contacto</a></li>
        </ul>
    </div>
</nav> -->
<?php

const BASE_URL = '/php-0613/A1/project';

$ruta_inicio = BASE_URL . '/index.php';
$ruta_form = BASE_URL . '/formularios/index.php';
$ruta_cookies = BASE_URL . '/cookies_sesiones/index.php';
$ruta_autenticacion = BASE_URL . '/autenticacion/index.php';

?>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'index') ? 'active' : '' ?>" href="<?= $ruta_inicio ?>">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'index' || $current_page == 'formularios') ? 'active' : '' ?>" href="<?= $ruta_form ?>">Ejercicios Formularios</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'cookies_sesiones') ? 'active' : '' ?>" href="<?= $ruta_cookies ?>">Ejercicios Cookies y Sesiones</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'autenticacion') ? 'active' : '' ?>" href="<?= $ruta_autenticacion ?>">Ejercicios Autenticación</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
