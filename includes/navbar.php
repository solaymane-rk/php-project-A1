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
$ruta_base = dirname($_SERVER['PHP_SELF']);
$ruta_base2 = dirname($_SERVER['PHP_SELF'], 2);
$ruta_base3 = dirname($_SERVER['PHP_SELF'], 3);

$ruta_inicio = $ruta_base . '/index.php';
$ruta_inicio2 = $ruta_base2 . '/index.php';
$ruta_inicio3 = $ruta_base3 . '/index.php';

$ruta_form = $ruta_base . '/formularios/index.php';
$ruta_form2 = $ruta_base2 . '/formularios/index.php';
$ruta_form3 = $ruta_base3 . '/formularios/index.php';

$ruta_cookies = $ruta_base . '/cookies_sesiones/index.php';
$ruta_cookies2 = $ruta_base2 . '/cookies_sesiones/index.php';
$ruta_cookies3 = $ruta_base3 . '/cookies_sesiones/index.php';

$ruta_autenticacion = $ruta_base . '/autenticacion/index.php';
$ruta_autenticacion2 = $ruta_base2 . '/autenticacion/index.php';
$ruta_autenticacion3 = $ruta_base3 . '/autenticacion/index.php';

// echo $ruta_base . '<br>';
// echo $ruta_base2 . '<br>';
// echo $ruta_base3 . '<br>';

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
          <a class="nav-link <?= ($current_page == 'inicio') ? 'active' : '' ?>"
            href="
            <?php
            if ($current_page == 'inicio') {
              echo $ruta_inicio;
            } elseif($current_page == 'ej') {
              echo $ruta_inicio3;
            } else echo $ruta_inicio2; 
            ?>
            ">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'formularios') ? 'active' : '' ?>"
            href="
            <?php
             if ($current_page == 'formularios') {
                echo $ruta_form2;
             } else if($current_page == 'inicio') {
              echo $ruta_form;
             } elseif($current_page == 'ej') {
              echo $ruta_form3;
             }else {
              echo $ruta_form2;
             }
            ?>
            ">Ejercicios Formularios</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'cookies') ? 'active' : '' ?>"
            href="
            <?php
             if ($current_page == 'cookies') {
                echo $ruta_cookies2;
             } else if($current_page == 'inicio') {
              echo $ruta_cookies;
             } elseif($current_page == 'ej') {
              echo $ruta_cookies3;
             }else {
              echo $ruta_cookies2;
             }
            ?>
            ">Ejercicios Cookies y Sesiones</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'autenticacion') ? 'active' : '' ?>"
            href="
            <?php
             if ($current_page == 'autenticacion') {
                echo $ruta_autenticacion2;
             } else if($current_page == 'inicio') {
              echo $ruta_autenticacion;
             } elseif($current_page == 'ej') {
              echo $ruta_autenticacion3;
             }else {
              echo $ruta_autenticacion2;
             }
            ?>
            ">Ejercicios Autenticación</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
