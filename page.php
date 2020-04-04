<?php get_header(); ?>
    <main class="col-md-12">
      <?php dynamic_sidebar('hero-image'); ?>
      <div class="container">
        <div class="row p-4">
         <?php if(have_posts()){
            while(have_posts()){
              the_post(); ?>
                <?php the_post_thumbnail('large'); ?>
                <h3><?php the_title(); ?></h3>
                <p class="post-info"><?php echo "Published" .  get_the_date(); echo " | "; echo "Written by: " . get_the_author(); ?></p>
                <?php the_excerpt();?>
                <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read More >> </a>
              <?php } //ends while loop
            }//ends if statement

            ?>
          </div><!----row--->
        </div><!----container--->
<?php get_footer(); ?>
