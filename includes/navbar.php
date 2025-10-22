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
// Obtener el directorio actual del script
$ruta_base = dirname($_SERVER['PHP_SELF']);
$ruta_base2 = dirname($_SERVER['PHP_SELF'], 2);

// Rutas absolutas relativas al proyecto
$ruta_inicio = $ruta_base . '/index.php';
$ruta_inicio2 = $ruta_base2 . '/index.php';

$ruta_form = $ruta_base . '/formularios/index.php';
$ruta_form2 = $ruta_base2 . '/formularios/index.php';

$ruta_cookies = $ruta_base . '/cookies_sesiones/index.php';
$ruta_cookies2 = $ruta_base2 . '/cookies_sesiones/index.php';

$ruta_autenticacion = $ruta_base . '/autenticacion/index.php';
$ruta_autenticacion2 = $ruta_base2 . '/autenticacion/index.php';

?>

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
            href="<?= ($current_page == 'inicio') ? $ruta_inicio : $ruta_inicio2; ?>">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'formularios') ? 'active' : '' ?>"
            href="
            <?php
             if ($current_page == 'formularios') {
                echo $ruta_form2;
             } else if($current_page == 'inicio') {
              echo $ruta_form;
             } else {
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
             } else {
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
             } else {
              echo $ruta_autenticacion2;
             }
            ?>
            ">Ejercicios Autenticación</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
