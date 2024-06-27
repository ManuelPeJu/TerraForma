    <?php
        get_header();
    ?>

    <section class="welcome section container center-text">
        <h2 class="primary-text">
            <?php the_field("encabezado_bienvenida");?>
        </h2>
        <p>
            <?php the_field("texto_bienvenida");?>
        </p>
    </section>

    <main class="container section">
        <h2 class="center-text primary-text">Nuestros Servicios</h2>
        <?php 
            terraforma_lista_servicios(4);
        ?>

        <div class="button-container">
            <a href="<?php echo esc_url(get_permalink("14")); ?>" class="button primary-button">
                Ver todos los servicios
            </a>
        </div>
    </main> 

    <section class="container section">
        <h2 class="center-text primary-text">¿Quiénes somos?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam corporis quas vero doloremque dignissimos mollitia nobis quis, eum sunt placeat, similique aut. Maxime magnam architecto quia dolore earum tenetur eius soluta reiciendis ipsam eos. Dolor ipsa repellendus quae non, doloremque voluptatibus accusamus ad architecto vitae eius facilis nesciunt fuga ducimus?</p>
        <div class="button-container">
            <a href="<?php echo esc_url(get_permalink("12")); ?>" class="button primary-button">
                Sobre nosotros
            </a>
        </div>
    </section>

    <section class="container section">
        <h2 class="center-text primary-text">¡Contáctanos!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis inventore veritatis doloribus ea dicta quisquam eius? Laborum voluptatibus rem fugit, dicta reiciendis quos odio rerum!</p>
        <div class="button-container">
            <a href="<?php echo esc_url(get_permalink("16")); ?>" class="button primary-button">
                Contáctanos
            </a>
        </div>
    </section>

    <?php
        get_footer();
    ?>