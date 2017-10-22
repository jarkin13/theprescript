<?php
/**
 * Main header bar
 *
 * @package theprescript
 */

?>

<?php
  $blog_name = get_bloginfo( 'name' );
  $blog_description = get_bloginfo( 'description' );
?>
<header class="header header-main mx-auto">
  <nav class="navbar navbar-expand-md">
    <div class="col-auto">
      <div class="nav-brand">
        <a class="nav-brand__logo-link" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( $blog_name ); ?>">
          <img class="nav-brand__logo-img" src="<?php echo esc_url( IMAGE_URL . 'logo.svg' ); ?>" title="<?php echo esc_attr( $blog_name ); ?> - <?php echo esc_attr( $blog_description ); ?>" alt="<?php echo esc_attr( $blog_name ); ?> - <?php echo esc_attr( $blog_description ); ?>" />
        </a>
      </div>
    </div>
    <button class="btn btn-link navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
    <div id="nav" class="collapse navbar-collapse">
      <?php
        bem_menu(
            'header_main_nav',
            'nav',
            'navbar-nav ml-auto'
        );
      ?>
    </div>
  </nav>
</header>
