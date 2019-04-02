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


	<!-- <section class="cc_products">
		<h2 class="title">
			<?php the_field('testimonial_main_title') ?><span>
				<?php the_field('testimonial_title') ?></span></h2>
		<div class="cc-product ">
			<?php if(have_rows('client_testimonial')) : while(have_rows('client_testimonial')) : the_row();?>
			<div class="product">
				<div>
					<div class="product-img">
						<div>
							<img src="<?php the_sub_field('client_image') ?>" alt="Product">
						</div>
					</div>
					<div class="product-details">
						<h3>
							<?php the_sub_field('client_name') ?>
						</h3>
						<p>
							<?php the_sub_field('client_detail') ?>
						</p>
						<?php if(have_rows('discount')) : while(have_rows('discount')) : the_row();?>
						<h4>&#8377; <del>
								<?php the_sub_field('original_price') ?></del>
							<?php the_sub_field('discount_price') ?>/-</h4>
						<?php endwhile; endif; ?>
						<?php if(have_rows('button')) : while(have_rows('button')) : the_row();?>
						<a href="<?php the_sub_field('link') ?>" class="btn btn-outline cc-btn">
							<?php the_sub_field('text') ?></a>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>

		</div>
	</section> -->



<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<!-- <div> -->
		<?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>



<!-- <section class="cc_products">
	<h2 class="title">
		<?php the_field('testimonial_main_title') ?><span>
		<?php the_field('testimonial_title') ?></span>
	</h2>
	<div class="cc-product">
	<?php while ( have_posts() ) : the_post(); ?>  
		<div class="product">
			<div>
			<div class="product-img">
						<div>
							<img src="<?php the_post_thumbnail(); ?>" alt="Product">
						</div>
					</div>
			</div>
			<div class="product-details">
			<?php the_content(); ?>
			</div>

		</div>
		<?php endwhile; ?>
		
	</div>
	
</section>  -->

</main><!-- #primary -->

<?php

get_footer();
