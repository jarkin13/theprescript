<?php mesmerize_get_header(); ?>

    <div class="content blog-page">
      <div class="<?php mesmerize_page_content_wrapper_class(); ?>">

        <?php
          $catID = get_the_category()[0]->term_id;
          if ( get_field('include_menu', 'category_' . $catID) ) :
            wp_nav_menu(array(
                'menu_id'  => get_field('include_menu', 'category_' . $catID),
                'menu_id'         => 'blog_menu',
                'container_id'    => 'mainmenu_container',
                'container_class' => 'row'
            ));
          endif;
        ?>

        <div class="row">
          <div class="col-xs-12 <?php mesmerize_posts_wrapper_class(); ?>">
            <?php
            if (have_posts()):
                $categories = [];
                while (have_posts()):
                    the_post();
                    //get_template_part('template-parts/content', get_post_format());
                    $categories[get_the_category()[0]->slug] = get_the_category()[0]->slug;
                endwhile;
                echo do_shortcode('[ajax_load_more category="'. implode(",", $categories) .'" theme_repeater="content.php" transition="masonry" masonry_selector=".post-list-item" css_classes="post-list"]');
            else:
                get_template_part('template-parts/content', 'none');
            endif;
            ?>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

<?php get_footer();
