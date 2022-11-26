<?php
/**
 * Template Name: Career
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
<section class="inner-banner style-2"
    style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/career-banner-bg.jpg); background-size: cover; background-position: bottom center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <div class="content-box">
                        <span class="pre-title">Discover Your</span>
                        <h2 class="title">DREAM JOB</h2>
                        <div class="content">
                            <p>There are many facets to the Staffing Industry. Regardless of your experience level and
                                focus Cura Recruiting will help you find the sweet spot to call home.</p>
                        </div>
                        <div class="button-container">
                            <a href="#" class="btn btn-blue-fill">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-content">
                    <h2 class="title">A Step Above</h2>
                    <div class="content">
                        <p>You won’t get lost in the sea of candidates when you work with our team. Our method ensures
                            timely responses, active participation with a real expert in your field, and complimentary
                            education and guidance on tough topics like negotiating compensation packages. We serve as
                            the connection point between specialized staffing organizations and ideal candidates!</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="tow-box">
                    <div class="left-box">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/buiding-bg2.jpg" alt="">
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="steps">
                            <ul>
                                <li>
                                    <span class="qty">100%</span>
                                    <div class="step-text"><span>Customer satisfaction</span></div>
                                </li>
                                <li>
                                    <span class="qty">100S</span>
                                    <div class="step-text"><span>Positions to choose from</span></div>
                                </li>
                                <li>
                                    <span class="qty">50</span>
                                    <div class="step-text"><span>States we service</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="candidates-testimonials">
                            <h2 class="title">What <span>Cura Candidates</span> Have To Say -</h2>
                            <div class="testimonial">
                                <div class="item">
                                    <div class="author-img">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/images/author.png"
                                            alt="author">
                                    </div>
                                    <div class="content">
                                        <h3 class="author-info">Antonio, Recruiter</h3>
                                        <div class="text">
                                            <p>I had an incredible experience with Cura they set me up with several
                                                interviews that lead to offers. Cam does a great job of knowing the
                                                market and has a lot of information about the companies he partners
                                                with. It was awesome that within our first call Cam was able to consult
                                                with me on what opportunities would be a good fit for me and found me an
                                                amazing opportunity with a strong career path.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="bottom-text">
                    <div class="watermark">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/images/WER-NATIONAL.png" alt="">
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
                <div class="content-box">
                    <h2 class="title">Let <span>Cura</span> help you achieve your goal.</h2>
                    <div class="btn-container">
                        <ul>
                            <li><a href="#" class="btn btn-blue-green">CONTACT US</a></li>
                            <li><a href="#" class="btn btn-find-job">Find A Job</a></li>
                        </ul>
                    </div>
                </div>
                <div class="faq-box">
                    <h3 class="faq-title">FAQ’s</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How do I apply?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>You can apply directly on this website on the jobs page!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    I’m looking to relocate, which states do you operate in?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Cura Search is a national business and operates in all 50 states within the USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do you negotiate for compensation packages?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our reps can best guide you based on your plans or goals and certainly get you into the right fit, including understanding budgets and market standards. We focus on balancing base salary, commission, growth, and flexibility that correctly works within the needs and wants of the candidate.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Are these positions temporary or full-time?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>At this time, Cura Search only focuses on permanent positions. All are W-2 opportunities.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Which companies does Cura recruit for?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Cura Search specializes in finding and placing talent within the Healthcare, Tech, and Life Science staffing industries. We recruit Recruiters, Business Development reps, Accounting Managers, Account executives, Managers, and much more5</p>
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