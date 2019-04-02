



<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package carbonclass
 */

get_header(); ?>

<main id="primary" class="site-main background cc-bg bg1">

	<section class="cc_articles">
		<h2 class="title">ARTICLES <span>What our customers say</span></h2>

		<div class="articles">
		<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>
			<div class="article">

				<div class="box">
					<a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
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
						<span><?php echo get_the_date('M j, Y') ?></span></h3>

							<h4>
								<?php the_title(); ?>
							</h4>
							<p>
								<?php the_excerpt(); ?>
							</p>
						</div><!-- /.details -->
					</a>
				</div><!-- /.box -->

			</div><!-- /.article -->
			<?php endwhile; endif;  wp_reset_postdata(); ?>
		</div><!-- /.articles -->

	</section>

</main><!-- #primary -->

<?php
get_footer();