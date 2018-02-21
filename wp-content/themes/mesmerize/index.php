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
                              $col = 'col-sm-';
                              if ( $i === 1 || $i %4 === 0 || ($i - 1) %4 === 0 ) :
                                $col .= '9';
                              else :
                                $col .= '3';
                              endif;

                              the_post();

                              echo '<div class="' . $col . '">';
                                get_template_part('template-parts/content-products', get_post_format());
                              echo '</div>';
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
