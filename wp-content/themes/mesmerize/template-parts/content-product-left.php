<div class="col-sm-12 col-products text-left">
  <div class="row">
    <div class="col-sm-6">
      <?php mesmerize_print_post_thumb(); ?>
    </div>
    <div class="col-sm-6 align-self-center">
      <h2><?php the_field('brand'); ?></h2>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
</div>
