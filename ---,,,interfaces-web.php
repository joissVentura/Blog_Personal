<?php 

    interface WebPage{

    //Getters
    
    public function get_titleLogo(); //Obtener el logo (encima del nav bar).
    public function get_navbar(); // Lista de items del navbar.
    public function get_footer(); //contenido del footer.
    
    //Print
    public function print_ultimosProyectos($arreglo_proyectos,$proyectos_a_mostrar);
    public function print_ultimosPosts($arreglo_posts,$posts_a_mostrar);

    

    /* function print_sidebar($proyectos,$blog); */

    public function print_title();
    public function print_navbar();
    public function print_footer();

    //Imprimir en pantalla segun el arreglo( proyectosNoHome o blogNoHome)
    public function print_sidebar($proyectos_blog);
    }

?>