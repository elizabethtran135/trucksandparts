<?php get_header(); ?>
<div class="row">
  <div class="col-md-12 container1">
    <?php dynamic_sidebar('hero-image'); ?>
    <h1 class="centered">BLOG</h1>
  </div>
</div>
  <div class="container">
    <div class="row p-4">
      <main class="col-sm-12 col-md-9">
       <?php if(have_posts()){
          while(have_posts()){
            the_post(); ?>
              <?php the_post_thumbnail('full'); ?>
              <h1 class="font-weight-bold"><?php the_title(); ?></h1>
              <h3><?php the_excerpt();?></h3>
              <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read More</a>
            <?php } //ends while loop
          }//ends if statement

          ?>
        </main>
        <aside class="col-md-3 p-4">
          <?php get_sidebar(); ?>
        </aside>
      </div><!----row--->
    </div><!----container--->

<?php get_footer(); ?>
