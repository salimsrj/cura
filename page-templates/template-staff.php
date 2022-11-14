<?php
/**
 * Template Name: Staff
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
<section class="inner-banner style-3"
    style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/banner-staff.jpg); background-size: cover; background-position: bottom center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <div class="content-box">
                        <h2 class="title">Secure <span>Top Performers</span> To Grow Your Business</h2>
                        <div class="btn-container">
                            <a href="#" class="btn btn-blue">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-choose-us">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-img-block">
                    <div class="text-container">
                        <h2 class="title">Why <span>Choose Us</span>?</h2>
                        <div class="content">
                            <p>Employers spend countless hours sourcing candidate and sifting through applicants. Time
                                that could be better focused elsewhere.</p>
                            <p>We are a US-based Rec2Rec Agency.</p>
                            <p> Our staff are experts in those niche fields and know
                                the nuances your industry experiences. Our easy-going team will collaborate with you to
                                ensure you focus your energy only on the most qualified candidates who suit your needs
                                and can get right to work once hired.</p>
                        </div>
                    </div>
                    <div class="buttons-container">
                        <ul>
                            <li><a href="#" class="btn btn-blue">Log in</a></li>
                            <li><a href="#" class="btn btn-blue">Register</a></li>
                        </ul>
                    </div>
                    <div class="left-image-box">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/LogoMockup.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-featurs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featur-list">
                        <ul>
                            <li>Analytics & Data Support</li>
                            <li>Rec2Rec Experts</li>
                            <li>Efficient Communication</li>
                            <li>Proactive Sourcing Model</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-with-team" style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/team-bg.jpg); background-size: 75%;
    background-position: right;
    background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="search-contact">
                            <div class="search-box">
                                <div class="box boxstyle-1">
                                    <div class="icon"><img
                                            src="<?php echo get_stylesheet_directory_uri();?>/images/icon-search.png"
                                            alt="icon-search"></div>
                                    <h3 class="title">Cura Search</h3>
                                    <div class="content">
                                        <p>Search through an array of staffing positions in those “hard to fill”
                                            segments including Directors, Business Developers, Account Managers,
                                            Recruiters, and more around the country with ease. </p>
                                    </div>
                                    <a href="#" class="learn-more">Learn More</a>
                                </div>
                            </div>
                            <div class="contact-box">
                                <h3 class="contact-title">Have a question?<br>Ask <span>our team</span> about it.</h3>
                                <div class="content">
                                    <p>It’s impossible to fit all our services and strengths into a website! If you have a question or concern, we want to know. Contact us and we will respond with a prompt and efficient manner.</p>
                                </div>
                                <a href="#" class="btn btn-contact">CONTACT US</a>
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