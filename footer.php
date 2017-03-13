<section id="footer-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12" id="footer-text">
                &copy; Adrienne Levin Coleman
            </div>
        </div>
    </div>
</section>
<?php
wp_footer();
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/parallax.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/html5lightbox/html5lightbox.js"></script>

<audio id="playsound" src="http://yoyomoi.com/wp-content/uploads/2016/06/Pop_Effect_2.mp3"></audio>
<script>
    var html5lightbox_options = {
        watermark: "",
        watermarklink: ""
    };
    windowHeight = 0;
    $(document).ready(function() {
       var audio = document.getElementById('playsound');
        
	$('.play-click-sound a, .playsound').mouseover(function(e){
            e.stopPropagation();
            audio.play();
        });




       

        $('.html5lightbox').click(function(){
            var $this = $(this);
            
            setTimeout(function(){

                $('#html5-text').html($this.attr('data-title'));
                $('#html5-elem-data-box').css('display', 'block');
            },1000);
        });


        function setHeight() {
            windowHeight = $(window).innerHeight();
            $('#banner').css('height', windowHeight);
            $('#services-section').css('height', windowHeight);
            $('#home-contact-section').css('height', windowHeight);
            console.log(windowHeight);
        }

        setHeight();

        var offsetFn = function () {
            return windowHeight;
        }

        function setAffix() {
            var navigation = $('#navigation');
            var heading = $('.welcome-heading');
            navigation.affix({
                offset: {
                    top: offsetFn
                }
            });

            console.log(navigation.offsetTop);
            console.log(heading.offsetTop);

        }

        setAffix();


        $(window).resize(function () {

            setHeight();

            setAffix();
        });


    });



    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: (target.offset().top - 30)
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

</body>
</html>