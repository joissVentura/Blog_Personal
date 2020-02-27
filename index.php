<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <title>Inicio</title>
</head>
                
<body>
    <div id="contenedor">
        <?php
            include_once ('template.php');
            include_once ('---,,,content-blog.php');
            include_once ('---,,,content-proyectos.php');
            $Home->print_title();

            $Home->print_navbar();
        ?>
        <aside id="aside">
        </aside>

        <div id="article">
            <h2 class="cabezera">Tres últimos proyectos</h2>

            <?php 
            $Home->print_ultimosProyectos($ProyectosHome,3);
            ?>

            <h2 class="cabezera">Tres últimos posts</h2>

            <?php 
            $Home->print_ultimosPosts($BlogHome,3);
            ?>

        </div>

            <?php 
                $Home->print_Footer();
            ?>
    </div>
</body>
</html>