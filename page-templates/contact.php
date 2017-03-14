<?php
// Template Name: Contact
get_header();
require( get_stylesheet_directory() . '/partials/menu.php' );
?>


<div class="container container-margin">
    <h1 class="contact-header"><?php the_title() ?></h1>
<?php
echo do_shortcode('[vfb id="1"]');
?>


</div>

<?php
get_footer();
?>
