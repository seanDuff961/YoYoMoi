<?php
// Template Name: Other Media
get_header();
?>



    <section id="banner" class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/images/laptop5.jpg">
        <div class="container text-center">
            <h1>Other Media</h1>
        </div>
    </section>
<?php
require( get_stylesheet_directory() . '/partials/menu.php' );
?>

   


    <section id="hear-here-section">
        <div class="container text-center">
            <div class="row row-one">
                <?php
                $the_query = new WP_Query( array(
                    'post_type' => 'portfolio',
                    'tax_query' => array(
                        'taxonomy' => 'portfolio',
                        'field' => 'slug',
                        'terms' => 'other-media',
                    ),
                ) );
                $count = 1;

                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    ?>
                    <!--
                    <div class="col-md-4 col-xs-4 text-center img-transform playsound portfolio-item"
                         id="other-media-margin">
                        <a href="<?php echo get_permalink() ?>">
                            <?php the_post_thumbnail();?>
                    </div>
                    -->
                    
                    <div class="col-md-4 col-xs-4 text-center img-transform play-click-sound portfolio-item"
                         id="other-media-margin">
                        <a href="<?php echo get_permalink() ?>">
                            <?php the_post_thumbnail();?>
                    </div>
                    
                    <?php

                    if($count == 3) {
                        echo '</div><div class="row row-one">';
                        $count = 0;
                    }
                    $count++;
                endwhile;


                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <!-- ends hear here section -->

    <div id="video-lightbox1" class="hidden">
        <iframe width="100%" height="350px" src="https://www.youtube.com/embed/IAgbZyIaWNk" frameborder="0" allowfullscreen></iframe>
        <p>Caption One</p>
    </div>

    <div id="video-lightbox2" class="hidden">
        <iframe width="100%" height="350px" src="https://www.youtube.com/embed/IAgbZyIaWNk" frameborder="0" allowfullscreen></iframe>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </p>
    </div>

    <div id="video-lightbox3" class="hidden">
        <iframe width="100%" height="350px" src="https://www.youtube.com/embed/IAgbZyIaWNk" frameborder="0" allowfullscreen></iframe>
        <p>Caption Three</p>
    </div>

    <div id="video-lightbox4" class="hidden">
        <iframe width="100%" height="350px" src="https://www.youtube.com/embed/IAgbZyIaWNk" frameborder="0" allowfullscreen></iframe>
        <p>Caption One</p>
    </div>

    <div id="video-lightbox5" class="hidden">
        <iframe width="100%" height="350px" src="https://www.youtube.com/embed/IAgbZyIaWNk" frameborder="0" allowfullscreen></iframe>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </p>
    </div>

    <div id="video-lightbox6" class="hidden">
        <iframe width="100%" height="350px" src="https://www.youtube.com/embed/IAgbZyIaWNk" frameborder="0" allowfullscreen></iframe>
        <p>Caption Three</p>
    </div>

    <div id="black-overlay1" class="hidden"></div>

<?php
get_footer();
?>