<?php
/**
 *
 * Template Name: Product View Page
 *
 * @package Noru
 *
 */

get_header();
?>
    <style type="text/css">
        .page-banner {
            background-image: url(<?php echo get_template_directory_uri() . '/images/Audisol-Banner.jpg' ?>);
        }
    </style>

    <div class="page-banner">
        <header class="page-banner__content">
            <div class="container py-4 text-white text-uppercase">
                <h3>BE FREE FROM EAR IRRITATION WITH AUDISOL</h3>
            </div>
        </header><!-- .entry-header -->
    </div>
    <section class="bg-light py-7">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-5">
                    <img class="brand-logo"
                         src="<?php echo get_template_directory_uri() . '/images/Audisol-Logo.png' ?>" alt="Audisol">
                    <h4 class="text-uppercase mt-5 title title--border text-dark">Treatment for common ear
                                                                                  complaints</h4>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="card p-3 h-100">
                        <div class="card-body">
                            <div class="text-center py-4 px-4">
                                <img src="<?php echo get_template_directory_uri() . '/images/Audisol_Ear_Cleansing-Spray.png' ?>"
                                     class="img-fluid" alt="">
                            </div>
                            <h4 class="card-title text-primary">Dry Ears</h4>
                            <ul class="px-3 m-0">
                                <li>Pain relief from trapped water.</li>
                                <li>Relief from the symptoms of swimmer’s ear.</li>
                                <li>Quickly dry’s excess moisture</li>
                            </ul>
                        </div>
                        <div class="card-body text-right">
                            <a href="#" class="card-link">Learn More <span class="ti-arrow-circle-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="card p-3 h-100">
                        <div class="card-body">
                            <div class="text-center py-4 px-4">
                                <img src="<?php echo get_template_directory_uri() . '/images/Audisol_Ear_Cleansing-Spray.png' ?>"
                                     class="img-fluid" alt="">
                            </div>
                            <h4 class="card-title text-primary">Cleansing Spray</h4>
                            <ul class="px-3 m-0">
                                <li>Gently free ears from wax.</li>
                                <li>Natural, non-medicated relief.</li>
                                <li>Suitable for children 6years+</li>
                            </ul>
                        </div>
                        <div class="card-body text-right">
                            <a href="#" class="card-link">Learn More <span class="ti-arrow-circle-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="card p-3 h-100">
                        <div class="card-body">
                            <div class="text-center py-4 px-4">
                                <img src="<?php echo get_template_directory_uri() . '/images/Audisol_Ear_Cleansing-Spray.png' ?>"
                                     class="img-fluid" alt="">
                            </div>
                            <h4 class="card-title text-primary">Ear Wax Remover</h4>
                            <ul class="px-3 m-0">
                                <li>Dissolves Ear Wax</li>
                                <li>Spray designed for maximum dispersal</li>
                                <li>Suitable for children 2years+</li>
                            </ul>
                        </div>
                        <div class="card-body text-right">
                            <a href="#" class="card-link">Learn More <span class="ti-arrow-circle-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-7">
        <div class="container container-lg">
            <h2 class="title title--left">What is ear wax?</h2>
            <p>Ear wax or cerumen is a normal secretion of the glands in the ear. However excessive ear wax may cause a
               number of unwanted effects including hearing loss, discomfort, pain and coughing.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mt-7">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/hearing-loss.jpg' ?>"
                         alt="">
                    <h4 class="title title--left my-4 p-0">Hearing Loss</h4>
                    <p>Hearing loss occurs when accumulated wax occludes (blocks) the ear canal, reducing or preventing
                       sound waves from easily reaching the eardrum.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-7">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/ear-pain.jpg' ?>"
                         alt="">
                    <h4 class="title title--left my-4 p-0">Ear Pain</h4>
                    <p>Discomfort or pain may be evident in cases where compressed wax pressures the ear drum.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-7">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/coughing.jpg' ?>"
                         alt="">
                    <h4 class="title title--left my-4 p-0">Coughing</h4>
                    <p>Coughing may occur in cases where the impacted wax stimulates nerves shared both by the ear canal
                       and throat, provoking a tickle in the throat which may lead to cough.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-7">
        <div class="container container-lg">
            <div class="bg-white p-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img class="align-self-center img-fluid"
                             src="<?php echo get_template_directory_uri() . '/images/audisol-range.png' ?>"
                             alt="Generic placeholder image">
                    </div>
                    <div class="col-12 col-md-6">
                        <h2 class="title title--left mt-3">How can the Audisol range of products help?</h2>
                        <p>Each one of our ear care products can help you to gain fast effective relief from symptoms
                           associated with excessive ear wax build up and help to maintain healthy ears leaving you free
                           from pain and discomfort.</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-5 mt-5">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-12 col-md-6">
                        <h2 class="title title--left mt-3">Causes of Ear Wax Production</h2>
                        <ul class="px-3 m-0">

                            <li>You just have more wax in your ears (some people naturally do)</li>
                            <li>You have hairy or narrow canals (the tubes that link the eardrum and outer ear)</li>
                            <li>Age - wax gets harder and more difficult to fall out naturally</li>
                            <li>Wearing hearing aids, earplugs and other things you put in your ear – These can lead to
                                excessive production of ear wax and push the wax further into the ear making it
                                difficult for it to fall out naturally.
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center col-12 col-md-6 bg-primary p-4">
                        <div class="text-center">
                            <img class="align-self-center img-fluid"
                                 src="<?php echo get_template_directory_uri() . '/images/cotton-buds.png' ?>"
                                 alt="Generic placeholder image">
                            <h5 class="text-white mt-5 text-left">Avoid putting small objects such as cotton buds into your ears, this will
                                                        push the wax
                                                        further into the ear and can cause blockages known as plugs which can
                                                        lead to painful and
                                                        possibly infected ears. </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-4">
        <p class="text-muted text-center m-0">
            Always read the label. Use only as directed.<br>
            If symptoms persist, see your healthcare professional.
        </p>
    </section>
    <section class="other-brand bg-dark py-7">
        <div class="container">
            <div class="d-flex align-items-stretch row no-gutters ">
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/klear_small.jpg' ?>"
                         alt="Klear">
                </div>
                <div class="d-flex col-12 col-md-6 bg-white">
                    <div class="p-4 align-self-center">
                        <h4 class="text-uppercase title title--left">Be Klear from your cold &amp; allergy symptoms</h4>
                        <a href="#" class="btn btn-success">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>