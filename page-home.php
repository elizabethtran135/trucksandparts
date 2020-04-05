<?php
/*
Template Name: Home Page Layout
Template Post Type: page
*/
get_header(); ?>
  <div class="row">
    <div class="col-md-12 container1">
      <?php dynamic_sidebar('hero-image'); ?>
      <div class="heroleft">
        <h1>NEW & USED</h1>
        <h1>Trucks for Sale</h1>
        <button class="pink">CALL</button>
      </div>
    </div>
  </div>
  <main class="col-md-12">

    <div class="row justify-content-center">
      <div class="col-md-9">
        <?php dynamic_sidebar('testimonial-home'); ?>
      </div>
    </div>

    <div class="trucktypes">
      <h2>TRUCK TYPES</h2>
      <p>New, Used, or Reconditioned</p>
      <div class="row text-center">
        <div class="col-md-3 pb-2">
          <?php dynamic_sidebar('front-loader-home'); ?>
          <a href="http://www.model4miracles.com/project/trucks/" class="btn btn-outline-light ttt">FRONT LOADER</a>
        </div>
        <div class="col-md-3 pb-2">
          <?php dynamic_sidebar('rear-loader-home'); ?>
          <a href="http://www.model4miracles.com/project/trucks/" class="btn btn-outline-light justify-content-center">REAR LOADER</a>
        </div>
        <div class="col-md-3 pb-2">
          <?php dynamic_sidebar('side-loader-home'); ?>
          <a href="http://www.model4miracles.com/project/trucks/" class="btn btn-outline-light">SIDE LOADER</a>
        </div>
        <div class="col-md-3 pb-2">
          <?php dynamic_sidebar('roll-off-home'); ?>
          <a href="http://www.model4miracles.com/project/trucks/" class="btn btn-outline-light">ROLL OFF</a>
        </div>
      </div>
    </div>

    <div class="trucktypes">
      <div class="row text-center">
        <div class="col-md-3 pb-2">
          <?php dynamic_sidebar('container-delivery-home'); ?>
          <a href="http://www.model4miracles.com/project/trucks/" class="btn btn-outline-light">CONTAINER DELIVERY</a>
        </div>
        <div class="col-md-3 pb-2">
          <?php dynamic_sidebar('grapple-boom-home'); ?>
          <a href="http://www.model4miracles.com/project/trucks/" class="btn btn-outline-light">GRAPPLE BOOM</a>
        </div>
        <div class="col-md-3 pb-2">
          <?php dynamic_sidebar('concrete-mixer-home'); ?>
          <a href="http://www.model4miracles.com/project/trucks/" class="btn btn-outline-light">CONCRETE MIXER</a>
        </div>
        <div class="col-md-3 pb-2">
          <?php dynamic_sidebar('cab-chasis-home'); ?>
          <a href="http://www.model4miracles.com/project/trucks/" class="btn btn-outline-light">CAB & CHASIS</a>
        </div>
      </div>
    </div>

    <div class="locations">
      <h2>LOCATIONS</h2>
      <div class="row">
        <div class="col-md-6">
          <?php dynamic_sidebar('map-tampa-home'); ?>
          <p>1015 South 50th St. Tampa, FL 33619</p>
        </div>
        <div class="col-md-6">
          <?php dynamic_sidebar('map-glenmoore-home'); ?>
          <p>1620 Horseshoe Pike Glenmoore, PA 19343</p>
        </div>
    </div>

    </div>
  </main>

<?php get_footer(); ?>
