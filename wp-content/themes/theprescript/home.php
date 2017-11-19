<?php
/**
 * Home page template
 *
 * @package theprescript
 */

 get_header();
?>

<section class="section">
  <div class="container-fluid">
    <div class="hero hero-image-bg text-uppercase mx-auto" style="background-image: url('<?php echo the_field('home_image', 'option'); ?>')">
      <h1>Real Women <br> with Real Advice</h1>
      <div class="row">
        <form class="form col-10 col-lg-8 col-xl-6 mx-auto">
          <div class="row">
            <div class="form-group col-md">
              <label for="first">First Name</label>
              <input id="first" name="first" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group col-md">
              <label for="last">Last Name</label>
              <input id="last" name="last" class="form-control" placeholder="Last Name">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
