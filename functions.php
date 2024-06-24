<?php
    // image support
    function terraforma_setup()
    {
        // featured images
        add_theme_support("post-thumbnails");

        //seo for titles
        add_theme_support("title-tag");
    }
    add_action("after_setup_theme", "terraforma_setup");


    function terraforma_menus() {
        register_nav_menus(array(
            // using the function register_nav_menus, we pass as argument a associative array, where the key is your menu name, 
            // and then use a associative array where first arg are the name of the menu and the second the text domain or name of the page.
            // This would change the name of the menu depends of the language you installed wordpress
            "menu-principal" => __("Menu Principal", "terraforma"), 
        ));
    }
    add_action("init", "terraforma_menus");


    function terraforma_scripts_styles() {
        //css
        wp_enqueue_style("normalize", "https://necolas.github.io/normalize.css/8.0.1/normalize.css", array(), "8.0.1");  
        if(is_page("inicio")) {
            wp_enqueue_style("swiper-css", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), "11.1.4");
        };
        wp_enqueue_style("style", get_stylesheet_uri(), array("normalize"), "1.0.0");



        //JS FILES
        if(is_page("inicio")) {
            wp_enqueue_script("swiper-js", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), "11.1.4", true);
            wp_enqueue_script("anime", "https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js", array(), "2.0.2", true);

        };
        wp_enqueue_script("scripts", get_template_directory_uri() . "/js/scripts.js", array(), "1.0.0", true);

    }
    add_action("wp_enqueue_scripts", "terraforma_scripts_styles");

    //dynamic images
    
    function gymfitness_hero_imagen() {
        //All of this is so that the owner, if for whatever reason he wants to change the hero's image, can.

        // getting the id from the page
        $front_id = get_option("page_on_front"); // get the info on admin/options.php a hidden panel WP

        // getting the img
        $id_imagen = get_field("hero_imagen", $front_id); // the second param is a reference of where to look
        //getting the rute
        $imagen = wp_get_attachment_image_src($id_imagen, "full")[0];
        //creating css
        wp_register_style("custom", false);
        wp_enqueue_style("custom");

        $imagen_destacada_css = "
            body.home .header {
                background-image: linear-gradient(rgb(0 0 0 / .75), rgb( 0 0 0 / .75)), url($imagen);
            }
        ";
        //inject css code
        wp_add_inline_style("custom", $imagen_destacada_css);
    }
    add_action('init', 'gymfitness_hero_imagen');
?>


