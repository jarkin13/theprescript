<?php
$args = array(
  'numberposts' => -1,
  'category' =>  get_the_category( $post->ID )[0]->term_id
);
$product_posts = get_posts($args);
$product_id = get_the_ID();
$product_order;
?>
<div>
  <?php

  for( $i = 0; $i < count($product_posts); $i++ ) {
    if( $product_posts[$i]->ID === $product_id ) {
      $product_order = $i;
    };
  };

  if ( $product_order %2 === 0 ) : ?>
    <div class="col-sm-12 col-products text-left">
      <div class="row">
        <div class="col-sm-6 align-self-center">
          <h2><?php the_field('brand'); ?></h2>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <div class="col-products-footer">
            <a class="button button-outline" href="<?php the_field('product_link'); ?>" target="_blank">CHECK OUT</a>
            <div class="social a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="<?php the_title(); ?>">
              <a class="a2a_button_facebook"></a>
              <a class="a2a_button_twitter"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <?php mesmerize_print_post_thumb("", get_field('product_link')); ?>
        </div>
      </div>
    </div>

  <?php else : ?>

    <div class="col-sm-12 col-products text-left">
      <div class="row">
        <div class="col-sm-6">
          <?php mesmerize_print_post_thumb("", get_field('product_link')); ?>
        </div>
        <div class="col-sm-6 align-self-center">
          <h2><?php the_field('brand'); ?></h2>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <div class="col-products-footer">
            <a class="button button-outline" href="<?php the_field('product_link'); ?>" target="_blank">CHECK OUT</a>
            <div class="social a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="<?php the_title(); ?>">
              <a class="a2a_button_facebook"></a>
              <a class="a2a_button_twitter"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script async src="https://static.addtoany.com/menu/page.js"></script>

  <?php endif; ?>

</div>
