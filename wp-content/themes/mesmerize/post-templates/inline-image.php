<?php
/*
Template Name: Inline Image
Template Post Type: post
*/

mesmerize_get_header(); ?>
    <div class="content post-page">
        <div class="gridContainer">
            <div class="row">
                <div class="col-xs-12 <?php mesmerize_posts_wrapper_class(); ?>">
                    <div class="post-item">
						<?php
						if ( have_posts() ):
							while ( have_posts() ):
								the_post(); ?>
                <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                    <div class="post-content-single">
                        <div class="post-content-inner">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('post-thumbnail', array("class" => "space-bottom-small space-bottom-xs inline-image"));
                            }
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

							<?endwhile;
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
                    </div>
                </div>
				<?php get_sidebar(); ?>
            </div>
        </div>

    </div>
<?php get_footer(); ?>
