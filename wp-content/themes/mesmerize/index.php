<?php
  mesmerize_get_header();
  $catID = get_the_category()[0]->term_id;
  $template = get_field('template', 'category_' . $catID)
?>
    <div class="content blog-page template-<?php echo $template; ?>">
        <div class="<?php mesmerize_page_content_wrapper_class(); ?>">
            <?php
            if ( get_field('include_menu', 'category_' . $catID) ) :
              wp_nav_menu(array(
                  'menu_id'  => get_field('include_menu', 'category_' . $catID),
                  'menu_id'         => 'blog_menu',
                  'container_id'    => 'mainmenu_container',
                  'container_class' => 'row'
              ));
            endif; ?>
            <div class="row">
                <div class="col-xs-12 <?php mesmerize_posts_wrapper_class(); ?>">
                    <div class="post-list row">
                        <?php
                        if ( $template === 'products') :
                          $i = 0;
                          while (have_posts()):
                              $i++;
                              the_post();
                              if ( $i %2 === 0 ) :
                                get_template_part('template-parts/content-products-right', get_post_format());
                              else :
                                get_template_part('template-parts/content-products-left', get_post_format());
                              endif;
                          endwhile;
                        elseif (have_posts()):
                            while (have_posts()):
                                the_post();
                                get_template_part('template-parts/content', get_post_format());
                            endwhile;
                        else:
                            get_template_part('template-parts/content', 'none');
                        endif;
                        ?>
                    </div>
                    <div class="navigation-c">
                        <?php
                        if (have_posts()):
                            mesmerize_print_pagination();
                        endif;
                        ?>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

<?php get_footer();
