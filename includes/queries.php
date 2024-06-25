<?php 

function terraforma_lista_servicios($cantidad = -1){ // setting $cantidad = -1, make in wp_query is getting all the results
    ?>
        <ul class="grid-list">
            <?php
            $args = array(
                'post_type' => 'terraforma_servicios', // post type that we want to check
                'posts_per_page' => $cantidad, // how many post we want in a single page
            );

            $servicios = new WP_Query($args); // create queries to the WordPress database

            while ($servicios->have_posts()) {
                $servicios->the_post();
                ?>
                    <li class="card">
                        <?php the_post_thumbnail(); ?>
                        <div class="content">
                            <a href="<?php the_permalink(); ?>"> <!-- Return the direct permalink to our classes -->
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                                <p>
                                    <?php 
                                        the_content();
                                    ?>
                                </p>
                            </a>
                        </div>
                    </li>
                <?php
            }
            wp_reset_postdata(); // After looping through a separate query, this function restores the $post global to the current post in the main query.
            ?>
        </ul>
    <?php
}


?>