<?php /* Template name: Clients Archive */ ?>

<?php get_header(); ?>

<main class="app">

<!-- Grid -->
<div class="grid g3">

    <?php
    $loop = new WP_Query(
        array(
            'post_type' => 'clients',
            'posts_per_page' => 50
        )
    );


    while ( $loop->have_posts() ) : $loop->the_post();
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
        $thumb_url = $thumb_url_array[0];
        ?>

        <!-- ITEM -->
        <a aria-label="link-3" target="_blank" rel="noopener" draggable="false" class="link w-inline-block">
            <h1 class="h1"><?php the_title(); ?></h1>
            <div class="text">example text</div>
            <img class="content__img" src="<?php echo $thumb_url ?>" alt="img1"/>
            <div class="link-accents">
                <p><?php echo $thumb_id ?></p>    
            <div>
        </a>

    <?php endwhile;
    wp_reset_postdata();
    ?>
    
</div>
</main>

<?php get_footer(); ?>
