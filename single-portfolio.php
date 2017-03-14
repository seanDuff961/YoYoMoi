<?php
get_header();

require( get_stylesheet_directory() . '/partials/menu.php' );

if(have_posts()) {
    the_post();

    ?>
    <div class="container text-center seven portfolio-post">
        <h1><?php the_title() ?></h1>
        <?php the_content(); ?>
    </div>
    <?php
}

get_footer();