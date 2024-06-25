<?php //Create the name of the child template
    /*
        Template Name: Listado de Servicios
    */
    get_header();
?>

    <main class="container section center-text">
        <?php 
            get_template_part("template-parts/pagina");
        ?>
       
        <?php 
            terraforma_lista_servicios(); // now we can get this info from our queries.php archive from includes
        ?>
    </main>

<?php 
    get_footer(); // get the footer
?>
