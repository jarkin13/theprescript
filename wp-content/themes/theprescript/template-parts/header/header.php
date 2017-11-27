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
<div class="container-parent">
  <header class="header header-main mx-auto">
    <nav class="navbar navbar-expand-md">
      <div class="col-auto p-0 mx-auto">
        <div class="nav-brand">
          <a class="logo" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( $blog_name ); ?>"></a>
        </div>
      </div>
      <!--
      <button class="btn btn-link navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
      <div id="nav" class="collapse navbar-collapse">
        <?php
          /*bem_menu(
              'header_main_nav',
              'nav',
              'navbar-nav ml-auto'
          );*/
        ?>
      </div>-->
    </nav>
  </header>
