<?php
// Template Name: See Spots
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

    <section id="banner" class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/images/videocamera.jpg">
        <div class="container text-center">
            <h1>See Spots Run</h1>
        </div>
    </section>

    <?php require( get_stylesheet_directory() . '/partials/menu.php' );?>

    <section id="hear-here-section">
        <div class="container text-center">
            <div class="row row-one">

                <div class="col-md-4 col-xs-4 text-center img-transform">
                    <a href="https://www.youtube.com/embed/D01oEitzHSM"
                       class="playsound html5lightbox"

                        data-title="Recently enjoyed a unique opportunity at WSB-TV in Atlanta, creating commercials for clients and video projects for the sales department. Smaller budgets,
            but we took that challenge and ran with it...">
                        <img src="<?php bloginfo('template_directory'); ?>/images/screaming.png" alt="">
                     </a>
                </div>

                <div class="col-md-4 col-xs-4 text-center img-transform">
                    <a href="https://www.youtube.com/embed/X-Q8BZ4VinA"
                       class="playsound html5lightbox"

                         data-title="One of my “success stories” took place at Gateway Apparel,
            a chain of more than 200 clothing stores in 50 markets.
            I wrote and produced their first image campaign, which,
            in turn, produced the biggest single sale event  in the
            company's history.  Also here: A sampling of work for
            agency TBWA, and just one of many Gateway Apparel sale
            event spots I created.">
                        <img src="<?php bloginfo('template_directory'); ?>/images/marisa.png" alt="">
                        </a>
                </div>

                <div class="col-md-4 col-xs-4 text-center img-transform">
                    <a href="https://www.youtube.com/embed/RxEMVKLuif0"
                       class="playsound html5lightbox"

                       data-title="Before he landed at Fox Sports, Joe Buck joined
            KMOV-TV’s sports team. We wanted to showcase his
            incredible access to the Cardinals Clubhouse, so I
            took him to Busch Stadium, where everyone from Manager
            Joe Torre to third base favorite Todd Zeile got in on
            the act!">
                     <img src="<?php bloginfo('template_directory'); ?>/images/fredandjoe.png" alt="">
                    </a>
                </div>
            </div>

            <div class="row row-two">

                <div class="col-md-4 col-xs-4 text-center img-transform">
                    <a href="https://www.youtube.com/embed/Zh5dbG-YiMY"
                       class="playsound html5lightbox"

                       data-title="As a Creative Services senior
            writer/producer, my experience covers everything from
            station image and launch campaigns to nightly news
            topicals... from :04 station ID’s to long-format sales
            department presentations.  Here are a few samples of my
            work--concluding with a clip from a KGO-TV/San Francisco
            sales department piece featuring Ben Stein, reprising his
            role from Ferris Bueller’s Day Off.">
                    <img src="<?php bloginfo('template_directory'); ?>/images/benstein.png" alt="">
                    </a>

                </div>

                <div class="col-md-4 col-xs-4 text-center img-transform">
                    <a href="https://www.youtube.com/embed/3AgC97K5GbA"
                       class="playsound html5lightbox"

                       data-title="J.C. Corcoran was a rather notorious St. Louis radio
            personality.  Frequently fired, the controversy he
            created found him off the air on a regular basis...  
            During one such hiatus, KMOV-TV hired J.C. to do
            entertainment reports.  J.C. and I had fun inventing
            a tease campaign trumpeting his Channel 4 debut, and
            “explaining” his absence from the airwaves!   Here
            are a handful from that collection...">
                    <img src="<?php bloginfo('template_directory'); ?>/images/jc.png" alt="">
                    </a>
                </div>

                <div class="col-md-4 col-xs-4 text-center img-transform">
                    <a href="https://www.youtube.com/embed/r-LjwdMXMNA"
                       class="playsound html5lightbox"
                       
                       data-title="When a monster flood struck
            the St. Louis area, it was national news for weeks.  
            A viewer approached KMOV with a song he wrote, and we
            asked one of our news anchors to record it with him. 
            I married that song with news footage to create this
            video, which raised more than $50,000 for the Red Cross.">
                    <img src="<?php bloginfo('template_directory'); ?>/images/neighbortoneighbor.png" alt="">
                    </a>
                </div>

                <!--<div class="col-md-4 col-xs-4 text-center img-transform">
                    <a href="https://www.youtube.com/embed/r-LjwdMXMNA"
                       class="playsound html5lightbox"
                       data-group="see-spots"
                       data-title="When a monster flood struck
            the St. Louis area, it was national news for weeks.  
            A viewer approached KMOV with a song he wrote, and we
            asked one of our news anchors to record it with him. 
            I married that song with news footage to create this
            video, which raised more than $50,000 for the Red Cross.">
                        <img src="<?php bloginfo('template_directory'); ?>/images/neighbortoneighbor.png" alt="">
                    </a>
                </div>-->

            </div>
        </div>
    </section>
    <!-- ends hear here section -->

    <div id="video-lightbox4" class="hidden">
        <iframe id="screaming-lightbox" width="420" height="315" src="https://www.youtube.com/embed/Zh5dbG-YiMY" frameborder="0" allowfullscreen></iframe>
        <p id="lightbox-paragraph-2">As a Creative Services senior
            writer/producer, my experience covers everything from
            station image and launch campaigns to nightly news
            topicals... from :04 station ID’s to long-format sales
            department presentations.  Here are a few samples of my
            work--concluding with a clip from a KGO-TV/San Francisco
            sales department piece featuring Ben Stein, reprising his
            role from Ferris Bueller’s Day Off.
        </p>
    </div>

    <div id="video-lightbox5" class="hidden">
        <iframe id="screaming-lightbox" width="420" height="315" src="https://www.youtube.com/embed/3AgC97K5GbA" frameborder="0" allowfullscreen></iframe>
        <p id="lightbox-paragraph-2">J.C. Corcoran was a rather notorious St. Louis radio
            personality.  Frequently fired, the controversy he
            created found him off the air on a regular basis...  
            During one such hiatus, KMOV-TV hired J.C. to do
            entertainment reports.  J.C. and I had fun inventing
            a tease campaign trumpeting his Channel 4 debut, and
            “explaining” his absence from the airwaves!   Here
            are a handful from that collection...
        </p>
    </div>

    <div id="video-lightbox6" class="hidden">
        <iframe id="screaming-lightbox" width="420" height="315" src="https://www.youtube.com/embed/r-LjwdMXMNA" frameborder="0" allowfullscreen></iframe>
        <p id="lightbox-paragraph-2">When a monster flood struck
            the St. Louis area, it was national news for weeks.  
            A viewer approached KMOV with a song he wrote, and we
            asked one of our news anchors to record it with him. 
            I married that song with news footage to create this
            video, which raised more than $50,000 for the Red Cross. 
        </p>
    </div>

    <div id="black-overlay1" class="hidden"></div>

<?php
get_footer();
?>