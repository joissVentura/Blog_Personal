<?php
    require_once ('---,,,interfaces-web.php');

    /* PARA EL INDEX.PHP */

     class home implements WebPage{
        private $title_logo= "Joiss Ventura Rivera";

        private $navbar=[
            // LI-----ID------HREF-----TITLE
            'Inicio'=>['Inicio','./','Inicio'],
            'Proyectos'=>['Proyectos','Proyectos/','Proyectos'],
            'Blog'=>['Blog','Blog/','Blog'],
            'Contacto'=>['Contacto','Contacto/','Contacto']
        ];

        private $footer="&copy; 2020 Ventura Rivera Joiss";

        

        //Getters
        function get_titleLogo(){
            return $this->title_logo;
        }

        function get_navbar(){
            return $this->navbar;
        }

        function get_footer(){
            return $this->footer;
        }

        function print_ultimosProyectos($resumen,$max_numero_de_proyectos){
            $proyectos=array_reverse($resumen);
            $i=0;
            $maximo_proyectos=0;
            if ($max_numero_de_proyectos>count($resumen)) {
                $maximo_proyectos=count($resumen);
            } else {
                $maximo_proyectos=$max_numero_de_proyectos;
            }
            
            foreach($proyectos as $index){
                if ($i>=$maximo_proyectos) {
                continue;
                }
                $postear="<article class=\"prim\">
                <h2> 
                    $index[0] 
                </h2>
                <p>".substr($index[1],0, 450) ." ...</p>
                <a href=\"$index[2]\" class=\"btn-post\">
                    <div>
                    <p>Leer más</p>    
                    </div>
                </a>
                <p class=\"Fecha\">".$index[3]."</p>
                
                </article>"
                ;
                echo($postear);
                $i++;
            }
        }
        function print_title(){

            $title="<header id=\"header\"> 
                <h1 id=\"JOISS\">".$this->get_titleLogo()."</h1>
            </header>";

            echo($title);
            
        }
        function print_navbar(){

            echo("<nav id=\"navegador\">");
            echo("<ul id= \"menu\">");
            $barra_navegacion=$this->get_navbar();
            foreach($barra_navegacion as $value){
               
                echo("<li id=\"$value[0]\">
                <a href=\"$value[1]\">$value[2]</a>
                </li>");

            }
            echo("</ul>");
            echo("</nav>");
        }
        function print_sidebar($proyectos_blog){
            
        }

        function print_ultimosPosts($resumen,$max_numero_de_posts){
            $post=array_reverse($resumen);
            $i=0;
            $maximo_posts=0;
            
            if ($max_numero_de_posts>count($resumen)) {
                $maximo_posts=count($resumen);
            } else {
                $maximo_posts=$max_numero_de_posts;
            }
            foreach($post as $index){
                if ($i>=$maximo_posts) {
                continue;
                }
                $postear="<article class=\"prim\">
                <h2> 
                    $index[0] 
                </h2>
                <p>".substr($index[1],0, 450) ." ...</p>
                <a href=\"$index[2]\" class=\"btn-post\">
                    <div>
                    <p>Leer más</p>    
                    </div>
                </a>
                <p class=\"Fecha\">".$index[3]."</p>
                
                </article>"
                ;
                echo($postear);
                $i++;
            }
            
        }

        function print_footer(){
            $content=$this->get_footer();
            $footer="<footer id=\"footer\">
                <div id=\"pie\"> <p>".$content."</p></div>
            </footer>";
                
            echo($footer);
        }
    }

    
    /* PARA LAS PAGINAS QUE NO SEAN HOME */

    class nohome extends home{

        private $navbar=[
            // LI-----ID------HREF-----TITLE
            'Inicio'=>['Inicio','../','Inicio'],
            'Proyectos'=>['Proyectos','../Proyectos/','Proyectos'],
            'Blog'=>['Blog','../Blog/','Blog'],
            'Contacto'=>['Contacto','../Contacto/','Contacto']
        ];

        function get_navbar(){
            return $this->navbar;
        }

        function print_navbar(){

            echo("<nav id=\"navegador\">");
            echo("<ul id= \"menu\">");
            $barra_navegacion=$this->get_navbar();
            foreach($barra_navegacion as $value){
               
                echo("<li id=\"$value[0]\">
                <a href=\"$value[1]\">$value[2]</a>
                </li>");

            }
            echo("</ul>");
            echo("</nav>");
        }
        function print_sidebar($proyectos_blog){
            
        }

    }
        $Home= new home();
        $Page = new nohome();

    ?>