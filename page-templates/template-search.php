<?php
/**
 * Template Name: Search
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
<section class="inner-banner style-1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <div class="left-box">
                        <span class="pre-title">Cura Search</span>
                        <h2 class="title">We Are The Recruiter’s <span>Recruiter</span></h2>
                    </div>
                    <div class="right-box color-white">
                        <h3 class="sub-title">I’m the talent   /   I’m looking for talent</h3>
                        <div class="content">
                            <p>Don’t waste your time and effort on endless search engines and processes that don’t produce results.
                            Finding the right position and the right candidate take similar skills.<br>Our platform helps target exactly what you’re looking for.</p>
                        </div>
                        <div class="buttons">
                            <ul>
                                <li>
                                    <a class="btn btn-banner" href="#">Find a career</a>
                                </li>
                                <li>
                                    <a class="btn btn-banner" href="#">Find staff</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/inner-banner-bg.png); background-size: cover; background-position: center center;"></div>
</section>

<section class="three-col-text-video">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <article>
                    <span class="sl">#1</span>
                    <h3 class="title">Compensation</h3>
                    <p>Our field experts have a deep understanding of competitive compensation packages. We work with both companies and candidates to find the best balance in salary and benefit packages based on talent, expertise, and industry history.</p>
                </article>
            </div>

            <div class="col-md-4">
                <article>
                    <span class="sl">#2</span>
                    <h3 class="title">Flexibility</h3>
                    <p>Whether you’re looking to work remotely, in-person at the office, or a hybrid of the two, we understand everyone has different desires. We assist in pairing organizations with candidates whose needs will complement each other.</p>
                </article>
            </div>

            <div class="col-md-4">
                <article>
                    <span class="sl">#3</span>
                    <h3 class="title">Growth</h3>
                    <p>“Where do you see yourself in 5 years?” Getting a great job is one piece of the puzzle, but growth opportunities are essential for the majority of employees. Our hands-on staff wants to ensure you have the ability to flourish successfully.</p>
                </article>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="video-container">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/Video.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-with-img"  style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/search.png); background-size: 100px; background-position: left bottom; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-img-box">
                    <div class="content-box">
                        <h2 class="title">Count On Us.</h2>
                        <h3 class="subtitle">Our client-centric approach makes<br>YOU OUR #1 PRIORITY.</h3>
                        <div class="content">
                            <p>Whether you are looking for the candidate to fill a position, or looking for your dream job, our commitment to you remains the same.</p>
                        </div>
                        <div class="btn-img-box">
                            <div class="btn-container">
                                <div class="arrow"></div>
                                <a href="#" class="btn btn-blue">Register</a>
                            </div>
                            <div class="small-img">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/keyboard.jpg" alt="">
                            </div>
                        </div>
                        
                    </div>
                    <div class="image-container">
                        <div class="image-box" style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/girl-computer.png); background-size: cover; background-position: center center;">
                            
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="inner-contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-box">
                    <ul>
                        <li><span class="title">Let Cura get to know you</span> <span class="arrow"><img src="<?php echo get_stylesheet_directory_uri();?>/images/arrow-right.png" alt=""></span></li>
                        <li><a href="#" class="btn btn-contact">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();