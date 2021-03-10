<?php
/**
 * The template for displaying the brands page
 *
 * Template Name: Brands Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abode_Genereal_Store
 */

get_header();
?>

	<main id="primary" class="site-main brands-page">

		<?php  if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<!-- <h1 class="woocommerce-products-header__title about-page-title marquee-our-brands">
				<span class="marquee">
					Our Brands
				</span>
			</h1> -->

		<?php endif; ?>
		<?php
//	//		the_post();

	//		get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
	//		if ( comments_open() || get_comments_number() ) :
	//			comments_template();
		//	endif;

	//	endwhile; // End of the loop.
		?>


<div class="brands-container">

	<div class="brands-repeater-container">
		<?php

			if( have_rows('brand_repeater') ):
				while( have_rows('brand_repeater') ): the_row();

				$link = get_sub_field('link');
		?>


						<div class="brand-repeater" style="
							<?php	$image = get_sub_field('image'); if( !empty( $image ) ): ?>
								background-image: url(<?php echo esc_url($image['url']); ?>);
							<?php endif; ?>
						">
							<div class="brand-repeater-link">
								<?php if($link): ?>
									<a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?> &#8594;</a>
								<?php endif; ?>
							</div>
						</div>

					<?php
				endwhile;
			endif;
		 ?>
	</div>
</div>
	</main> <!-- #main -->

<?php
// get_sidebar();
get_footer();
