<?php get_header(); ?>
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post(); ?>
            <div class="container1">
              <?php the_post_thumbnail('large'); ?>
              <h1 class="centered entry-title py-4"><?php the_title();?></h1>
            </div>
        <div class="container">
          <div class="row p-4">
            <main class="col-md-9">
              <p class= "post-information p-3"><?php echo "Published " . get_the_date(); echo " | "; echo "Written by " . get_the_author(); ?></p>
              <p class="p-2"><?php the_content(); ?> </p>
              <?php }//ends while loop
              } //ends the if statement
              ?>
            </main>
            <aside class="col-md-3">
              <?php get_sidebar(); ?>
            </aside>
          </div>
        </div>

<?php get_footer(); ?>
