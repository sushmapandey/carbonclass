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

<main id="primary" class="site-main background cc-bg bg">

<section class="cc_testimonial inner-testimonial">

	<h2 class="title"><?php the_field('testimonial_main_title') ?><span><?php the_field('testimonial_title') ?></span></h2>
<div>
		<?php if(have_rows('client_testimonial')) : while(have_rows('client_testimonial')) : the_row();?>
			<div class="testimonial">
				<div>
					<p><?php the_sub_field('client_detail') ?></p>
					<div class="img">
						<img src="<?php the_sub_field('client_image') ?>" alt="Testimonials image"></div>
					<h2 class="title"><?php the_sub_field('client_name') ?> <span><?php the_sub_field('client_designation') ?></span></h2>
				</div>
			</div>

			<?php endwhile; endif; ?>
			</div>
	</section>

</main><!-- #primary -->

<?php
get_footer();
