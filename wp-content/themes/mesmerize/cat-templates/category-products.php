<?php $term_id = get_the_category()[0]->term_id; ?>

<div class="col-xs-12 <?php mesmerize_posts_wrapper_class(); ?>">
  <div class="text-center">
    <?php echo category_description(); ?>
  </div>
  <div class="row row-main">

    <?php
    $categories = get_categories( array(
        'orderby' => 'name',
        'parent'  => $term_id
    ) );

    $c = 0;
    foreach ( $categories as $category ) {
        printf( '<a href="%1$s">%2$s</a><br />',
            esc_url( get_category_link( $category->term_id ) ),
            esc_html( $category->name )
        );
        global $query_string;
        $productTemplate = 'right';
        if ($c % 2 == 0) $productTemplate = 'left';

        $posts = query_posts($query_string.'&cat=' . $category->term_id . ''); ?>
          <?php if (have_posts()) : ?>
            <div id="<?php echo $category->slug; ?>" class="carousel slide">
              <div class="carousel-inner">
                <?php
                $i = 0;
                $indicators = '';
                ?>
                <?php while (have_posts()) : the_post(); ?>
                  <?php
                  $active = '';
                  if ($i == 0) $active = ' active';
                  ?>

                  <div class="carousel-item <?php echo $active; ?>">
                    <?php get_template_part( 'template-parts/content-product-'. $productTemplate, 'page' ); ?>
                  </div>

                  <?php
                  $indicators .= '<li data-target="#' . $category->slug . '" data-slide-to="'. $i .'" class="'. $active .'"></li>';
                  $i++; ?>
                <?php endwhile; ?>
                <ol class="carousel-indicators">
                   <?php echo $indicators; ?>
                 </ol>
              </div>
            </div>
            <?php $c++; ?>

          <?php endif; ?>

        <?php wp_reset_query();
    }

    /*if (have_posts()):
      $i = 0;
      echo do_shortcode('[ajax_load_more category="' . get_the_category()[0]->slug .' " theme_repeater="content-product.php" container_type="div" transition_container="false"]');
    else:
      get_template_part('template-parts/content', 'none');
    endif;*/
    ?>

  </div>
</div>
