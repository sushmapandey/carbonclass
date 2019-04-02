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
<h2 class="title container">Gallery <span></span></h2>
		<div class="gallery">
			<?php $gallery = new WP_Query('post_type=gallery_type&posts_per_page=-1&orderby=date&order=DESC'); ?>
			<?php if ($gallery->have_posts() ) : while ($gallery->have_posts() ) : $gallery->the_post(); ?>
			<img src="<?php the_post_thumbnail_url(); ?>" alt="Carbon Class" data-darkbox="<?php the_post_thumbnail_url(); ?>"
			 data-darkbox-group="one" />

			<?php endwhile; endif;  wp_reset_postdata(); ?>
		</div>

</main><!-- #primary -->

<?php
get_footer();
