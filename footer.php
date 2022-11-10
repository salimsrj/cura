<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="widget">
					<div class="footer-logo">
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/logo-black.png" alt="cura logo black">
					</div>
					<div class="copyright">
						<p>All rights reserved by Cura Recruiting Inc ©</p>
					</div>
					<div class="designed-by">
						<span>Designed by Guyman Studio</span>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="widget">
					<div class="contact">
						<ul>
							<li><a href="#"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/linkedIn.png" alt=""></span><span>Contact</span></a></li>
							<li><a href="tel:6032350312"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/phone.png" alt=""></span><span>603 235 0312</span></a></li>
							<li><a href="mailto:cgreen@curarecruiting.com"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/mail.png" alt=""></span><span>cgreen@curarecruiting.com</span></a></li>
							<li><a href="#"><span class="icon"></span><span><storng>Log in</strong></span></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-5">
				<div class="footer-widget">
					<div class="footer-menu">
						<ul>
							<li><a href="#">Who We Are</a></li>
							<li><a href="#">Our Services</a></li>
							<li class="menu-item-has-children"><a href="#">CURA Search</a>
							<ul>
								<li><a href="#">Find A Career</a></li>
								<li><a href="#">Find Staff</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="#">CURA Accounting & Finance</a>
							<ul>
								<li><a href="#">Find A Career</a></li>
								<li><a href="#">Find Staff</a></li>
							</ul>
						</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

