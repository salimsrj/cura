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
            <div class="col-12">
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
            </div>
        </div>
    </div>
</section>
<?php
get_footer();