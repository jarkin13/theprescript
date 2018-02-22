<div class="col-xs-12 <?php mesmerize_posts_wrapper_class(); ?>">
    <div class="row">
        <?php
        if (have_posts()):
            $i = 0;
            while (have_posts()):
                the_post();
                $i++;
                if ( $i %2 === 0 ) :
                  get_template_part('template-parts/content-product-right', get_post_format());
                else :
                  get_template_part('template-parts/content-product-left', get_post_format());
                endif;
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
