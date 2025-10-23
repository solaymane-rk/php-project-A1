<?php
$page_title = "Ejercicio formularios";
$current_page = "formularios";
require_once '../includes/header.php';


?>

<main class="container">
    <section class="about">  
        <h1><?= $page_title ?></h1>
        <ol>
            <?php
                for($i=402; $i <= 407; $i++) {
                    $texto_lista = 'Ejercicio - ' . $i;
                    file_put_contents("ejercicios/{$i}.php", <<<PHP
                    <?php
                    \$page_title = "Ejercicio formularios";
                    \$current_page = "formularios";
                    require_once '../includes/header.php';
                    ?>
                    PHP
                    );
                    echo "<li><a href='ejercicios/{$i}.php'>{$texto_lista}</a></li>";
                }

            ?>
        </ol>
    </section>
</main>

<?php require_once '../includes/footer.php'; ?>
