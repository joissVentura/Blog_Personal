<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../index.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <style type="text/css">

    #navegador>ul>li#Inicio{
    background-color: white;
    
    }
    #navegador>ul>li#Proyectos{
    background-color: rgb(117, 137, 252);
    }
    </style>
    <title>Proyectos</title>
</head>

<body>
<div id="contenedor">
    <?php
            include_once ('../template.php');
            include_once ('../---,,,content-proyectos.php');
            $Page->print_title();
            $Page->print_navbar();
    ?>
        <aside id="aside">

        </aside>
        <div id="article">
        <h2 class="cabezera">Últimos proyectos </h2>

            <?php 
            $Page->print_ultimosProyectos($ProyectosNoHome,10);
            ?>

        </div>
        
            <?php 
            $Page->print_footer();       
            ?>
    </div>
</body>

</html>