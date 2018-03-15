<?php mesmerize_get_header(); ?>

<?php
  $catID = get_the_category()[0]->term_id;
  $template = get_field('template', 'category_' . $catID);
  $class = 'blog-page template-' . $template;
  if ($template !== 'products') $class .= ' content';
?>

    <div class="<?php echo $class; ?>">

        <div class="<?php mesmerize_page_content_wrapper_class(); ?>">

          <?php
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
                <?php
                if ( $template === 'products') :
                  get_template_part('cat-templates/category', 'products');
                else :
                  get_template_part('cat-templates/category', 'default');
                endif;
                ?>
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>

<?php get_footer();
