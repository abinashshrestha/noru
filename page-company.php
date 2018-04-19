<?php
/**
 *
 * Template Name: About Page
 *
 * @package Noru
 *
 */

get_header();
?>
    <style type="text/css">
        .page-bg {
            background: #333 url(<?php echo get_template_directory_uri() . '/images/Noru-Banner-2.jpg' ?>) no-repeat;
            width: 100%;
            height: auto;
            min-height: 400px;
            position: relative;
        }

        .page-bg > header {
            bottom: 0;
            position: absolute;
            width: 100%;
        }


    </style>

    <div id="primary" class="mb-5">
    <main id="main" class="site-main">

<?php
while (have_posts()) :
    the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="page-bg">
            <header>
                <div class="container py-4 text-white">
                    <?php the_title('<h1>', '</h1>'); ?>
                </div>
            </header><!-- .entry-header -->
        </div>

        <div class="container my-7">
            <div class="row d-flex flex-column-reverse flex-md-row">
                <div class="col-12 col-md-7">
                    <h2>Live Better</h2>
                    <p>We are passionate about developing and delivering, innovative, effective and affordable products
                       that
                       help you to take care of the small problems, that lead to the bigger problems.</p>
                    <p>Our focus is on therapeutic categories, that aren’t currently served well – Our range of products
                       are
                       available through pharmacies and supermarkets in many countries, meaning that our range is easily
                       accessible and convenient for you to use when you need it.</p>
                </div>
                <div class="col-12 col-md-5 text-center">
                    <img src="<?php echo get_template_directory_uri() . '/images/Noru_Logo-favicon.png' ?>"
                         class="img-fluid" alt="Noru Pharma">
                </div>
            </div>
            <div class="row my-7 py-7">
                <div class="col-12 col-md-4 text-muted">
                    <div class="mb-5" style="width:70px; height: 70px; background: green"></div>
                    <h3 class="title title--left title--border">Innovation</h3>
                    <p class="mt-4">We believe in researching and developing innovative products within our focus categories so you
                       can maintain your health more easily.</p>
                    <p>If you have an innovative product or brand then we would love to talk to you so please contact
                       us.</p>
                </div>
                <div class="col-12 col-md-4 text-muted">
                    <div class="mb-5" style="width:70px; height: 70px; background: green"></div>
                    <h3 class="title title--left title--border">Partnerships</h3>
                    <p class="mt-4">Noru Pharma currently operates in the UK, Hong Kong, Singapore, Australia and New Zealand.</p>
                    <p>If you require any further information about these markets or to become one of our preferred
                       global partners in your country please contact the team.</p>
                </div>
                <div class="col-12 col-md-4 text-muted">
                    <div class="mb-5" style="width:70px; height: 70px; background: green"></div>
                    <h3 class="title title--left title--border">Innovation</h3>
                    <p class="mt-4">We work with leading pharmacy chains to ensure that availability of our products to you at an
                       affordable price. </p>
                    <p>For information or to become one of our preferred wholesalers or retailers contact us.</p>
                </div>
            </div>
        </div>
    </article>

    </main><!-- #main -->

    </div><!-- #primary -->
    <!-- #post-<?php the_ID();

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;

endwhile; // End of the loop.
?>

    <?php
get_footer();
?>