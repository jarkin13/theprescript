<?php
/**
 * Home page template
 *
 * @package theprescript
 */

 get_header();
?>
  <main class="main d-flex d-flex-fill">
    <section class="section section-hero-image-bg d-flex align-items-md-center" style="background-image: url('<?php echo the_field('home_image', 'option'); ?>')">
      <div class="content mx-auto">
        <div class="section-heading">
          <h3 class="mb-2">We’re launching soon!</h3>
          <p class="mx-auto">The Prescript is a dating advice resource written by real women for real women. Sign up to get notified once we launch!</p>
        </div>
        <div class="row">
          <form class="form form-newsletter col-12 col-md-9 col-lg-4 mx-auto">
            <div class="error text-center">
              <p class="error--user"></p>
              <p class="error--mailchimp"></p>
            </div>
            <div class="row">
              <div class="form-group col-md">
                <label for="first">First Name</label>
                <input type="text" id="first" name="first" class="form-control field" placeholder="First Name" required>
              </div>
              <div class="form-group col-md">
                <label for="last">Last Name</label>
                <input type="text" id="last" name="last" class="form-control field" placeholder="Last Name" required>
              </div>
            </div>
            <div class="form-group mb-0">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" class="form-control field" placeholder="Email Address" required>
            </div>
            <div class="form-footer">
              <button id="subscribe" class="btn btn-sm btn-primary" type="submit" disabled>Subscribe</button>
            </div>
          </form>
        </div>
        <div class="success text-center"></div>
      </div>
    </section>
  </main>
