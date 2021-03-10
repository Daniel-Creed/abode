<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Abode_Genereal_Store
 */

?>

	<footer id="colophon" class="site-footer">

		<div class="footer-header">
				<img src="<?php echo get_template_directory_uri() . '/images/Abode-Loading-01.png'; ?>" class="db">
		</div>

		<div class="footer">
			<div class="footer-container">
				<div class="legal">
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Shipping & Returns' ) ) ); ?>">Shipping & Returns</a>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Terms & Conditions' ) ) ); ?>">Terms & Conditions</a>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Privacy Policy' ) ) ); ?>">Privacy</a>
				</div>
				<div class="contact-footer">
					<p>Contact Us</p>
					<a href="mailto:info@abodegeneralstore.com" target="_blank">info@abodegeneralstore.com</a>
				</div>
				<div class="social">
					<p>Follow Us</p>
					<a href="https://instagram.com/abodegeneralstore?igshid=5wvrzqhxkva" target="_blank">Instagram</a>
					<a href="#">Facebook</a>
				</div>
				<div class="shop-footer">
					<p>Shop</p>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Brands' ) ) ); ?>">Brands</a>
					<a href="https://abodegeneralstore.com/collections/clothing/ ">Clothing</a>
					<a href="https://abodegeneralstore.com/collections/lifestyle/">Lifestyle</a>
					<a href="https://abodegeneralstore.com/collections/accessories/">Accessories</a>
				</div>
			</div>

			<div class="sign-up-footer">
				<p class="newsletter">Subscribe to our newsletter</p>

				<div id="mc_embed_signup">
				<form action="https://abodegeneralstore.us7.list-manage.com/subscribe/post?u=5076a785000d09241d2770f72&amp;id=fffce17368" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">

							<div class="name-fields">
								<div class="mc-field-group">
									<label for="mce-FNAME"></label>
									<input type="text" value="" name="FNAME" class="FNAME-footer" id="mce-FNAME" placeholder="First Name">
								</div>
								<div class="mc-field-group">
									<label for="mce-LNAME"></label>
									<input type="text" value="" name="LNAME" class="LNAME-footer" id="mce-LNAME" placeholder="Last Name">
								</div>
							</div>

							<div class="email-submit">
								<div class="mc-field-group">
									<label for="mce-EMAIL"></label>
									<input type="email" value="" name="EMAIL" class="required email EMAIL-footer" id="mce-EMAIL" placeholder="Email">
								</div>
								<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button submit-footer"></div>
							</div>

							<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5076a785000d09241d2770f72_fffce17368" tabindex="-1" value=""></div>
						</div>
				</form>
				</div>







				<!-- Begin Mailchimp Signup Form -->
				<!-- <div id="mc_embed_signup-footer">
					<form action="https://abodegeneralstore.us7.list-manage.com/subscribe/post?u=5076a785000d09241d2770f72&amp;id=fffce17368" method="post" id="mc-embedded-subscribe-form-footer" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll" class="fields-footer">
						<label for="mce-EMAIL"></label>
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL-footer" placeholder="Email" required> -->
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5076a785000d09241d2770f72_fffce17368" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="Signup" name="subscribe" id="mc-embedded-subscribe-footer" class="button"></div>
							</div>
					</form>
				</div> -->
				<!--End mc_embed_signup-->
			</div>

		</div>
		<div class="copyright-section">
			<div class="copryright">
				<p>Copyright 2020 Abode General Store</p>
			</div>
			<div class="studio-link">
				<p>Design & Dev by <a href="#">studio such</a></p>
			</div>
		</div>


		<?php
		// wp_nav_menu(
		// 	array(
		// 		'theme_location' => 'menu-2',
		// 		'menu_id'        => 'legal-menu',
		// 		'menu_class'		 => 'footer-menu'
		// 	)
		// );
		?>

		<?php
		// wp_nav_menu(
		// 	array(
		// 		'theme_location' => 'menu-3',
		// 		'menu_id'        => 'footer-menu',
		// 		'menu_class'		 => 'footer-menu'
		// 	)
		// );
		?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
/**
**Plugin Name: Footer Scripts
**/
add_action( 'wp_footer', 'my_footer_scripts' );
function my_footer_scripts(){
	?>
  <script>

	const products = document.querySelectorAll('li.product, .brand-container, .shop-container, .brand-repeater, li.srpw-li')

	const observer = new IntersectionObserver(entries => {
		entries.forEach(entry => {
			if (entry.intersectionRatio >= 0.1) {
				entry.target.classList.add("in-view")
			} // else {
			// 	entry.target.classList.remove("in-view")
			// }
		})
	}, {
		threshold: [0, 0.1, 1]
	})

	products.forEach(product => {
		observer.observe(product)
	})

  </script>
	<!-- <script src="js/marquee.js"></script> -->
<?php
} ?>

<?php wp_footer(); ?>

</body>
</html>
