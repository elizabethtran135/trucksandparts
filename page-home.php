<?php
/*
Template Name: Home Page Layout
Template Post Type: page
*/
get_header(); ?>
  <div class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('hero-image'); ?>
    </div>
  </div>
  <div class="container">
    <main class="col-md-12">
      <div class="row">
        <div class="col-md-12 p-4">
          <?php dynamic_sidebar('about-us'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <?php dynamic_sidebar('bottom-left'); ?>
        </div>
        <div class="col-md-4">
          <?php dynamic_sidebar('bottom-middle'); ?>
        </div>
        <div class="col-md-4">
          <?php dynamic_sidebar('bottom-right'); ?>
        </div>
      </div>
    </main>
  </div>

<?php get_footer(); ?>
