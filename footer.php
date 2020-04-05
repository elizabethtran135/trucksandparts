<?php wp_footer(); ?>
  <footer>
    <div class="row justify-content-center">
      <div class="col-md-3 py-2">
        <?php dynamic_sidebar('left-footer'); ?>
      </div>
      <div class="col-md-3 py-2">
        <?php dynamic_sidebar('middle-footer'); ?>
      </div>
      <div class="col-md-3">
        <?php if(get_header_image() == '') {?>
            <h1><a href="<?php get_home_url();?>"><?php bloginfo('name');?></a></h1><?php
          }else {?>
            <a href="<?php get_home_url();?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" atl="logo" /></a>

          <?php } ?>
      </div>
    </div>
  </footer>
</body>
</html>
