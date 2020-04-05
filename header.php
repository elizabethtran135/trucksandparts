<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php bloginfo('name'); ?></title>

<!---link css---->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>"/>

<link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,700;1,400&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="row desktop-nav">
        <div class="col-lg-12 d-flex justify-content-around align-items-end" id="headwhite">
            <div class="col-lg-3 mt-4">
              <?php if(get_header_image() == '') {?>
                  <h1><a href="<?php get_home_url();?>"><?php bloginfo('name');?></a></h1><?php
                }else {?>
                  <a href="<?php get_home_url();?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" atl="logo" /></a>

                <?php } ?>
            </div>
            <div class="col-lg-3 text-right mt-n2 mb-2">
              <?php dynamic_sidebar('right-header'); ?>
            </div>
        </div>

        <div class="col-lg-12 justify-content-center" id="navblue">
          <nav>
            <?php
              if(has_nav_menu('top-menu')) {
                wp_nav_menu(array('theme_location' => 'top-menu','container_class' => 'top-menu-class'));
              } else{
                echo "Please select a top menu through the dashboard";
              }
            ?>
          </nav>
        </div>


    </div>


      <div class="mobile-nav">
        <div class="container">
          <div class="row justify-content-center">
            <?php if(get_header_image() == '') {?>
                <h1><a href="<?php get_home_url();?>"><?php bloginfo('name');?></a></h1><?php
              }else {?>
                <a href="<?php get_home_url();?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" atl="logo" /></a>

              <?php } ?>
          </div>
          <nav>
            <?php
              if(has_nav_menu('top-menu')) {
                wp_nav_menu(array('theme_location' => 'top-menu', 'container_class' => 'top-menu-class'));
              } else{
                echo "Please select a top menu through the dashboard";
              }
            ?>
          </nav>
        </div>
      </div>
  </header>
