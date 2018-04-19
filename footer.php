<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Noru
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 my-3">
                <img src="<?php echo get_template_directory_uri() . '/images/Noru_Logo.png' ?>" class="img-fluid"
                     alt="Noru Pharma"
                     style="max-width:200px;"
                >
            </div>
            <div class="col-12 col-sm-6 col-lg-3 my-3">
                <h4>About Us</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="text-muted">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="text-muted">Company</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="text-muted">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="text-muted">Home</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 my-3">
                <h4>Brands</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="text-muted">Audisol</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="text-muted">Klear</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="text-muted">Pronail</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="text-muted">Snorel</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="text-muted">Wartfree</a>
                    </li>
                </ul>
            </div>
            <style type="text/css">
                .contact-us-bg {
                    background: url(<?php echo get_template_directory_uri() . '/images/map-2.png' ?>) no-repeat;
                    background-size: contain;
                }
            </style>
            <div class="col-12 col-sm-6 col-lg-3 contact-us-bg my-3">
                <h4>Contact Us</h4>
                <ul class="nav flex-column text-muted">
                    <li class="nav-item">
                        <p>
                            1300 843 784<br>
                            <a href="mailto:info@noru.com.au">info@noru.com.au</a>
                        </p>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <p>Noru Pharma<br>
                           Unit 10, 50 Victoria Road,<br>
                           Drummoyne, NSW 2047,<br>
                           Australia</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
<section class="bg-light py-4">
    <p class="text-muted text-center m-0">
        Copyright 2017 Noru Pharma. All Rights Reserved.
    </p>
</section>
</div><!-- #page -->

<?php wp_enqueue_script('custom-script'); ?>

<?php wp_footer(); ?>

</body>
</html>
