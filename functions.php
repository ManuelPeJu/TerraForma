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
        wp_enqueue_style("style", get_stylesheet_uri(), array("normalize"), "1.0.0");
    }
    add_action("wp_enqueue_scripts", "terraforma_scripts_styles");
    
?>