<?php
/**
 *
 * Template Name: Home Page
 *
 * @package Noru
 *
 */

get_header();
global $region;
?>



  <section id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100"
             src="<?php echo get_template_directory_uri() . '/images/Audisol-Banner.jpg' ?>"
             alt="First slide">
      </div>
    </div>
  </section>
  <section class="bg-light py-7">
    <div class="container container-lg">
      <h1 class="title title--border">Our Brands</h1>
      <article class="row justify-content-center">
      <?php foreach($productLines as $post):?>
        <div class="col-sm-6 col-md-4 mt-5">
          <div class="card">
            <div class="card-body">
              <div class="text-center py-4 px-4">
              <?php
                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'brand-full');
                            if (has_post_thumbnail()){
                                ?>
                <img src="<?php echo $image_url[0]; ?>"
                     class="img-fluid" alt="">
                            <?php }?>
              </div>
              <p class="card-text text-muted"><?php echo strip_tags(text_truncate($post->post_content, 0, 100)); ?></p>
            </div>
            <div class="card-body text-right">
              <a href="<?php echo get_permalink($post->ID);?>" class="card-link">Learn More <span class="ti-arrow-circle-right"></span></a>
            </div>
          </div>
        </div>
                            <?php endforeach;?>
      </article>
    </div>
  </section>
  <?php
$the_slug = 'contact-us';
$args = array(
  'name'        => $the_slug,
  'post_type'   => 'page',
  'post_status' => 'publish',
  'numberposts' => 1
);
$contactUs = get_posts($args)[0];
if( $contactUs ) : ?>
  <section class="container py-7">
    <h1 class="title title--left title--border"><?php echo apply_filters( 'the_title', $contactUs->post_title );?></h1>
    <div class="row mt-7">
      <div class="col-12 col-lg-6">
        <article><?php echo apply_filters( 'the_content', $contactUs->post_content );?></article>
        <div class="row">
          <div class="col-12 col-sm-6 my-4">
            <div class="bg-success px-3 py-4 text-white contact-box">
              <h5>Address:</h5>
              <?php $address = get_post_meta($region->ID, 'address', true);?>
              <p><?php echo $address;?></p>
            </div>
          </div>
          <div class="col-12 col-sm-6 my-4">
            <div class="bg-success px-3 py-4 text-white contact-box">
              <h5>Email:</h5>
              <?php $email = get_post_meta($region->ID, 'email', true);?>
              <p><a class="text-white" href="mailto:<?php echo $email;?>"><?php echo $email;?></a></p>
            </div>
          </div>
        </div>
      </div>
      <?php $map = get_post_meta($region->ID, 'map', true);?>
      <?php if($map):?>
      <div class="col-12 col-lg-6">
      <div id="map" height="490" width="540"></div>
      <script>
      
            function initMap() {
              var myLatLng = {
                lat: parseInt("<?php echo $map['lat']; ?>"),
                 lng: parseInt("<?php echo $map['lng']; ?>")
                 };
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: myLatLng
              });
      
              var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
              });
            }
          </script>
          <style>
                #map {
        height: 100%;
      }
          </style>
          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=<?php echo get_option('google_map_api_key');?>&callback=initMap">
          </script>
      </div>
    <?php endif;?>

    </div>
  </section>

  <?php endif; ?>
  <section class="bg-light py-4">
    <p class="text-muted text-center m-0">
      Always read the label. Use only as directed.<br>
      If symptoms persist, see your healthcare professional.
    </p>
  </section>
<?php
get_footer();
?>