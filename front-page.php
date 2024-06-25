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
            <a href="<?php echo esc_url(get_permalink("14"))?>" class="button primary-button">
                Ver todos los servicios
            </a>
        </div>
    </main> 

    <?php
        get_footer();
    ?>