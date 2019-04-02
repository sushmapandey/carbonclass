<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package carbonclass
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="row ">
			<div class="col">
				<h3>HEAD OFFICE</h3>
				<address>
					#32/15,<br> V.G.P. South Avenue,<br> Panayur, <br>Chennai - 600 119
					<!-- Jewelultra Ltd<br>
					Diamondbrite House<br>
					Ewell Lane, West Farleigh<br>
					Maidstone, Kent, ME15 0NG<br>
					United Kingdom -->
				</address>
				<ul>
					<li>Tel : <a href="tel :044 24531929">044 24531929</a></li>
					<li>Mob : <a href="tel :+91 91760 76767">+91 91760 76767</a></li>
				</ul>
			</div>
			<div class="col">
				<h3>QUICK LINKS</h3>
				<?php
              wp_nav_menu( array(
                'theme_location' => 'footer-menu',
              ) );
            ?>
				<!-- <ul>
					<li><a href="#">Car Care</a></li>
					<li><a href="#">Bike Care</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">FAQ's</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Contact</a></li>
				</ul> -->
			</div>
			<div class="col">
				<h3>Follow Us</h3>
				<p>Should you have an enquiry or wish to discuss about our products, please contact us by phone, email or via our contact form.</p>
				<!-- <ul class="social-links">
					<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				</ul> -->
				<?php
              wp_nav_menu( array(
                'theme_location' => 'social-menu',
                'menu_class'        => 'social-links',
              ) );
            ?>
			</div>
		</div>

		<div class="row">
			<p>Copyright &copy; <?php echo date('Y'); ?> Diamond Brite Automotive<sup>TM</sup>. All rights Reserved.</p>
			<p>Powered by <a href="https://dzineden.com/" rel="nofollow" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/dzineden-logo.png" alt=""></a></p>
		</div>
	</div><!-- .site-info -->

</footer><!-- #colophon -->
</div><!-- #page -->
<a id="back2Top" title="Back to top" href="#"><i class="fas fa-angle-double-up"></i></a>
<?php wp_footer(); ?>

</body>
</html>
