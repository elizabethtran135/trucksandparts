<?php
/*
Template Name: Right Sidebar
Template Post Type: page, post
*/
get_header(); ?>
<div class="row">
  <div class="col-md-12 container1">
    <?php dynamic_sidebar('hero-image'); ?>
    <h1 class="centered">ABOUT</h1>
  </div>
</div>
  <div class="container">
    <div class="row">
      <main class="col-md-9">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>
              <h2 class="entry-title py-4"><?php the_title();?></h2>


              <?php the_content(); ?>
          <?php }//ends while loop
        } //ends the if statement
      ?>
      </main>
      <aside class="col-md-3 p-4">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
<?php get_footer(); ?>
