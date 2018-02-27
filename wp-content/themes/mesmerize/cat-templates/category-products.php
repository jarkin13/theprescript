<?php $catID = get_the_category()[0]->term_id; ?>
<div class="col-xs-12 <?php mesmerize_posts_wrapper_class(); ?>">
  <div class="text-center">
    <?php echo category_description( $category_id ); ?>
  </div>
  <div class="row row-main">
      <?php
      if (have_posts()):
        $i = 0;
        echo do_shortcode('[ajax_load_more category="' . get_the_category()[0]->slug .' " theme_repeater="content-product.php" container_type="div" transition_container="false"]');
      else:
        get_template_part('template-parts/content', 'none');
      endif;
      ?>
  </div>
</div>
