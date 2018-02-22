<div class="col-xs-12 <?php mesmerize_posts_wrapper_class(); ?>">
    <div class="post-list row">
        <?php
        if (have_posts()):
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
