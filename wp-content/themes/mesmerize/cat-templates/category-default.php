<div class="col-xs-12 <?php mesmerize_posts_wrapper_class(); ?>">
  <?php
  if (have_posts()):
    echo do_shortcode('[ajax_load_more category="'. get_the_category()[0]->slug .'" theme_repeater="content.php" transition="masonry" masonry_selector=".post-list-item" css_classes="post-list"]');
  else:
    get_template_part('template-parts/content', 'none');
  endif;
  ?>
</div>
