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

<main id="primary" class="site-main background bike">
<section class="cc_articles">
		<h2 class="title">ARTICLES <span>What our customers say</span></h2>

		<div class="articles">
		<?php $rainbirdBlogs = new WP_Query('post_type=blogs&posts_per_page=-1&orderby=date&order=ASC'); ?>
			<?php if ($rainbirdBlogs->have_posts() ) : while ($rainbirdBlogs->have_posts() ) : $rainbirdBlogs->the_post(); ?>

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
