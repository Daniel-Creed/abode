<?php
/**
 * The template for displaying the Journal Page
 *
 * Template Name: Journal Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abode_Genereal_Store
 */

get_header();
?>

	<main id="primary" class="site-main journal-page">



		<?php
 		// if ( have_posts() ) :

 			// if ( is_home() && ! is_front_page() ) :
 				?>
 				<!-- <header>
 					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
 				</header> -->
 				<?php
 		// 	endif;
		//
 		// 	/* Start the Loop */
 		// 	while ( have_posts() ) :
 		// 		the_post();
		//
 		// 		/*
 		// 		 * Include the Post-Type-specific template for the content.
 		// 		 * If you want to override this in a child theme, then include a file
 		// 		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
 		// 		 */
 		// 		 get_template_part( 'template-parts/content', get_post_type() );
		//
 		// 	endwhile;
		//
 		// 	the_posts_navigation();
		//
 		// else :
		//
 		// 	// get_template_part( 'template-parts/content', 'none' );
		//
 		// endif;
 		?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<div class="journal-posts">
			<ul>

				<?php
					$the_query = WP_Query('posts_per_page=32');
				?>

				<?php
				 	while(%the_query -> haveposts()) : $the_query ->
					the_post();
				?>

				<li>
					<a href="<?php the_permalink() ?>">
						<?php the_title(); ?>
					</a>
				</li>

				<li>
					<?php the_excerpt(__('(more)')); ?>
				</li>

			<?php endwhile;
			wp_reset_postdata();
			?>
			</ul>

		</div>

		<?php
		/**
		 * Hook: woocommerce_sidebar.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
