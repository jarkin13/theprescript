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
  <div class="social social--mobile">
    <div class="d-flex justify-content-center">
      <div class="p-2"><a href="//instagram.com/the.prescript" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
      <div class="p-2"><a href="//www.facebook.com/The-Prescript-2029491183952958/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></div>
    </div>
  </div>
  <header class="header header-main">
    <nav class="navbar navbar-expand-md justify-content-between">
      <div class="col-auto social social--web"></div>
      <div class="col">
        <div class="nav-brand">
          <a class="logo mx-auto" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( $blog_name ); ?>"></a>
        </div>
      </div>
      <div class="col-auto social social--web p-0">
        <a href="//instagram.com/the.prescript" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="//www.facebook.com/The-Prescript-2029491183952958/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
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
