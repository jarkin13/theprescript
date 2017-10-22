<?php
/**
 * Home page template
 *
 * @package theprescript
 */

 get_header();
?>

<header class="header header-hero mx-auto" style="background-image: url('<?php echo the_field('home_image', 'option'); ?>')">
  <h1>Real Women <br> with Real Advice</h1>
  <form>
    <label class="custom-control custom-radio">
      <span class="custom-control-description">Are you ..</span>
    </label>
    <label class="custom-control custom-radio">
      <input id="radio1" name="radio" type="radio" value="relationship" class="custom-control-input">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">In a Relationship</span>
    </label>
    <label class="custom-control custom-radio">
      <input id="radio2" name="radio" type="radio" value="single" class="custom-control-input">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Single</span>
    </label>
    <div class="form-group">
      <button type="submit" class="btn btn-light">
        Tell Us Your Story
      </button>
    </div>
  </form>
</header>
