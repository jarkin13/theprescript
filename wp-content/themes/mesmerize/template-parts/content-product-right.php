<div class="col-sm-12 col-products text-left">
  <div class="d-flex row">
    <div class="col-12 col-sm-6 order-xs-0 order-sm-1">
      <?php mesmerize_print_post_thumb("", get_field('product_link')); ?>
    </div>
    <div class="col-12 col-sm-6 align-self-center order-xs-1 order-sm-0">
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
