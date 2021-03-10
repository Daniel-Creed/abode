<?php
/**
 * The template for displaying the Homepage
 *
 * Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abode_Genereal_Store
 */

 get_header();
 ?>

 <div class="intro">
   <div class="intro-logo">
     <img src="<?php// echo get_template_directory_uri() . '/images/Abode-Loading-01.png'; ?>" class="db">
   </div>
 </div>

 	<main id="primary" class="site-main">

 		<?php
 		// if ( have_posts() ) :
    //
 		// 	if ( is_home() && is_front_page() ) :
 		// 		?>
 		<!-- // 		<header>
 		// 			<h1 class="page-title screen-reader-text"><?php //single_post_title(); ?></h1>
 		// 		</header> -->
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
 		// 		// get_template_part( 'template-parts/content', get_post_type() );
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

 		<section class="hero flex items-center justify-center appear-image" style="

 			<?php if( get_field('hero_image') ); ?>
 				background-image: url(<?php the_field('hero_image'); ?>);
 		">
 			<div class="hero-content appear">
 				<h1><?php the_title() ?></h1>

 				<?php
 				$link = get_field('hero_link');
 				if( $link ): ?>
 				    <a class="button appear" href="<?php echo esc_url( $link ); ?>">Shop Now &#8594;</a>
 				<?php endif; ?>
 			</div>
 		</section>

 		<!-- <div class="divider"></div> -->

    <section class="selected-brands">
   		<h1 class="woocommerce-products-header__title marquee-brands">
   		  <span class="marquee">Selected Brands</span>
   		</h1>

   		<div id="brands" class="brands">
   			<div class="brand-container">
   				<div class="brand-one" style="
   				<?php if( get_field('brand_one_image') ); ?>
   					background-image: url(<?php the_field('brand_one_image'); ?>);
   				">
   					<?php
   						$brand_one_link = get_field('brand_one_link')
   					?>

            <?php if( get_field('brand_one_logo') ): ?>
                <img src="<?php the_field('brand_one_logo'); ?>" />
            <?php endif; ?>

   					<a role="button" class="brand-button" href="<?php echo $brand_one_link['url']; ?>">
   						<?php echo $brand_one_link['title']; ?> &#8594;
   					</a>
   					<?php //endif; ?>
   				</div>
   			</div>

   			<div class="brand-container">
   				<div class="brand-two" style="
   				<?php if( get_field('brand_two_image') ); ?>
   					background-image: url(<?php the_field('brand_two_image'); ?>);
   				">

          <?php if( get_field('brand_two_logo') ): ?>
              <img src="<?php the_field('brand_two_logo'); ?>" />
          <?php endif; ?>

          <?php
            $brand_two_link = get_field('brand_two_link')
          ?>
          <a role="button" class="brand-button" href="<?php echo $brand_two_link['url']; ?>">
            <?php echo $brand_two_link['title']; ?> &#8594;
          </a>
          <?php //endif; ?>
   				</div>
   			</div>

   			<div class="brand-container">
   				<div class="brand-three" style="
   				<?php if( get_field('brand_three_image') ); ?>
   					background-image: url(<?php the_field('brand_three_image'); ?>);
   				">

          <?php if( get_field('brand_three_logo') ): ?>
              <img src="<?php the_field('brand_three_logo'); ?>" />
          <?php endif; ?>

          <?php
            $brand_three_link = get_field('brand_three_link')
          ?>
          <a role="button" class="brand-button" href="<?php echo $brand_three_link['url']; ?>">
            <?php echo $brand_three_link['title']; ?> &#8594;
          </a>
          <?php //endif; ?>
   				</div>
   			</div>

   			<div class="brand-container">
   				<div class="brand-four" style="
   				<?php if( get_field('brand_four_image') ); ?>
   					background-image: url(<?php the_field('brand_four_image'); ?>);
   				">

          <?php if( get_field('brand_four_logo') ): ?>
              <img src="<?php the_field('brand_four_logo'); ?>" />
          <?php endif; ?>

          <?php
            $brand_four_link = get_field('brand_four_link')
          ?>
          <a role="button" class="brand-button" href="<?php echo $brand_four_link['url']; ?>">
            <?php echo $brand_four_link['title']; ?> &#8594;
          </a>
          <?php //endif; ?>
   				</div>
   			</div>
   		</div>
      <div class="all-brands">
        <a href="https://abodestore.flywheelsites.com/brands/">All Brands &#8594;</a>
      </div>
    </section>

    <section class="about-intro">
      <p>The clothes we wear are an extension of ourselves and our beliefs. At Abode, we carefully select brands we love that represent consciousness, longevity, and authenticity.</p>
    </section>

 		<section class="shop">
 			<div class="shop-container" style="
 				<?php if( get_field('shop_one_image') ); ?>
 					background-image: url(<?php the_field('shop_one_image'); ?>);
 			">
 				<div class="shop-one">
          <?php
            $shop_one_link = get_field('shop_one_link')
          ?>
          <a role="button" class="shop-button" href="<?php echo $shop_one_link['url']; ?>">
            <?php echo $shop_one_link['title']; ?> &#8594;
          </a>
 				</div>
 			</div>
 			<div class="shop-container" style="
 				<?php if( get_field('shop_two_image') ); ?>
 					background-image: url(<?php the_field('shop_two_image'); ?>);
 			">
 				<div class="shop-two">
          <?php
            $shop_two_link = get_field('shop_two_link')
          ?>
          <a role="button" class="shop-button" href="<?php echo $shop_two_link['url']; ?>">
            <?php echo $shop_two_link['title']; ?> &#8594;
          </a>
 				</div>
 			</div>
 			<div class="shop-container" style="
 				<?php if( get_field('shop_three_image') ); ?>
 					background-image: url(<?php the_field('shop_three_image'); ?>);
 			">
 				<div class="shop-three">
          <?php
            $shop_three_link = get_field('shop_three_link')
          ?>
          <a role="button" class="shop-button" href="<?php echo $shop_three_link['url']; ?>">
            <?php echo $shop_three_link['title']; ?> &#8594;
          </a>
 				</div>
 			</div>
 		</section>

    <section class="sign-up-home">
      <div class="sign-up-content">
        <div class="sign-up-copy">
          <p>Be the first to hear all things Abode.</p>
        </div>
        <p class="below">Signup Below &#8595;</p>
        <div class="sign-up-form">

          <!-- Begin Mailchimp Signup Form -->
          <div id="mc_embed_signup">
          <form action="https://abodegeneralstore.us7.list-manage.com/subscribe/post?u=5076a785000d09241d2770f72&amp;id=fffce17368" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">

                <div class="name-fields">
                  <div class="mc-field-group">
                    <label for="mce-FNAME"></label>
                    <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
                  </div>
                  <div class="mc-field-group">
                    <label for="mce-LNAME"></label>
                    <input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last Name">
                  </div>
                </div>

                <div class="mc-field-group">
                	<label for="mce-EMAIL"></label>
                	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
                </div>

                <div id="mce-responses" class="clear">
            		    <div class="response" id="mce-error-response" style="display:none"></div>
            		      <div class="response" id="mce-success-response" style="display:none"></div>
            	  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5076a785000d09241d2770f72_fffce17368" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
          </form>
          </div>

<!--End mc_embed_signup-->













          <!-- Begin Mailchimp Signup Form -->
          <!-- <div id="mc_embed_signup">
            <form action="https://abodegeneralstore.us7.list-manage.com/subscribe/post?u=5076a785000d09241d2770f72&amp;id=fffce17368" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
            	<label for="mce-EMAIL"></label>
            	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required> -->
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5076a785000d09241d2770f72_fffce17368" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Signup" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
          </div> -->
          <!--End mc_embed_signup-->
        </div>
      </div>
    </section>

    <section class="journal-conatiner flex items-center justify-center" style="
      <?php if( get_field('journal_image') ); ?>
        background-image: url(<?php the_field('journal_image'); ?>);
    ">

    <div class="journal">
      <?php
        $journal_link = get_field('journal_link')
      ?>
      <a role="button" class="journal-button" href="<?php echo $journal_link['url']; ?>">
        <?php echo $journal_link['title']; ?> &#8594;
      </a>
    </div>
    </section>
    <!-- <div class="footer-divider"></div> -->

<?php
// get_sidebar();
get_footer();
