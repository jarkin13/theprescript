<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/gve7oml.css">
	<?php wp_head(); ?>
  <?php if( is_single() ) : ?>
    <?php
      setup_postdata( $post );
      $content = get_the_content();
    ?>
    <meta property="og:url"           content="<?php echo get_permalink(); ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php echo get_the_title(); ?>" />
    <meta property="og:description"   content="<?php echo substr($content, 0, 300); ?>..." />
    <meta property="og:image"         content="<?php echo the_post_thumbnail_url(); ?>" />
  <?php endif; ?>
</head>

<body <?php body_class(); ?>>

<div  id="page-top" class="header-top">
	<?php mesmerize_print_header_top_bar(); ?>
	<?php mesmerize_get_navigation(); ?>
</div>

<div id="page" class="site">
    <div class="header-wrapper">
        <div <?php echo mesmerize_header_background_atts(); ?>>
            <?php do_action( 'mesmerize_before_header_background' ); ?>
			<?php mesmerize_print_video_container(); ?>
					<?php mesmerize_print_inner_pages_header_content(); ?>
            <?php mesmerize_print_header_separator(); ?>
        </div>
    </div>
