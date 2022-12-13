<?php
/**
 * Template Name: Accounting Staff
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

<section class="inner-banner style-5"
    style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/banner-staff-2.jpg); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <div class="content-box">
                        <!-- <span class="pre-title">Cura Accounting & Finance</span> -->
                        <h2 class="title">We Have The Candidates You Need.</h2>
                        <div class="btns-container">
                            <ul>
                                <li><a href="/accounting/find-a-career/" class="btn btn-green-fill">Find a career</a></li>
                                <li><a href="/accounting/find-staff/" class="btn btn-green">Find staff</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="text-with-img">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-img-box">
                    <div class="content-box">
                        <h2 class="title">We Are <span>Accounting & Finance</span> Staffing Experts.</h2>
                        <div class="content">
                            <p>Regardless of your industry, our team of established, local Las Vegas recruiters is your
                                lifeline to finding the perfect candidates.</p>
                                <p> We have a proven track record working with various companies throughout the city. So you can rely on us to find the right person to
                                join your team.</p>
                                <p>We want to earn your business. There is NO COST until you sign your ideal candidate.</p>
                        </div>
                    </div>
                    <div class="image-box">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/Puzzle.png" alt="Puzzle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="three-col-text-with-bg" style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/three-col-bg.jpg); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <article>
                    <span class="sl">#1</span>
                    <h3 class="title">Personal Touch</h3>
                    <p>We know you need local candidates, and you need them fast! 
                    Our one-on-one customer service focus ensures you get precisely what you’re looking for with our expansive network of options.</p>
                </article>
            </div>

            <div class="col-md-4">
                <article>
                    <span class="sl">#2</span>
                    <h3 class="title">Compensation Consultation</h3>
                    <p>Our recruiters are well-versed in every aspect of the positions offered and are aware of the latest trends and compensation packages. This information makes negotiating salaries and benefits more straightforward.</p>
                </article>
            </div>

            <div class="col-md-4">
                <article>
                    <span class="sl">#3</span>
                    <h3 class="title">Five-Star Candidates</h3>
                    <p>The majority of our candidates are referral-based by our local staffing experts, so you’re not wasting valuable time on underqualified options. We can even verify references if requested.</p>
                </article>
            </div>
        </div>        
    </div>
</section>


<section class="two-col-text" style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/office-bg.png); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="textbox-with-icon">
                    <div class="box boxstyle-2">
                        <div class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-accounting.png" alt="icon-search"></div>
                        <h3 class="title">Cura Accounting & Finance</h3>
                        <div class="content">
                            <p>Every company in Las Vegas could use us on their team!.</p>
                            <p>If you want to grow, add more staff, and ease your workload, reach out to us today to get responses from the highest-qualified candidates in the area.</p>
                        </div>
                        <a href="/accounting/" class="learn-more">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="content-box">
                    <h2 class="title"><span>Skip</span> the searches that lead nowhere.</h2>
                    <div class="content"><p>Our targeted approach to only Accounting & Finance positions here in Las Vegas helps narrow down candidates. It gets you the best possible results based on availability. Some jobs take longer to fill, and that’s ok! We stay by your side from start to finish until you find exactly what you’re looking for. </p></div>
                    <a href="/contact-us/" class="btn btn-contact">CONTACT US</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();