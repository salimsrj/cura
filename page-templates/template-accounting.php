<?php
/**
 * Template Name: Accounting
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

<section class="inner-banner style-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <div class="content-box">
                        <span class="pre-title">Cura Accounting & Finance</span>
                        <h2 class="title">Seeking <span>A&F</span> Professionals and Positions in Las Vegas</h2>
                        <div class="btns-container">
                           <ul>
                                <li><a href="#" class="btn btn-green-fill">Find a career</a></li>
                                <li><a href="#" class="btn btn-green">Find staff</a></li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-img" style="background:url(<?php echo get_stylesheet_directory_uri();?>/images/accounting-banner.png); background-size: cover; background-position: bottom right;">
        
    </div>
</section>
<section class="three-col-text">
    <div class="container">
        <div class="row">
            <div class="col-md-4 item">
                <article>
                    <span class="sl">#1</span>
                    <h3 class="title">Identify</h3>
                    <p>The Cura Accounting database is full of highly-qualified individuals ready to start in a new opportunity now. We also ensure that the companies we work with provide the kind of environment our candidates thrive in.</p>
                </article>
            </div>

            <div class="col-md-4 item">
                <article>
                    <span class="sl">#2</span>
                    <h3 class="title">Qualify</h3>
                    <p>We know the targeted questions to ask and the answers you need to hire the perfect CPAs, Clerks, Bookkeepers, and Tax candidates. You can count on Cura Accounting & Finance to help you obtain only the highest quality personnel.</p>
                </article>
            </div>

            <div class="col-md-4 item">
                <article>
                    <span class="sl">#3</span>
                    <h3 class="title">Consult</h3>
                    <p>Part of our customer service experience includes education and consultation with both companies and candidates. We are up-to-date and share the latest trends, requirements, and benefits in the industry to ensure you’re “in the know.”</p>
                </article>
            </div>
        </div>        
    </div>
</section>

<section class="two-col-text-img">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="two-col-box">
                    <div class="first-col">
                        <div class="image-box">
                            <div class="image-container">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/tab.jpg" alt="">
                            </div>
                        </div>
                        <div class="image-box">
                            <div class="image-container">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/building3.jpg" alt="">
                            </div>
                        </div>                        

                    </div>
                    <div class="second-col">
                        <div class="content-box">
                            <div class="content">
                                <p>With multiple recruiters based in the Las Vegas, Nevada area, our team is immersed in the needs and desires of the local industry.</p>
                            </div>
                            <h2 class="title">We know what it takes to generate success and where to find growth opportunities.</h2>
                        </div>
                        <div class="img-with-btns">
                            <div class="image-box">
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/tab2.png" alt="">
                                </div>
                            </div>
                            <div class="btns-container">
                                <div class="arrow-container">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/arrow-down-black.png" alt="">
                                </div>
                                <ul>
                                    <li>
                                        <a href="#" class="btn btn-green">Log in</a>                                       
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-green-fill">Register</a>
                                    </li>
                                </ul>
                            </div>
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