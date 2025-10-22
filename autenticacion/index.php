<?php
$page_title = "Ejercicio Autenticacion";
$current_page = "autenticacion";
require_once '../includes/header.php';


?>

<main class="container">
    <section class="about">  
        <h1><?= $page_title ?></h1>
        <ol>
            <?php
                for($i=401; $i <= 407; $i++) {
                    $texto_lista = 'Ejercicio - ' . $i;
                    echo "<li><a href='ejercicios/{$i}.php'>{$texto_lista}</a></li>";
                }

            ?>
        </ol>
    </section>
</main>

<?php require_once '../includes/footer.php'; ?>
