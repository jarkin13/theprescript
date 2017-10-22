<?php
/**
 * Head section for meta data
 *
 * @package theprescript
 */

?>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<!-- Mobile chrome -->
<meta name="theme-color" content="#C3151B">

<!-- Win phone Meta -->
<meta name="application-name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>
<meta name="msapplication-TileColor" content="#C3151B"/>

<!-- Apple -->
<meta name="apple-mobile-web-app-title" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#C3151B">
<link rel="apple-touch-startup-image" href="<?php echo esc_url( IMAGE_URL . 'logo-color.svg' ); ?>">

<!-- Libraries -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
