<?php
/**
 *
 * Template Name: Content Page
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

                <div class="container mt-5">
                    <?php noru_post_thumbnail(); ?>

                    <div class="entry-content">
                        <?php
                        the_content();

                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'noru'),
                            'after' => '</div>',
                        ));
                        ?>
                    </div><!-- .entry-content -->

                    <?php if (get_edit_post_link()) : ?>
                        <footer class="entry-footer">
                            <?php
                            edit_post_link(
                                sprintf(
                                    wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                        __('Edit <span class="screen-reader-text">%s</span>', 'noru'),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    get_the_title()
                                ),
                                '<span class="edit-link">',
                                '</span>'
                            );
                            ?>
                        </footer><!-- .entry-footer -->
                    <?php endif; ?>
            </article><!-- #post-<?php the_ID();

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->

    </div><!-- #primary -->

<?php
get_footer();
?>