<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Noru
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700|Poppins:600,700" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header class="container fixed-top" style="top: 20px;">
        <nav class="navbar navbar-light navbar-expand-lg bg-light justify-content-between"
             style="border-radius:.5rem; background-color: rgba(255, 255, 255, .8) !important;"
        >
            <a class="navbar-brand h1 m-0 mr-auto" href="#">
                <img class="d-inline-block align-middle mr-2" src="<?php echo get_template_directory_uri() . '/images/Noru_Logo-favicon.png' ?>"
                     style="height: 50px; width: auto; max-width: 100%;" class="d-inline-block align-top" alt="">
                Noru Pharma
            </a>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => 'div',
                'container_class' => '',
                'container_id' => 'bs-example-navbar-collapse-1',
                'menu_class' => 'navbar-nav',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker()
            ));
            ?>
        </nav>
    </header>
    <?php
    global $region;
    $siteUrl =  get_site_url();
// Get region using the domain
$region = get_posts([
  'post_type' => 'regions',
  'meta_key' => 'domain_name',
  'meta_value' => $siteUrl
])[0];
?>
    <div id="content" class="site-content">
