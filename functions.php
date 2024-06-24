<?php 

function terraforma_scritps_styles() {
    //css
    wp_enqueue_style("normalize", "https://necolas.github.io/normalize.css/8.0.1/normalize.css", array(), "8.0.1");
    wp_enqueue_style("style", get_stylesheet_uri(), array("normalize"), "1.0.0");

}
?>