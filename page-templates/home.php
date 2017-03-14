<?php
// Template Name: Home Page
get_header();
?>


<section id="banner" class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/images/laptop1.jpg">
    <div class="container text-center">
        <h1>Adrienne Levin Coleman</h1>
        <div class="down-arrow">
            <a href="#homepageHeading"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>
    </div>
</section>

<?php require( get_stylesheet_directory() . '/partials/menu.php' ); ?>

<div id="holder">
<section id="welcome">
    <div class="container text-center seven">
        <div class="xxl-spacer"></div>
        <div id="homepageHeading"></div>
       <h1 class="welcome-heading">Welcome to my online portfolio</h1>
        <div class="description">
            <p>As an award-winning writer and producer, I’ve turned memorable
                messages into success stories for advertising and promotion
                clients in St. Louis, San Francisco, Los Angeles and Atlanta.
                I’ve worked at advertising agencies, television and radio stations,
                and on the corporate side, producing campaigns with budgets large
                and small. Scroll down and take a look! </p>
        </div>

        <div id="home-video-holder">
            <a href="https://www.youtube.com/embed/ErpsSglueHo"
               class="html5lightbox"
               data-group="see-spots"
               data-title="">
            <img id="santa
            " src="<?php bloginfo('template_directory'); ?>/images/sizzle.jpg" alt="">
            <!--class="video-thumb"-->
            </a>
        </div>

        <div id="video-lightbox" class="hidden">
            <iframe width="600" height="350" src="https://www.youtube.com/embed/ErpsSglueHo" frameborder="0" allowfullscreen></iframe>
        </div>

        <div id="black-overlay" class="hidden"></div>

    </div>
</section>
    </div>

<div class="xl-spacer"></div>


<section id="services-section" class="full-page-height parallax-window"
         data-parallax="scroll" data-image-src="
         <?php bloginfo('template_directory'); ?>/images/keyboard1.jpg">

    <div class="container text-center">

        <div class="row" id="stars">
            <div class="col-md-4 col-xs-4 text-center img-transform">
                <a href="http://yoyomoi.com/hear-here/" class="playsound">
                <img id="star" src="<?php bloginfo('template_directory'); ?>/images/hearherestar.png" alt="">
                </a>
                <h4>Hear<br>Here</h4>
            </div>
            <div class="col-md-4 col-xs-4 text-center img-transform">
                <a href="http://yoyomoi.com/see-spots/" class="playsound">
                <img id="star" src="<?php bloginfo('template_directory'); ?>/images/seespotsstar.png" alt="">
                </a>
                <h4>See<br>Spots</h4>
            </div>
            <div class="col-md-4 col-xs-4 text-center img-transform">
                <a href="http://yoyomoi.com/other-media/" class="playsound">
                <img id="star" src="<?php bloginfo('template_directory'); ?>/images/othermediastar.png" alt="">
                </a>
                <h4>Other<br>Media</h4>
            </div>
        </div>
    </div>
</section>

<!-- ends services section -->

<div id="home-contact-section" class="contact-section">
    <!--class="full-page-height"-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" id="contact">
                <!--<h2>Contact</h2>-->
                <!--<p>Email: <a href="">yoadrienne@yoyomoi.com</a></p>-->
                <a href="http://yoyomoi.com/contact/" class="playsound contact-form-btn">Contact</a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>