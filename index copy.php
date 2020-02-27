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
        <?php
                include_once ('template.php');
               
        ?>    
    <div id="contenedor">
        <!-- <header id="header">
            <h1 id="JOISS">Joiss Ventura Rivera</h1>
        </header> -->
        <?php 
            $Home->print_title();
        ?>
        <nav id="navegador">
            <ul id="menu">
            <li id="Inicio"><a href="http://joiss.epizy.com/">Inicio</a></li>
                <li id="Proyectos"><a href="Proyectos/">Proyectos</a></li>
                <li id="Blog"><a href="Blog/">Blog</a></li>
                <li id="Contacto"><a href="Contacto/">Contacto</a></li>
            </ul>
        </nav>
        <aside id="aside">

        </aside>
        <div id="article">
                
            <article class="prim">
                <h1>¿Qué es Lorem Ipsum?</h1>
                <p> Es un texto usado para rellenar donde vas a escribir algo con un cierto tipo de letra y veas como se va a ver antes de que escribas algún contenido. </p>
                <p>La frase de donde proviene es : <br>
                    <b>-Latín</b>:"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..." <br>
                    <b>-Inglés</b>:"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."<br>
                    <b>-Español</b>:"No hay nadie que ame el dolor en si, el que lo busca y quiere tenerlo, simplemente por que es dolor.."</p>
            </article>
            <article class="prim">
                <h2>Lorem Ipsum</h2>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Repellendus dolores, optio quas velit laboriosam sit, facilis unde libero tempore laborum,
                    molestiae voluptas maxime distinctio est obcaecati numquam nihil eum officiis.
                    Dolor fugit voluptatem sapiente doloremque fuga sed,
                    exercitationem, eos rem eaque magni est molestiae minus.
                    Molestiae beatae amet in eligendi esse labore tenetur vitae, incidunt ad nobis quos quaerat harum.
                    Tempora dignissimos, alias enim magnam,
                    sapiente culpa nemo omnis vero amet maxime nobis vitae blanditiis itaque accusamus debitis sequi!
                    Fuga pariatur nam possimus amet eveniet incidunt sapiente, officiis est aperiam?</p>
            </article>
            <article class="prim">
                <h2>Lorem Ipsum</h2>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Repellendus dolores, optio quas velit laboriosam sit, facilis unde libero tempore laborum,
                    molestiae voluptas maxime distinctio est obcaecati numquam nihil eum officiis.
                    Dolor fugit voluptatem sapiente doloremque fuga sed,
                    exercitationem, eos rem eaque magni est molestiae minus.
                    Molestiae beatae amet in eligendi esse labore tenetur vitae, incidunt ad nobis quos quaerat harum.
                    Tempora dignissimos, alias enim magnam,
                    sapiente culpa nemo omnis vero amet maxime nobis vitae blanditiis itaque accusamus debitis sequi!
                    Fuga pariatur nam possimus amet eveniet incidunt sapiente, officiis est aperiam?</p>
            </article>
            <article class="prim">
                <h1>Lorem Ipsum</h1>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Repellendus dolores, optio quas velit laboriosam sit, facilis unde libero tempore laborum,
                    molestiae voluptas maxime distinctio est obcaecati numquam nihil eum officiis.
                    Dolor fugit voluptatem sapiente doloremque fuga sed,
                    exercitationem, eos rem eaque magni est molestiae minus.
                    Molestiae beatae amet in eligendi esse labore tenetur vitae, incidunt ad nobis quos quaerat harum.
                    Tempora dignissimos, alias enim magnam,
                    sapiente culpa nemo omnis vero amet maxime nobis vitae blanditiis itaque accusamus debitis sequi!
                    Fuga pariatur nam possimus amet eveniet incidunt sapiente, officiis est aperiam?</p>
            </article>
        </div>
           
            
            <?php 
                /* <!-- <footer id="footer">
                <div id="pie">
                    <p>&copy; 2020 Ventura Rivera Joiss </p>
                </div>
                </footer> --> */
            $web->print_Footer();
            ?>
        
    </div>
                
       

</body>

</html>