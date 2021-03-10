<?php
/**
 * Abode Genereal Store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Abode_Genereal_Store
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'abode_genereal_store_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function abode_genereal_store_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Abode Genereal Store, use a find and replace
		 * to change 'abode-genereal-store' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'abode-genereal-store', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'abode-genereal-store' ),
				'menu-2' => esc_html__( 'Legal', 'abode-genereal-store' ),
				'menu-3' => esc_html__( 'Footer', 'abode-genereal-store' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'abode_genereal_store_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'abode_genereal_store_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function abode_genereal_store_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'abode_genereal_store_content_width', 640 );
}
add_action( 'after_setup_theme', 'abode_genereal_store_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function abode_genereal_store_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'abode-genereal-store' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'abode-genereal-store' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'abode_genereal_store_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function abode_genereal_store_scripts() {
	wp_enqueue_style( 'abode-genereal-store-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'abode-genereal-store-style', 'rtl', 'replace' );

	wp_enqueue_style( 'abode-genereal-store-tachyons', get_template_directory_uri() . '/css/a-tachyons.css');

	wp_enqueue_style( 'abode-genereal-store-fonts', get_template_directory_uri() . '/css/fonts.css');

	wp_enqueue_style( 'abode-genereal-store-custom', get_template_directory_uri() . '/css/custom.css');

	wp_enqueue_script( 'abode-genereal-store-marquee', get_template_directory_uri() . '/js/marquee.js');

	// wp_enqueue_script( 'abode-genereal-store-fade', get_template_directory_uri() . '/js/fade.js');

	// wp_enqueue_script( 'abode-genereal-store-marquee', get_template_directory_uri() . '/js/in-view.js');

	function ple_hook_javascript() {
  ?>
  <script>
  // Your JavaScript code goes here...
  </script>
  <?php
}

add_action( 'wp_head', 'ple_hook_javascript' );


	wp_enqueue_script( 'abode-genereal-store-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'abode_genereal_store_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>

	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"> <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?> </a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}

function store_mall_wc_empty_cart_redirect_url() {
        $url = 'https://abodegeneralstore.com/collections/new-arrivals/'; // change this link to your need
        return esc_url( $url );
    }
add_filter( 'woocommerce_return_to_shop_redirect', 'store_mall_wc_empty_cart_redirect_url' );


// add_filter('woocommerce_default_address_fields', 'override_default_address_checkout_fields', 20, 1);
// function override_default_address_checkout_fields( $address_fields ) {
//     $address_fields['first_name']['placeholder'] = 'First Name';
//     $address_fields['last_name']['placeholder'] = 'Last Name';
// 		$address_fields['company']['placeholder'] = 'Company (Optional)';
//     $address_fields['address_1']['placeholder'] = 'Address Line 1';
// 		$address_fields['address_2']['placeholder'] = 'Address Line 2';
//     $address_fields['state']['placeholder'] = 'County';
//     $address_fields['postcode']['placeholder'] = 'Eircode';
//     $address_fields['city']['placeholder'] = 'City';
// 		$address_fields['phone_number']['placeholder'] = 'Phone Number';
// 		// $address_fields['email_address']['placeholder'] = 'Email';
//     return $address_fields;
// }


function kia_add_script_to_footer(){
    if( ! is_admin() ) { ?>
    <script>
    jQuery(document).ready(function($){
			$('body').on('click', '.minus', function (e) {
    var $inputQty = $(this).parent().find('input.qty');
    var val = parseInt($inputQty.val());
    var step = $inputQty.attr('step');
    step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
    if (val > 0) {
        $inputQty.val(val - step).change();
    }
});
$('body').on('click', '.plus', function (e) {
    var $inputQty = $(this).parent().find('input.qty');
    var val = parseInt($inputQty.val());
    var step = $inputQty.attr('step');
    step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
    $inputQty.val(val + step).change();
});
});
</script>
<?php }
}
add_action( 'wp_footer', 'kia_add_script_to_footer' );

if ( function_exists( 'add_image_size' ) ) {
 add_image_size( 'custom-thumb', 1080, 1080 ); // 100 wide and 100 high
}

add_filter('woocommerce_get_availability', 'availability_filter_func');
function availability_filter_func($availability)
{
$availability['availability'] = str_ireplace('Out of stock', 'Sold Out', $availability['availability']);
return $availability;
}
