<?php
$page_title = "Inicio";
$current_page = "inicio";
require_once 'includes/header.php';

?>

<main class="container">
    <section class="hero">
        <h1>Bienvenido a Mi Sitio Web</h1>
        <p>Este es un ejemplo de estructura web modular en PHP</p>
    </section>
    
    <section class="content">
        <div class="card">
            <h2>Sección 1</h2>
            <p>Contenido de ejemplo para demostrar la estructura modular.</p>
        </div>
        <div class="card">
            <h2>Sección 2</h2>
            <p>Los componentes navbar, header y footer son reutilizables.</p>
        </div>
    </section>

    <?php

    $accesosCookies = 0;
    if(!isset($_COOKIE['accesos'])) {
        setcookie('accesos', ++$accesosCookies);
    } else {
        $accesosCookies = $_COOKIE['accesos'];
        setcookie('accesos', ++$accesosCookies);
    }

    setcookie('accesos', '', time() + 10);

    if(empty($_COOKIE['accesos'])) {
        echo "<h3>FIN DE LA COOKIE</h3>";
    }
    
    echo "<h3>{$accesosCookies}</h3>";
    echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';
    ?>
</main>

<?php require_once 'includes/footer.php'; ?>