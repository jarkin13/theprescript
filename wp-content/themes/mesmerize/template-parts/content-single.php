<div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
    <div class="post-content-single">
        <div class="post-content-inner">
            <div class="image-container">
              <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail('post-thumbnail', array("class" => "space-bottom-small space-bottom-xs"));
              }

              if( $credit = get_field('photo_credit') ) {
                echo '<p class="photo-credit">Source: '. $credit .'</p>';
              }
              ?>
            </div>
            <div class="post-author">
              <?php
              $userID = get_the_author_meta( 'ID' );
              if( get_field('prescript_editor', 'user_' . $userID) ) :
                echo '<img src="'. get_template_directory_uri() .'/assets/images/small-logo.png" class="prescript-editor"/>';
                echo 'By The Prescript <br />';
              else :
                echo get_avatar( $userID, 32 );
                echo 'By ' . get_the_author() . '<br />';
              endif;
              echo the_time( get_option( 'date_format' ) );
              ?>

              <?php if( !get_field('prescript_editor', 'user_' . $userID) ) : ?>
                <div class="social">
                  <a href=""><i class="fas fa-external-link-alt"></i></a>
                  <a href=""><i class="fab fa-twitter"></i></a>
                  <a href=""><i class="fab fa-instagram"></i></a>
                </div>
              <?php endif; ?>
            </div>
            <?php
            the_content();

            wp_link_pages(array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'mesmerize') . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . esc_html__('Page', 'mesmerize') . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ));
            ?>
        </div>
        <?php echo get_the_tag_list('<p class="tags-list"><i data-cp-fa="true" class="font-icon-25 fa fa-tags"></i>&nbsp;', ' ', '</p>'); ?>
        <?php echo do_shortcode('[wpdevart_facebook_comment curent_url="'. get_permalink() .'" order_type="social" title_text="" title_text_color="#000000" title_text_font_size="22" title_text_position="left" width="100%" bg_color="#d4d4d4" animation_effect="random" count_of_comments="3" ]'); ?>
        <?php wp_related_posts(); ?>
    </div>


    <?php
    the_post_navigation(array(
        'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__('Next:', 'mesmerize') . '</span> ' .
                       '<span class="screen-reader-text">' . esc_html__('Next post:', 'mesmerize') . '</span> ' .
                       '<span class="post-title">%title</span><i class="font-icon-post fa fa-angle-double-right"></i>',
        'prev_text' => '<i class="font-icon-post fa fa-angle-double-left"></i>' .
                       '<span class="meta-nav" aria-hidden="true">' . esc_html__('Previous:', 'mesmerize') . '</span> ' .
                       '<span class="screen-reader-text">' . esc_html__('Previous post:', 'mesmerize') . '</span> ' .
                       '<span class="post-title">%title</span>',
    ));
    ?>
</div>
