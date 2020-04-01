<?php get_header(); ?>
  <div class="container">
    <div class="row p-4">
     <?php if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <div class="col-md-3 p-3">
            <?php the_post_thumbnail('thumbnail'); ?>
            <h3><?php the_title(); ?></h3>
            <p class="post-info"><?php echo "Published" .  get_the_date(); echo " | "; echo "Written by: " . get_the_author(); ?></p>
            <?php the_excerpt();?>
            <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read More >> </a>
            </div>
          <?php } //ends while loop
        }//ends if statement

        ?>
      </div>
    </div>

<?php get_footer(); ?>
