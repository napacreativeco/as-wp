<?php
$the_query = new WP_Query(); ?>

<?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php the_title(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>