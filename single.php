<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <main class="col-md-12">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>
              <?php the_post_thumbnail('large'); ?>
              <h2 class="entry-title py-4"><?php the_title();?></h2>
              <p class= "post-information p-3"><?php echo "<span class='bold'>Published </span> " . get_the_date(); echo " | "; echo "<span class='bold'>Written by</span>" . get_the_author(); ?></p>
              <p class="p-2"><?php the_content(); ?> </p>

          <?php }//ends while loop
        } //ends the if statement
      ?>
      </main>
    </div>
  </div>
<?php get_footer(); ?>
