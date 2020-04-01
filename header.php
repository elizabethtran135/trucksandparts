<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php bloginfo(‘name’); ?></title>

<!---link css---->
<link rel="stylesheet" type="text/css" href="<?php bloginfo(‘stylesheet_url’);?>"/>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 py-4">
            <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
        <div>
          <nav class="py-4">
            <?php
            if(has_nav_menu('top-menu')){
              wp_nav_menu(array('theme_location' => 'top-menu' , 'container_class' => 'top-menu-class'));
            }else{
              echo "Please select a top menu from the dashboard";
            }
            ?>
          </nav>
        </div>
      </div>
    </div>
  </header>
