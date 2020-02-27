<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../index.css">
    
    <style type="text/css">

    #navegador>ul>li#Inicio{
    background-color: white;

    }
    #navegador>ul>li#Blog{
    background-color: rgb(117, 137, 252);
    }

    </style>
    <title>HTML</title>
</head>

<body>
    <div id="contenedor">
    <?php 
            include_once ('../template.php');
            $Page->print_title();
            $Page->print_navbar();
            $Page->print_sideBar();
            
            echo("<div id=\"article\">
                </div>
            ");
            $Page->print_footer();
        ?>
    </div>
</body>

</html>