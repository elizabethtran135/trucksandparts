<?php wp_footer(); ?>
  <footer>
    <div class="row justify-content-center">
      <div class="col-sm-8 col-md-9 py-2">
        <?php dynamic_sidebar('left-footer'); ?>
      </div>
      <div class="mobile-nav">
        <div class="container">
          <div class="row justify-content-center">
            <?php if(get_header_image() == '') {?>
                <h1><a href="<?php get_home_url();?>"><?php bloginfo('name');?></a></h1><?php
              }else {?>
                <a href="<?php get_home_url();?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="logo" /></a>

              <?php } ?>
          </div>
        </div>
      </div>
      <div class="desktop-nav col-sm-4 col-md-3 py-2">
        <?php if(get_header_image() == '') {?>
            <h1><a href="<?php get_home_url();?>"><?php bloginfo('name');?></a></h1><?php
          }else {?>
            <a href="<?php get_home_url();?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="logo" /></a>

          <?php } ?>
      </div>
    </div>
  </footer>
</body>
</html>
