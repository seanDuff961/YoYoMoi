<?php
// Template Name: Hear Here
get_header();
?>

    <style>
        #banner {
            height: 500px;
        }

        #holder {
            height: 1000px;
        }
    </style>

    <section id="banner" class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/images/soundboard.jpg">
        <div class="container text-center">
            <h1>Hear Here</h1>
        </div>
    </section>

   <!-- <section class="parallax-window inner-page-large-image" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/images/soundboard.jpg">
        <div class="container text-center">
            <h1 id="hear-hear-h1">Hear Here</h1>
        </div>
    </section>-->

    <?php require( get_stylesheet_directory() . '/partials/menu.php' ); ?>
    <div class="clearfix"></div>

    <section id="hear-here-section">
        <div class="container text-center">
            <div class="row">

                <div class="col-md-4 col-xs-4 text-center img-transform">
                    <a href="https://www.youtube.com/embed/BCeJOmqZONQ"
                       class="playsound html5lightbox"

                       data-title="I was honored to be part of the team that helped make 'Home Improvement'
                    one of the most successful launches in syndication.  Disney's Buena Vista Television hired
                    me to write and produce the radio image campaign and 'theme week'
                    spots, distributed nationwide.">
                    <img src="<?php bloginfo('template_directory'); ?>/images/homeimprovement.png" alt="">
                    </a>
                </div>

                <div class="col-md-4 col-xs-4 text-center img-transform">
                    <a href="https://www.youtube.com/embed/f0tgtxWTmPc"
                       class="playsound html5lightbox"

                       data-title="Here's a selection of radio commercials I wrote and produced for the Creative Services departments at KMOV-TV
                    in St. Louis and KPIX-TV in San Francisco.">
                        <img src="<?php bloginfo('template_directory'); ?>/images/radiofortv.png" alt="">
                    </a>
                </div>

                <div class="col-md-4 col-xs-4 text-center img-transform">
                    <a href="https://www.youtube.com/embed/7Aj3TiYDuJo"
                       class="playsound html5lightbox"

                       data-title="I wrote the first spot you'll hear here in about 10 minutes, driving back from the client meeting!
                       That award-winning commercial kicks off this series of spots I created as an ad agency
                       senior writer/producer.">
                    <img src="<?php bloginfo('template_directory'); ?>/images/adagencyclients.png" alt="">
                    </a>
                </div>

                <!--<div class="col-md-4 col-xs-4 text-center img-transform">
                    <a href="https://www.youtube.com/embed/7Aj3TiYDuJo"
                       class="playsound html5lightbox"
                       data-group="radio-spots"
                       title="I wrote the first spot you'll hear here in about 10 minutes, driving back from the client meeting!
                       That award-winning commercial kicks off this series of spots I created as an ad agency
                       senior writer/producer.">
                        <img src="<?php bloginfo('template_directory'); ?>/images/adagencyclients.png" alt="">
                    </a>
                </div>-->

            </div>
        </div>
    </section>
    <!-- ends hear here section -->

    <div id="video-lightbox1" class="hidden">
        <iframe id="home-improvement-lightbox" width="420" height="315" src="https://www.youtube.com/embed/BCeJOmqZONQ" frameborder="0" allowfullscreen></iframe>
        <p id="home-improvement-lightbox-paragraph">I was honored to be part of the team that helped make "Home Improvement"
            one of the most successful launches in syndication.  Disney's Buena Vista Television hired
            me to write and produce the radio image campaign and "theme week"
            spots, distributed nationwide.
        </p>
    </div>

    <div id="video-lightbox2" class="hidden">
        <iframe id="home-improvement-lightbox" width="420" height="315" src="https://www.youtube.com/embed/f0tgtxWTmPc" frameborder="0" allowfullscreen></iframe>
        <p id="home-improvement-lightbox-paragraph">Here's a selection of radio commercials I wrote and produced for the Creative Services departments at KMOV-TV
            in St. Louis and KPIX-TV in San Francisco.
        </p>
    </div>

    <div id="video-lightbox3" class="hidden">
        <iframe id="home-improvement-lightbox" width="420" height="315" src="https://www.youtube.com/embed/7Aj3TiYDuJo" frameborder="0" allowfullscreen></iframe>
        <p id="home-improvement-lightbox-paragraph">The first spot you'll hear here -- I wrote it in about 10 minutes -- on the highway, driving back from the client meeting!
            That award-winning commercial kicks off this series of spots I created as an ad agency senior writer/producer.
        </p>
    </div>

    <div id="black-overlay1" class="hidden"></div>

<?php
get_footer();
?>