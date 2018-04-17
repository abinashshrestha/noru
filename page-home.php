<?php
/**
 *
 * Template Name: Home Page
 *
 * @package Noru
 *
 */

get_header();
?>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/images/Now-(FB).jpg' ?>" alt="First slide">
            </div>
        </div>
    </div>

<?php
get_footer();
?>