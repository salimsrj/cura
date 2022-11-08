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

<?php
get_footer();