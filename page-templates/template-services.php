<?php
/**
 * Template Name: Services
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<section class="inner-banner style-8"
    style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/service-banner-img-1.png); background-size: cover; background-position: bottom center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <div class="left-box">
                        <h2 class="title">We Make Sourcing Simple.</h2>
                        <div class="content">
                            <p>Companies and candidates can trust and rely on us to source or find precisely what they
                                need. Our seasoned professional staff has both hands-on experience in a wide variety of
                                fields and an array of networking connections to help find the right fit for every
                                applicant. </p>
                        </div>
                        <div class="buttons">
                            <ul>
                                <li><a href="#" class="btn btn-blue">Recruiting</a></li>
                                <li><a href="#" class="btn btn-green">Accounting & Finance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/service-banner-img-2.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="two-col-text-with-img img-left">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <div class="left-col">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/laptop.jpg" alt="">
                        </div>
                    </div>
                    <div class="right-col">
                        <div class="content">
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-search.png"
                                    alt="Search">
                            </div>
                            <h3 class="title">Cura Search</h3>
                            <div class="text">
                                <p>Specialized industries need highly-qualified recruiters in their ranks! So whether
                                    you’re seeking a position in healthcare, life sciences, or technology or looking for
                                    your next staff member, our platform will highlight the best options available for
                                    YOU. </p>
                            </div>
                            <a href="#" class="link">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="two-col-text-with-img img-right" style="padding-top:0; padding-bottom: 0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <div class="left-col">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/meeting.jpg" alt="">
                        </div>
                    </div>
                    <div class="right-col">
                        <div class="content">
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-accounting.png"
                                    alt="Search">
                            </div>
                            <h3 class="title">Cura Accounting & Finance</h3>
                            <div class="text">
                                <p>Review our listings of available accounting and finance positions or applicant
                                    listings within various industries in and around Las Vegas, Nevada. We work directly
                                    with companies and their Hiring Managers to ensure we place the right candidate in
                                    the correct positions!</p>
                            </div>
                            <a href="#" class="link">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="setp-section" style="padding-bottom: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="steps">
                    <ul>
                        <li>
                            <span class="qty">80%</span>
                            <div class="step-text"><span>Fill<br>Rate</span></div>
                        </li>
                        <li>
                            <span class="qty">100S</span>
                            <div class="step-text"><span>Positions to choose from</span></div>
                        </li>
                        <li>
                            <span class="qty">24</span>
                            <div class="step-text"><span>Hour<br>turn around</span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact contact-style-2"
    style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/contect-bg2.png); background-size: cover; background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <div>
                        <h2 class="title">Unsure or Have Questions?</h2>
                        <div class="button-container">
                            <a href="#" class="btn btn-contact">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faqs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <div class="content-box">
                    <h2 class="title">Let Cura help you achieve your goal.</h2>
                    <div class="btn-container">
                        <ul>
                            <li><a href="#" class="btn btn-blue-green">CONTACT US</a></li>
                            <li><a href="#" class="btn btn-find-job">Find A Job</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="faq-box">
                    <h3 class="faq-title">FAQ’s</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Are Cura services free for the candidates?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes! There is no cost for partnering with Cura to find your new career!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Why work with Cura?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>All of Cura’s reps have proven successful billings in the sectors they serve.
                                        Basically, the Cura reps were once precisely like yourself!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do I get in contact with a Cura rep?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>You can sign up through www.curarecruiting.com, or you can apply directly to a
                                        position on the jobs page.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    What does Cura specialize in?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Cura Search specializes in finding and placing talent within the Healthcare,
                                        Tech, and Life Science staffing industries. Cura Accounting & Finance
                                        specializes in finding and placing talent within the Accounting & Finance
                                        industry within the city of Las Vegas.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    How long will it take to hear from a Cura rep?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>It could take up to 24 hours but is typically within a couple of minutes.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    Can I ask questions without engaging with a Cura rep?
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Of course. Cura’s mission is to better educate the staffing industry on how
                                        changing positions would work. We do not “push” our candidates to do anything
                                        they are not comfortable with.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php
get_footer();