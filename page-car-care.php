<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package carbonclass
 */

get_header(); ?>

<main id="primary" class="site-main background">
	<div class="banners inner-page">
		<div class="img">
			<img src="<?php the_field('banner_image') ?>" alt="Banner">
		</div>
		<?php if(have_rows('banner_content')) : while(have_rows('banner_content')) : the_row();?>
		<div class="details">
			<h1 class="title"><?php the_sub_field('big_title'); ?> <span><?php the_sub_field('small_title'); ?></span></h1>
			<p><?php the_sub_field('detail'); ?></p>
			<?php if(have_rows('button')) : while(have_rows('button')) : the_row();?>
			<a href="<?php the_sub_field('link'); ?>" class="btn main-btn"><?php the_sub_field('text'); ?></a>
			<?php endwhile; endif; ?>
		</div>
		<?php endwhile; endif; ?>
	</div>


	<section class="service-bg">
		<div class="services">
			<h2 class="innerpage-title">Our services</h2>
			<div class="service">
				<div class="circle">
					<div>
						<a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/img/icon1.png" alt="Icon"></span></a>
						<a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/img/icon2.png" alt="Icon"></span></a>
						<a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/img/icon3.png" alt="Icon"></span></a>
						<a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/img/icon4.png" alt="Icon"></span></a>
						<a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/img/icon5.png" alt="Icon"></span></a>
					</div>
					<div>
						<a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/img/icon6.png" alt="Icon"></span></a>
						<a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/img/icon7.png" alt="Icon"></span></a>
						<a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/img/icon8.png" alt="Icon"></span></a>
						<a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/img/icon9.png" alt="Icon"></span></a>
						<a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/img/icon10.png" alt="Icon"></span></a>
					</div>
				</div>
				<div class="img">
					<picture>
						<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/pngpix-com-audi-e.png">
						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/car-services.png">
						<img src="<?php echo get_template_directory_uri(); ?>/img/car-services.png" alt="ashwa6">
					</picture>
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/car-services.png" alt="Car service"> -->
					<div class="name first">
						<h3 class="first">INTERIOR CLEANING<span>Disinfection & Protection</span></h3>
					</div>
					<div class="name second">
						<h3 class="second">LEATHER<br>CONDITIONING</h3>
					</div>
					<div class="name third">
						<h3 class="third">PAINT PROTECTION<span>Nano ceramic</span></h3>
					</div>
					<div class="name fourth">
						<h3 class=" fourth">SILENCER COATING</h3>
					</div>
					<div class="name fifth">
						<h3 class=" fifth">ALLOYWHEEL PROTECTION</h3>
					</div>
					<div class="name sixth">
						<h3 class=" sixth">INTERNAL PANEL<span>Anti rust coating</span></h3>
					</div>
					<div class="name seventh">
						<h3 class="name seventh">UNDER PANNEL <span>Anti-Rust Coating</span> </h3>
					</div>
					<div class="name eighth">

						<h3 class=" eighth">HEADLIGHT<br>RESTORATION </h3>
					</div>
					<div class="name ninth">
						<h3 class=" ninth">AC DISINFECTION</h3>
					</div>
					<div class="name tenth">

						<h3 class="nae tenth">WINDSCREEN <span>Nano Coating</span></h3>

					</div>

				</div>
			</div>
			<a href="#" class="btn main-btn service-btn">Get the service</a>
			<section class="packages">
				<h2 class="innerpage-title"><?php the_field('package_title') ?></h2>
				<?php if(have_rows('package')) : while(have_rows('package')) : the_row();?>
				<div class="package">
					<div>
						<h3><?php the_sub_field('title'); ?> <span>&#8377; <?php the_sub_field('price'); ?>/-</span></h3>
						<p><?php the_sub_field('detail'); ?></p>
						<?php if(have_rows('button')) : while(have_rows('button')) : the_row();?>
						<a href="<?php the_sub_field('link'); ?>" class="btn main-btn"><?php the_sub_field('text'); ?></a>
						<?php endwhile; endif; ?>
					</div>
					<div class="img">
						<img src="<?php the_sub_field('image'); ?>" alt="Car">
					</div>
				</div>
				<?php endwhile; endif; ?>
				<!-- <div class="package">
					<div>
						<h3>ANNUAL PACKAGE </h3>
						<p>You’ll also get regular great money saving offers across Jewelultra’s extensive range of exceptional car care products to keep every part of your vehicle in pristine condition.</p>
						<a href="#" class="btn main-btn">View details</a>
					</div>
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/pngpix-com-ferrari.png" alt="Car">
					</div>
				</div> -->
			</section>

		</div>
	</section>

	<section class="contact">
		<div class="container">
			<div class="contact-form">
				<div>
					<h2 class="title"><?php the_field('contact_big_title') ?> <span><?php the_field('contact_small_title') ?></span></h2>
					<p><?php the_field('contact_detail') ?></p>
				</div>
				<div class="form">
				<!-- <form action=""> -->
					<!-- <div>
							<input type="text" placeholder="Your Name">
						</div>
						<div>
							<input type="email" placeholder="Email ID">
						</div>
						<div>
							<select name="Vehical Type">
								<option>Vehicle Type</option>
								<option>Saab 95</option>
								<option>Mercedes SLK</option>
								<option>Audi TT</option>
							</select>
						</div>
						<div class="options">
							<select name="Choose Service">
								<option>Choose Service</option>
								<option>Saab 95</option>
								<option>Mercedes SLK</option>
								<option>Audi TT</option>
							</select>
							<select name="Choose Package">
								<option>Choose Package</option>
								<option>Saab 95</option>
								<option>Mercedes SLK</option>
								<option>Audi TT</option>
							</select>
						</div>
						<div>
							<textarea name="" placeholder="Message"></textarea>
						</div>
						<input type="submit" class="Submit"> -->
					<?php 
              $its=new WP_Query('pagename=car-contact');
              while($its->have_posts()):
                $its->the_post();?>
					<?php the_content(); ?>
					<?php
              endwhile;
              wp_reset_postdata();
            ?>
				<!-- </form> -->
				</div>
			</div>
		</div>
		<section class="subscribe">
			<div>
				<div>
					<h2 class="title"><?php the_field('subscribe_big_title') ?> <span><?php the_field('subscribe_small_title') ?></span></h2>
					<p>Y<?php the_field('subscribe_detail') ?></p>
					<div class="subscribe-section">
						<input type="text" placeholder="Email Address">
						<input type="submit" value="Subscribe">
					</div>
				</div>
				<div class="img">
					<img src="<?php the_field('subscribe_image') ?>" alt="Subscribe car">
				</div>
			</div>
		</section>
	</section>



</main><!-- #primary -->

<?php
get_footer();
