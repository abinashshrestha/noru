<?php
get_header();
?>

    <section id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"
             style="max-height:500px; overflow: hidden;"
    >
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                     src="<?php echo get_template_directory_uri() . '/images/Audisol-Banner.jpg' ?>"
                     alt="First slide">
            </div>
        </div>
    </section>
    <section class="bg-light py-7">
        <div class="container">
            <div class="row align-items-stretch">
<?php
$products = get_posts([
    'post_type' => 'products',
    'meta_query'	=> array(
      'relation'		=> 'AND',
      array(
        'key'		=> 'product_line',
        'value'		=> '"' . $post->ID . '"',
        'compare'	=> 'LIKE'
      ),
      array(
        'key'		=> 'available_regions',
        'value'		=> '"' . $region->ID . '"',
        'compare'	=> 'LIKE'
      ),
    ),
]);
if($products):
    foreach($products as $product):
?>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="text-center py-4 px-4">
                            <?php
                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($product->ID), 'detail-image');
                            if ($image_url){
                                ?>
                                <img src="<?php echo $image_url[0]; ?>"
                                     class="img-fluid" alt="<?php echo $product->post_title;?>">
                            <?php }?>
                            </div>
                            <h4 class="card-title text-primary"><?php echo $product->post_title;?></h4>
                            <?php echo $product->post_content;?>
                        </div>
                        <div class="card-body text-right">
                            <a target="_blank" href="<?php echo get_post_permalink($product->ID);?>" class="card-link">Learn More <span class="ti-arrow-circle-right"></span></a>
                        </div>
                    </div>
                </div>

<?php endforeach; endif;?>
            </div>
        </div>
    </section>
    <section class="py-7">
        <div class="container container-lg">
            <h2 class="title title--left"><?php echo $post->post_excerpt;?></h2>
           <?php echo $post->post_content;?>
        </div>
        <div class="container mt-7">
            <div class="row">
            <?php
$healthIssues = get_posts([
    'post_type' => 'health-issues',
    'meta_query'	=> array(
      'relation'		=> 'AND',
      array(
        'key'		=> 'product_line_association',
        'value'		=> '"' . $post->ID . '"',
        'compare'	=> 'LIKE'
      ),
    ),
]);
if($healthIssues):
    foreach($healthIssues as $healthIssue):
?>


                <div class="col-12 col-md-6 col-lg-4">
                <?php
                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($healthIssue->ID), 'detail-image');
                            if ($image_url){
                                ?>
                    <img class="img-fluid" src="<?php echo $image_url[0];?>"
                         alt="">
                            <?php } ?>
                    <h4 class="title title--left my-4 p-0"><?php echo $healthIssue->post_title;?></h4>
                    <p><?php echo $healthIssue->post_content;?></p>
                </div>

    <?php endforeach; endif; ?>


            </div>
        </div>
    </section>
    <section class="bg-light py-7">
        <div class="container container-lg">
        <?php
$productFeatures = get_posts([
    'post_type' => 'product-features',
    'meta_query'	=> array(
      'relation'		=> 'AND',
      array(
        'key'		=> 'product_line_association',
        'value'		=> '"' . $post->ID . '"',
        'compare'	=> 'LIKE'
      ),
    ),
]);
if($productFeatures):
    foreach($productFeatures as $productFeature):
?>

            <div class="bg-white p-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                    <?php
                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($productFeature->ID), 'feature-square');
                            if ($image_url){
                                ?>
                        <img class="align-self-center img-fluid"
                             src="<?php echo $image_url[0]; ?>"
                             alt="<?php echo $productFeature->post_title?>">
                            <?php }?>
                    </div>
                    <div class="col-12 col-md-6">
                        <h2 class="title title--left mt-3"><?php echo $productFeature->post_title;?></h2>
                        <p><?php echo $productFeature->post_content;?></p>
                    </div>
                </div>
            </div>

    <?php endforeach; endif;?>
        </div>
    </section>

    <section class="bg-light py-4">
        <p class="text-muted text-center m-0">
            Always read the label. Use only as directed.<br>
            If symptoms persist, see your healthcare professional.
        </p>
    </section>
<?php
get_footer();
?>