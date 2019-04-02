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
<section class="sd">

	<section class="cc_banner owl-carousel owl-theme ">
		<?php if(have_rows('banner_carousel')) : while(have_rows('banner_carousel')) : the_row();?>
		<div class="banners item">
			<div class="img">
				<img src="<?php the_sub_field('banner_image'); ?>" alt="Articles">
			</div>
			<?php if(have_rows('banner_content')) : while(have_rows('banner_content')) : the_row();?>
			<div class="details">
				<?php if(have_rows('title')) : while(have_rows('title')) : the_row();?>
				<h1 class="title">
					<?php the_sub_field('big_text'); ?> <span>
						<?php the_sub_field('small_text'); ?></span></h1>
				<?php endwhile; endif; ?>
				<p>
					<?php the_sub_field('detail'); ?>
				</p>
				<?php if(have_rows('booking_button')) : while(have_rows('booking_button')) : the_row();?>
				<a href="<?php the_sub_field('link'); ?>" class="btn main-btn">
					<?php the_sub_field('text'); ?> </a>
				<?php endwhile; endif; ?>
			</div>
			<?php endwhile; endif; ?>
		</div>
		<?php endwhile; endif; ?>
		<!-- <div class="banners item">
			<div class="img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/yamaha.png" alt="Articles">
			</div>
			<div class="details">
				<h1 class="title">PREMIUM <span>Bike CARE</span></h1>
				<p>Using a combination of transferable technologies - and completely new solutions where
					needed - ‘Diamondbrite Motorcycle’ has been devised to give bikers access to exactly
					the same levels of flawless performance.</p>
				<a href="#" class="btn main-btn">Book Now</a>
			</div>
		</div>
		<div class="banners item">
			<div class="img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/orange-jaguar.png" alt="Articles">
			</div>
			<div class="details">
				<h1 class="title">Service<span>AT YOUR DOORSTEP</span></h1>
				<p>You will also get free enrolment in Jewelultra’s
					After Care Club. Membership will give you
					quarterly emailed newsletters with valuable
					seasonal hints and tips against the changing
					climatic and man made (e.g. road salt)
					seasonal challenges.</p>
				<a href="#" class="btn main-btn">Book Now</a>
			</div>
		</div> -->

	</section>
	<!-- <div class="scroll-down"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/scroll-down.svg" alt=""></a></div> -->
	<a href="#" class="scroll-down" address="true"></a>
</section>

<section class="jj ok">

		<section class="section">
			<h2 class="title">
				<?php the_field('car_big_title') ?><span>
				<?php the_field('car_small_title') ?></span></h2>
			<div>
				<div class="cards">
					<?php if(have_rows('car_card')) : while(have_rows('car_card')) : the_row();?>
					<div class="card">
						<div class="img">
							<img src="<?php the_sub_field('image') ?>" alt="Icons">
						</div>
						<div class="details">
							<h3>
								<?php the_sub_field('title_text') ?>
							</h3>
							<p>
								<?php the_sub_field('detail') ?>
							</p>
							<?php if(have_rows('button')) : while(have_rows('button')) : the_row();?>
							<a href="<?php the_sub_field('link') ?>" class="btn">
								<?php the_sub_field('text') ?> <i class="icon-angle-right-icon"></i></a>
							<?php endwhile; endif; ?>
						</div>
					</div>
					<?php endwhile; endif; ?>
					<!-- <div class="card">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/car-2.png" alt="Icons">
						</div>
						<div class="details">
							<h3>DIAMONDBRITE PREMIUM PAINT PROTECTION</h3>
							<p>Nano ceramic coating</p>
							<a href="#" class="btn">Read More</a>
						</div>
					</div>
					<div class="card">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/car.png" alt="Icons">
						</div>
						<div class="details">
							<h3>WATERLESS WASH & WAX</h3>
							<p>Lorem ipsum dolor sit amet</p>
							<a href="#" class="btn">Read More</a>
						</div>
					</div> -->
				</div>
				<div class="img">
					<img src="<?php the_field('car_image') ?>" alt="Car">
				</div>
			</div>
			<?php if(have_rows('car_button')) : while(have_rows('car_button')) : the_row();?>
			<a href="<?php the_sub_field('link') ?>" class="btn main-btn">
				<?php the_sub_field('text') ?> </a>
			<?php endwhile; endif; ?>
		</section>

		<section class="section">
			<h2 class="title">
				<?php the_field('bike_big_title') ?><span>
					<?php the_field('bike_small_title') ?></span></h2>
			<div>
				<div class="cards">
					<?php if(have_rows('bike_card')) : while(have_rows('bike_card')) : the_row();?>
					<div class="card">
						<div class="img">
							<img src="<?php the_sub_field('image') ?>" alt="Icons">
						</div>
						<div class="details">
							<h3>
								<?php the_sub_field('title_text') ?>
							</h3>
							<p>
								<?php the_sub_field('detail') ?>
							</p>
							<?php if(have_rows('button')) : while(have_rows('button')) : the_row();?>
							<a href="<?php the_sub_field('link') ?>" class="btn">
								<?php the_sub_field('text') ?> <i class="icon-angle-right-icon"></i></a>
							<?php endwhile; endif; ?>
						</div>
					</div>
					<?php endwhile; endif; ?>
					<!-- <div class="card">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/car-2.png" alt="Icons">
						</div>
						<div class="details">
							<h3>DIAMONDBRITE PREMIUM PAINT PROTECTION</h3>
							<p>Nano ceramic coating</p>
							<a href="#" class="btn">Read More</a>
						</div>
					</div>
					<div class="card">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/car.png" alt="Icons">
						</div>
						<div class="details">
							<h3>PAINT PROTECTION FILM</h3>
							<p>Lorem ipsum dolor sit amet</p>
							<a href="#" class="btn">Read More</a>
						</div>
					</div> -->
				</div>
				<div class="img">
					<img src="<?php the_field('bike_image') ?>" alt="Car">
				</div>
			</div>
			<a href="#" class="btn main-btn">View all</a>
		</section>

		<section class="section">

			<div>
				<div>
					<h2 class="title">
						<?php the_field('why_choose_big_title') ?><span>
							<?php the_field('why_choose_small_title') ?></span></h2>
					<p class="detail">
						<?php the_field('why_choose_detail') ?>
					</p>
				</div>
				<div class="right-section">
					<div class="cards">
						<?php if(have_rows('why_choose_card')) : while(have_rows('why_choose_card')) : the_row();?>
						<div class="card">
							<div class="details">
								<h3>
									<?php the_sub_field('title') ?>
								</h3>
								<p>
									<?php the_sub_field('detail') ?>
								</p>
							</div>
						</div>
						<?php endwhile; endif; ?>
						<!-- <div class="card">
							<div class="details">
								<h3>SAVE TIME & EFFORT</h3>
								<p>Easier and quicker to clean no need to polish your vehicle again</p>
							</div>
						</div>
						<div class="card">
							<div class="details">
								<h3>SAVE MONEY & MAKE MONEY</h3>
								<p>Spend less on car care and increase your vehicle’s future resale value</p>
							</div>
						</div> -->
					</div>
					<div class="img">
						<img src="<?php the_field('why_choose_image') ?>" alt="Car">
					</div>
				</div>

			</div>
		</section>

		<section class="section">
			<h2 class="title">
				<?php the_field('guarante_big_title') ?><span>
					<?php the_field('guarante_small_title') ?></span></h2>
			<div>
				<ul>
					<li>Road grime, Salts, Traffic film & Tar</li>
					<li>Temperature Cycles</li>
					<li>Bird Droppings</li>
					<li>Insect Fluid</li>
					<li>Acid Rain & Other Pollutants</li>
					<li>UV Light</li>
					<li>Tree Sap</li>
					<li>Stain Protection</li>
				</ul>
				<div class="img">
					<img src="<?php the_field('guarante_image') ?>" alt="Car">
				</div>
			</div>
		</section>

	</section>
	<section class="cc_protection">
		<div class="container">
			<div class="details">
				<h2 class="title">Protect <span>YOUR PRIDE & JOY</span></h2>
				<h2 class="title">INCREASE <span>YOUR VEHICLE’S RESALE VALUE</span></h2>
				<a href="#" class="btn main-btn">Book Now</a>
			</div>
			<div>
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/car.jpg" alt="Car"> -->
				<!-- <video width="100%" controls poster="<?php echo get_template_directory_uri(); ?>/img/car.jpg">
					<source src="<?php echo get_template_directory_uri(); ?>/img/Car Toys Under Snow   Toy Cars Transportation Video for Children.mp4" type="video/mp4">
				</video>  -->
				<?php

				// get iframe HTML
				$iframe = get_field('oembed');


				// use preg_match to find iframe src
				preg_match('/src="(.+?)"/', $iframe, $matches);
				$src = $matches[1];


				// add extra params to iframe src
				$params = array(
						'controls'    => 0,
						'hd'        => 1,
						'autohide'    => 1
				);

				$new_src = add_query_arg($params, $src);

				$iframe = str_replace($src, $new_src, $iframe);


				// add extra attributes to iframe html
				$attributes = 'frameborder="0"';

				$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


				// echo $iframe
				echo $iframe;

				?>

			</div>
		</div>
	</section>

	<section class="cc_products">
		<h2 class="title">
			<?php the_field('product_big_text') ?><span>
				<?php the_field('product_small_text') ?></span></h2>
		<div class="dd-products owl-carousel owl-theme products-homepage">
			<?php if(have_rows('products')) : while(have_rows('products')) : the_row();?>
			<div class="cc-product item">
				<div class="product-img">
					<div>
						<img src="<?php the_sub_field('image') ?>" alt="Product">
					</div>
				</div>
				<div class="product-details">
					<h3>
						<?php the_sub_field('title') ?>
					</h3>
					<p>
						<?php the_sub_field('detail') ?>
					</p>
					<?php if(have_rows('price')) : while(have_rows('price')) : the_row();?>
					<h4>&#8377; <del>
							<?php the_sub_field('original') ?></del>
						<?php the_sub_field('discount') ?>/-</h4>
					<?php endwhile; endif; ?>
					<?php if(have_rows('button')) : while(have_rows('button')) : the_row();?>
					<a href="<?php the_sub_field('link') ?>" class="btn btn-outline cc-btn">
						<?php the_sub_field('text') ?></a>
					<?php endwhile; endif; ?>
				</div>
			</div>
			<?php endwhile; endif; ?>
			<!-- <div class="product item">
				<div class="product-img">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/unger-microfiber-cloths.jpg" alt="Product">
					</div>
				</div>
				<div class="product-details">
					<h3>MICROFIBRE CLOTH </h3>
					<p>Edgeless design that helps reduce swirl marks and marring.</p>
					<h4>&#8377; <del>540</del> 400/-</h4>
					<a href="#" class="btn btn-outline cc-btn">ADD to CART</a>
				</div>
			</div>
			<div class="product item">
				<div class="product-img">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/odoban-all-purpose-cleaners.jpg" alt="Product">
					</div>
				</div>
				<div class="product-details">
					<h3>SHAMPOO - 750 ml</h3>
					<p>A high foaming product that adds a protective film as it washes.</p>
					<h4>&#8377; <del>1,200</del> 1,060/-</h4>
					<a href="#" class="btn btn-outline cc-btn">ADD to CART</a>
				</div>
			</div>
			<div class="product item">
				<div class="product-img">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/hope-s-car-washing-supplies.jpg" alt="Product">
					</div>
				</div>
				<div class="product-details">
					<h3>GLASS CLEANER - 500 ml </h3>
					<p>Cleans glass and mirrors easily and effectively for a smear free finish.</p>
					<h4>&#8377; <del>800</del> 720/-</h4>
					<a href="#" class="btn btn-outline cc-btn">ADD to CART</a>
				</div>
			</div> -->
		</div>
	</section>

	<section class="cc_testimonials">
		<h2 class="title">
			<?php the_field('testimonial_big_title') ?><span>
				<?php the_field('testimonial_small_title') ?></span></h2>
		<div class="testimonials owl-carousel owl-theme">
			<?php if(have_rows('testimonials')) : while(have_rows('testimonials')) : the_row();?>
			<div class="testimonial item">
				<div>
					<p>
						<?php the_sub_field('detail') ?>
					</p>
					<div class="img">
						<img src="<?php the_sub_field('image') ?>" alt="Testimonials image"></div>
					<h2 class="title">
						<?php the_sub_field('name') ?> <span>
							<?php the_sub_field('designation') ?></span></h2>
				</div>
			</div>
			<?php endwhile; endif; ?>
			<!-- <div class="testimonial item">
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat dui at lacus aliquet, a consequat enim
						aliquet. Integer</p>
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/testimonial.jpg" alt="Testimonials image"></div>
					<h2 class="title">CUSTOMER NAME <span>Vehicle Name, Designation</span></h2>
				</div>
			</div>
			<div class="testimonial item">
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat dui at lacus aliquet, a consequat enim
						aliquet. Integer</p>
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/testimonial.jpg" alt="Testimonials image"></div>
					<h2 class="title">CUSTOMER NAME <span>Vehicle Name, Designation</span></h2>
				</div>
			</div>
			<div class="testimonial item">
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat dui at lacus aliquet, a consequat enim
						aliquet. Integer</p>
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/testimonial.jpg" alt="Testimonials image"></div>
					<h2 class="title">CUSTOMER NAME <span>Vehicle Name, Designation</span></h2>
				</div>
			</div>
			<div class="testimonial item">
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat dui at lacus aliquet, a consequat enim
						aliquet. Integer</p>
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/testimonial.jpg" alt="Testimonials image"></div>
					<h2 class="title">CUSTOMER NAME <span>Vehicle Name, Designation</span></h2>
				</div>
			</div>
			<div class="testimonial item">
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat dui at lacus aliquet, a consequat enim
						aliquet. Integer</p>
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/testimonial.jpg" alt="Testimonials image"></div>
					<h2 class="title">CUSTOMER NAME <span>Vehicle Name, Designation</span></h2>
				</div>
			</div> -->

		</div>
	</section>

	<section class="cc_articles">
		<h2 class="title">ARTICLES <span>Learn More about automotive care</span></h2>
		<div class="articles">
			<?php $rainbirdBlogs = new WP_Query('post_type=blogs&posts_per_page=-1&orderby=date&order=ASC'); ?>
			<?php if ($rainbirdBlogs->have_posts() ) : while ($rainbirdBlogs->have_posts() ) : $rainbirdBlogs->the_post(); ?>

			<div class="article">

				<div class="box">
					<!-- <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"> -->
					<div class="img">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="details">
						<h3>
							<?php
				$categories = get_the_category();
											if ( ! empty( $categories ) ) {
														echo '<span>' . esc_html( $categories[0]->name ) . '</span>';
													}
			?>
							<span>
								<?php echo get_the_date('M j, Y') ?></span></h3>

						<h4>
							<?php the_title(); ?>
						</h4>
						<p>
							<?php the_excerpt(); ?>
						</p>
						<a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>" class="btn">Read More <i class="icon-angle-right-icon"></i></a>
					</div><!-- /.details -->
					<!-- </a> -->
				</div><!-- /.box -->

			</div><!-- /.article -->
			<?php endwhile; endif;  wp_reset_postdata(); ?>
			<!-- <div class="article">
				<div class="box">
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/article.jpg" alt="Articles">
					</div>
					<div class="details">
						<h3><span>CATEGORY</span> <span>FEB 03, 2019</span></h3>
						<h4>Tips for cleaning your Vehicle</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam</p>
						<a href="#" class="btn">Read More <i class="icon-angle-right-icon"></i></a>
					</div>
				</div>
			</div>
			<div class="article">
				<div class="box">
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/article.jpg" alt="Articles">
					</div>
					<div class="details">
						<h3><span>CATEGORY</span> <span>FEB 03, 2019</span></h3>
						<h4>Tips for cleaning your Vehicle</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam</p>
						<a href="#" class="btn">Read More <i class="icon-angle-right-icon"></i></a>
					</div>
				</div>
			</div>
			<div class="article">
				<div class="box">
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/article.jpg" alt="Articles">
					</div>
					<div class="details">
						<h3><span>CATEGORY</span> <span>FEB 03, 2019</span></h3>
						<h4>Tips for cleaning your Vehicle</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam</p>
						<a href="#" class="btn">Read More <i class="icon-angle-right-icon"></i></a>
					</div>
				</div>
			</div> -->
		</div>
	</section>

</main><!-- #primary -->


<?php
get_footer();
