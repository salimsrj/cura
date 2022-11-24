<?php
/**
 * Template Name: Contact
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

<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <h2 class="title">Every <span>collaboration</span> starts with a conversation.</h2>
                    <div class="content">
                        <p><strong>We can’t serve your needs if we don’t know your needs!</strong></p>
                         <p>Drop us a line down below to give our team a general idea of what you’re looking for or have questions about. We will respond to you promptly and even schedule a call or meeting to dive deeper into any of your questions, concerns, or feedback!</p>
                    </div>
                </div>
                <div class="form-container">
                    <?php echo do_shortcode( '[gravityform id="1" title="false"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="two-col-textimg style-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <div class="left-col">
                        <div class="left-content">
                            <div class="content">
                                <h2 class="title"><span>When email is not enough...</span><br>Schedule a call instead.</h2>
                            </div>
                        </div>                        
                    </div>
                    <div class="right-col">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/Schedule-plugin.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- <section class="feedback">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image-box">
                    <div class="image-container" style="background:url(<?php echo get_stylesheet_directory_uri();?>/images/feedback.png); background-size: cover; background-repeat: no-repeat;">                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="opportunity-customer-testimonials style-2" style="padding-top: 100px; padding-bottom: 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="opportunity">
                    <div class="image-bg"><img src="<?php echo get_stylesheet_directory_uri();?>/images/feedback.png"
                            alt="oportunity"></div>
                    <div class="content-box">
                        <!-- <h2 class="title">Your opportunity starts here.</h2> -->
                        <div class="opportunity-list">
                            <ul>
                                <li><span>Expert<br>Advice</span></li>
                                <li><span>Personal<br>Service</span></li>
                                <li><span>Support</span></li>
                                <li><span>Education</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 align-items-end">
                <div class="candidates-testimonials">
                    <h2 class="title">Feedback  is a gift and we <span>love to hear from you</span>.</h2>
                    <div class="testimonial">
                        <div class="item">
                            <div class="author-img">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/author.png" alt="author">
                            </div>
                            <div class="content">
                                <h3 class="author-info">Libby, Controller</h3>
                                <div class="text">
                                    <p>Jennifer is by far the best recruiter I have ever worked with: personable,
                                        friendly, and very capable. She took the time to truly understand what I was
                                        looking for in a new role, and in assessing job fit for both me and my potential
                                        employer. She also managed the recruitment process very effectively. She
                                        provided sound advice and continuous updates throughout the process. I am truly
                                        grateful to have worked with her.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="buttons-with-bg" style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/buttons-bg.png); background-size: cover; background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="btn-container">
                    <ul>
                        <li><a href="#" class="btn btn-transparent">Log in</a></li>
                        <li><a href="#" class="btn btn-link">Schedule A Call</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>







<?php
get_footer();