<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package carbonclass
 */

get_header(); ?>
	
	<main id="primary" class="site-main background padding">

		<section class="error-404 not-found container">
			<header class="page-header ">
			<img src="<?php echo get_template_directory_uri(); ?>/img/404-error.png" alt="">
			</header><!-- .page-header -->
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #primary -->

<?php
get_footer();
