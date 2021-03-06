<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/gve7oml.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="page-top" class="header-top homepage">
    <?php mesmerize_print_header_top_bar(); ?>
    <?php mesmerize_get_navigation(); ?>
</div>


<div id="page" class="site">
    <div class="header-wrapper">
        <div <?php echo mesmerize_header_background_atts() ?>>
            <?php do_action('mesmerize_before_header_background'); ?>
            <?php mesmerize_print_video_container(); ?>
            <?php mesmerize_print_front_page_header_content(); ?>

            <?php
            mesmerize_print_header_separator('header');
            ?>
            <?php
            do_action('mesmerize_after_header_content');
            ?>
        </div>
    </div>
