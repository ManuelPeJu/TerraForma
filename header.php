<!DOCTYPE html>
<html lang=<?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php get_template_directory_uri(); ?>/images/Logo.svg" type="image/x-icon">

    <?php 
        wp_head(); //charge a lot of wp content example: scripts and css 
    ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <nav class="container navbar"> 
            <div class="logo">
                <a href="<?php echo site_url("/"); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/Logo.svg" alt="Logotipo"> <!-- WP function to get the url dynamically -->
                </a>
            </div>
            <div class="container-menu">
                <?php 
                    $args = array (
                        "theme_location" => "menu-principal", // locate the menu u want to render
                        "container" => "nav", // set the container as a nav tag, default container are a div
                        "container_class" => "main-menu", // set the classname for a css modification
                    );  

                    wp_nav_menu($args); // this function render a menu taking a associative array as menu location
                ?>
            </div>
            <!-- add the dynamic menu -->
           
        </nav>
    </header>
