<?php
/**
 * Template Name: Home
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
<section class="home-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,.6), rgba(0,0,0,.5) 15%, rgba(0,0,0,.2) 30%, rgba(0,0,0,.2) 30%), url(<?php echo get_stylesheet_directory_uri();?>/images/LionVideo.jpg); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-12 banner-col">
                <div class="banner-box">
                    <div class="content-box">
                        <h2 class="title">Professional, <span>High-Quality</span> Staffing Experts</h2>
                        <div class="banner-content">
                            <p>Filling those notoriously hard-to-source positions.</p>
                        </div>
                        <div class="buttons">
                            <ul>
                                <li><a href="#" class="btn btn-blue">Search</a></li>
                                <li><a href="#" class="btn btn-green">Accounting & Finance</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="banner-image">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/banner_img.jpg" alt="Banner">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="who-we-are" style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/CURA-text.png); background-size: 50%; background-position: bottom right; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content-box">
                    <h2 class="title">We are <span>Cura</span></h2>
                    <div class="content">
                        <p>Filling the careers of tomorrow takes expertise, vision, and a personal touch. Sourcing talented individuals with the right skills to make companies efficient and profitable is essential.  We are experts in staffing and know how to fill those notoriously difficult niche positions. </p>
                    </div>
                    <div class="button-container">
                        <a href="#" class="btn btn-blue">ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featurs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="expertise">
                    <div class="content-box">
                    <h2 class="title">Our Expertise</h2>
                        <div class="content">
                            <p>Cura Recruiting professionals are highly-experienced recruiters themselves in evergreen industries foundational to our future. Though we may use high-tech AI to help source candidates along the way, that’s only only one aspect of our approach. We understand how valuable a personal interaction can be.</p>
                        </div>
                    </div>
                </div>
                <div class="two-box-with-icon">
                    <div class="box boxstyle-1">
                        <div class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-search.png" alt="icon-search"></div>
                        <h3 class="title">Cura Search</h3>
                        <div class="content">
                            <p>As a Rec2Rec Firm, we place all positions within the staffing industry. We partner with Staffing Agencies to help them grow their ranks and profits by finding ideal, top-performing candidates. 
                            Looking for a new position? Narrow  your inquiry by location, niche, or job type to connect with all our existing options.</p>
                        </div>
                        <a href="#" class="learn-more">Learn More</a>
                    </div>

                    <div class="box boxstyle-2">
                        <div class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-accounting.png" alt="icon-accounting"></div>
                        <h3 class="title">Cura Accounting & Finance</h3>
                        <div class="content">
                            <p>We designed this platform for Accounting and Finance professionals and employers. Regardless of the size of your business or industry, we will find outstanding options to fill your open positions.  We help place a wide range of positions from Accountants and Analysts to Controllers, CFOs, and more!</p>
                        </div>
                        <a href="#" class="learn-more">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title-container">
                    <h2 class="title">What our <span>happy clients</span> are saying</h2>
                </div>                
            </div>
            <div class="col-md-6">
                <div class="testimonial">
                    <div class="item">
                        <div class="author-img">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/author.png" alt="author">
                        </div>
                        <div class="content">
                            <h3 class="author-info">John L, VP of Accounting and Finance</h3>
                            <div class="text">
                                <p>“CURA Recruiting has been a tremendous asset to our business.  They are our first-call for staffing needs.  Jennifer is super responsive and takes the time upfront to really understand our needs.   Her FP&A background is a real plus and she adds a personal touch that goes above and beyond.  We have been very pleased with the caliber and range of candidates that have provided to us.”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="fill-retention" style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/building-bg.png); background-size:  calc(100% - 150px) 100%; background-position: left; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image-box">
                    <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/images/fill-rate.png" alt="Fill Rate">
                    </div>
                </div>                
            </div>
            <div class="col-md-6">
                <div class="fill-retention-box">
                    <div class="fill">
                        <div class="percentage">80%</div>
                        <span>Fill<br>Rate</span>
                    </div>
                    <div class="retention">
                        <div class="percentage">96%</div>
                        <span>Client<br>Retention</span>
                    </div>
                </div>
                <div class="content-box">
                    <h2 class="title"><span>Cura</span> makes it simple</h2>
                    <div class="content">
                        <p>Every business needs a highly-qualified and engaging recruiter who understands their business and operations to find talent.</p>
                        <p> But finding the right person can be challenging! Cura Recruiting makes it effortless working as the bridge between professionals and industries. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-with-btn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="two-box">
                    <div class="left-box">
                        <h3 class="title">What exactly are you looking for?</h3>
                    </div>
                    <div class="right-box">
                        <div class="buttons">
                            <ul>
                                <li><a class="btn btn-blue" href="#">Recruiting</a></li>
                                <li><a class="btn btn-green" href="#">Accounting & Finance</a></li>
                            </ul>
                        </div>
                        <h2 class="title"><span>Cura</span> At Work - State by State</h2>
                        <div class="content-box">
                            <div class="content">
                                <p>Are you looking to stay close to home, or are you itching to relocate? We are expanding our reach as we continue work with a variety of exciting and dynamic organizations. </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background"></div>
</section>

<section class="contact"  style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/contact-bg.png); background-size: cover; background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <div>
                        <h2 class="title">Cura helps you achieve your goals.</h2>
                        <h3 class="sub-title">Want to see how?</h3>
                        <div class="button-container">
                            <a href="#" class="btn btn-contact">CONTACT US</a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>

<?php
get_footer();