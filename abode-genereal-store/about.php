<?php
/**
 * The template for displaying the About Page
 *
 * Template Name: About Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abode_Genereal_Store
 */

get_header();
?>

	<main id="primary" class="site-main about-page">

		<?php // if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<!-- <h1 class="woocommerce-products-header__title page-title about-page-title">
				<span class="marquee">
					About
				</span>
			</h1> -->
		<?php //endif; ?>

		<?php
//		while ( have_posts() ) :
	//		the_post();

	//		get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
	//		if ( comments_open() || get_comments_number() ) :
	//			comments_template();
	//		endif;

	//	endwhile; // End of the loop.
		?>

		<div class="about-page-content">
			<div class="about-image">
				<?php
					$image = get_field('about_image');
					if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
			</div>

			<div class="about-container">
				<div class="about-copy">
					<?php the_field('about_copy'); ?>

					<div class="about-contact">
						<h2><?php the_field('contact_title'); ?> &#8595;</h2>
						<div class="about-contact-info">
							<a href="mailto:info@abodegeneralstore.com"><?php the_field('contact_email'); ?></a>
							<a href="https://instagram.com/abodegeneralstore?igshid=5wvrzqhxkva" target="
							"><?php the_field('instagram'); ?></a>
						</div>
					</div>
				</div>
			</div>

		</div>


	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
