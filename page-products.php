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

<main id="primary" class="site-main background cc-bg                                      ">



<div class="container inner-product">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<div class="aa">
		
		</div>

	<?php endwhile; ?>
<?php endif; ?>
</div>



</main><!-- #primary -->

<?php

get_footer();
