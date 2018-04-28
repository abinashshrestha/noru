<?php
/**
 *
 * Template Name: About Page
 *
 * @package Noru
 *
 */

get_header();
global $region;
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
<?php echo $post->post_content;?>
                </div>
                <div class="col-12 col-md-5 text-center">
                <?php
                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'detail-image');
                            if (has_post_thumbnail()){
                                ?>
                    <img src="<?php echo $image_url[0]; ?>"
                         class="img-fluid" alt="<?php echo $post->post_title;?>">
                            <?php } ?>
                </div>
            </div>
            <div class="row my-7 py-7">

                <?php
                    $companyGoals = get_posts([
                        'post_type' => 'company-goals'
                    ]);
                    if($companyGoals):
                        foreach($companyGoals as $companyGoal):
                ?>
                <div class="col-12 col-md-4 text-muted">
                    <div class="mb-5" style="width:70px; height: 70px; background: green"></div>
                    <h3 class="title title--left title--border"><?php echo $companyGoal->post_title;?></h3>
                    <p class="mt-4">
                      <?php echo $companyGoal->post_content;?>
                    </p>
                </div>
                        <?php endforeach; endif;?>
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