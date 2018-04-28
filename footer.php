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
global $region, $productLines;
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
                <?php
                        //arg[0] = MENU NAME
                        //arg[1] = UL CLASS
                        //arg[2] = SUB MENU UL CLASS
                        //arg[3] = APPEND ELEMENT TO PARENT
                        get_menu('Footer Menu', 'nav flex-column', ['nav-item'], '');
                        ?>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 my-3">
                <h4>Brands</h4>
                <ul class="nav flex-column">
                <?php foreach($productLines as $productLine):?>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink($productLine->ID);?>" class="text-muted"><?php echo $productLine->post_title;?></a>
                    </li>
<?php endforeach;?>
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
                        <?php $address = get_post_meta($region->ID, 'address', true);?>
                        <?php $email = get_post_meta($region->ID, 'email', true);?>
                        <?php $phoneNumber = get_post_meta($region->ID, 'phone_number', true);?>
                        <?php echo $phoneNumber;?><br>
                            <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
                        </p>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <p><?php echo $address;?></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
<section class="bg-light py-4">
    <p class="text-muted text-center m-0">
        Copyright <?php echo date('Y');?> Noru Pharma. All Rights Reserved.
    </p>
</section>
</div><!-- #page -->

<?php wp_enqueue_script('custom-script'); ?>

<?php wp_footer(); ?>

</body>
</html>
