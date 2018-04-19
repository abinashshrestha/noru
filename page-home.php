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
                <div class="col-sm-6 col-md-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center py-4 px-4">
                                <img src="<?php echo get_template_directory_uri() . '/images/Audisol.png' ?>"
                                     class="img-fluid" alt="">
                            </div>
                            <p class="card-text text-muted">Some quick example text to build on the card title and make
                                                            up
                                                            the bulk of the card's content.</p>
                        </div>
                        <div class="card-body text-right">
                            <a href="#" class="card-link">Learn More <span class="ti-arrow-circle-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center py-4 px-4">
                                <img src="<?php echo get_template_directory_uri() . '/images/Klear.png' ?>"
                                     class="img-fluid" alt="">
                            </div>
                            <p class="card-text text-muted">Some quick example text to build on the card title and make
                                                            up
                                                            the bulk of
                                                            the
                                                            card's content.</p>
                        </div>
                        <div class="card-body text-right">
                            <a href="#" class="card-link">Learn More <span class="ti-arrow-circle-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center py-4 px-4">
                                <img src="<?php echo get_template_directory_uri() . '/images/Wartfree.png' ?>"
                                     class="img-fluid" alt="">
                            </div>
                            <p class="card-text text-muted">Some quick example text to build on the card title and make
                                                            up
                                                            the bulk of
                                                            the
                                                            card's content.</p>
                        </div>
                        <div class="card-body text-right">
                            <a href="#" class="card-link">Learn More <span class="ti-arrow-circle-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center py-4 px-4">
                                <img src="<?php echo get_template_directory_uri() . '/images/Snorel.png' ?>"
                                     class="img-fluid" alt="">
                            </div>
                            <p class="card-text text-muted">Some quick example text to build on the card title and make
                                                            up
                                                            the bulk of
                                                            the
                                                            card's content.</p>
                        </div>
                        <div class="card-body text-right">
                            <a href="#" class="card-link">Learn More <span class="ti-arrow-circle-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center py-4 px-4">
                                <img src="<?php echo get_template_directory_uri() . '/images/Pronail.png' ?>"
                                     class="img-fluid" alt="">
                            </div>
                            <p class="card-text text-muted">Some quick example text to build on the card title and make
                                                            up
                                                            the bulk of
                                                            the
                                                            card's content.</p>
                        </div>
                        <div class="card-body text-right">
                            <a href="#" class="card-link">Learn More <span class="ti-arrow-circle-right"></span></a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section class="container py-7">
        <h1 class="title title--left title--border">Contact Us</h1>
        <div class="row mt-7">
            <div class="col-12 col-lg-6">
                <article>
                    <h6>Have A Question?</h6>
                    <p>Simply complete our form and we will get back to you as soon as possible.</p>

                    <h6 class="mt-4">Are you interested in becoming a business partner with Noru Pharma?</h6>
                    <p>We are always keen to work with strategic partners around the world. Whether you are a supplier
                       of
                       new products, a healthcare wholesaler, local market distributor or a retailer fill in the details
                       on
                       this page or call to speak to a member of the Noru team.</p>
                </article>
                <div class="row">
                    <div class="col-12 col-sm-6 my-4">
                        <div class="bg-success px-3 py-4 text-white contact-box">
                            <h5>Address:</h5>
                            <p>Noru Pharma<br>
                               Unit 10, 50 Victoria Road<br>
                               Drummoyne, NSW 2047<br>
                               Australia
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 my-4">
                        <div class="bg-success px-3 py-4 text-white contact-box">
                            <h5>Email:</h5>
                            <p><a class="text-white" href="mailto:info@noru.com.au">info@noru.com.au</a><br>
                                <a class="text-white" href="http://www.noru.com.au">www.noru.com.au</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img src="<?php echo get_template_directory_uri() . '/images/map.jpg' ?>" alt="" class="img-fluid">
            </div>
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