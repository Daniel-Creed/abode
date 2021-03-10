<div class="search-meta flex absolute">
  <!--<a href="<?php  ?>" class="db">
    Search
  </a>
   <a href="<?php echo cart_url() ?>" class="db">
    Cart
  </a> -->

  <a class="cart-name" href="<?php echo wc_get_cart_url(); ?>">Cart</a>

  <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> </a>

</div>
