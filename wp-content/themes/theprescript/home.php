<?php
/**
 * Home page template
 *
 * @package theprescript
 */

 get_header();
?>
  <!--flexbox-item flexbox-item-fill-area flexbox-item-grow -->
  <main class="main d-flex d-flex-fill">
    <!-- section section-hero-image-bg flexbox-item-grow flexbox-item-grow-content d-flex -->
    <section class="section section-hero-image-bg d-flex align-items-md-center" style="background-image: url('<?php echo the_field('home_image', 'option'); ?>')">
      <div class="content mx-auto">
        <div class="section-heading">
          <h3 class="mb-2">We’re launching soon!</h3>
          <p class="mb-0">Sign up to get notified & other great dating tips.</p>
        </div>
        <div class="row">
          <form class="form form-newsletter col-10 col-md-8 col-lg-4 mx-auto">
            <div class="row">
              <div class="form-group col-md">
                <label for="first">First Name</label>
                <input type="text" id="first" name="first" class="form-control" placeholder="First Name">
              </div>
              <div class="form-group col-md">
                <label for="last">Last Name</label>
                <input type="text" id="last" name="last" class="form-control" placeholder="Last Name">
              </div>
            </div>
            <div class="form-group mb-0">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-footer">
              <button class="btn btn-sm btn-primary ">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
