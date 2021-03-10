<div class="brands-container min-vh-100">
  <?php
    if( have_rows('brands_') );
      while ( have_rows('brands_') ): the_row();
   ?>
   <div class="brand-block">
     <img src="<?php echo get_field('our_brands_image')['url'] ?>" alt="">
   </div>

 <?php endwhile;?>
 <?php //endif; ?>


</div>
