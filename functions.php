<?php
/*===============================
  Add stylesheets and javascripts files
=====================================*/
function custom_theme_scripts(){
  //Bootstrap CSS
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

  //Main CSS
  wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javescript Files
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts','custom_theme_scripts');
/*===============================
  Adds Featured Images
=====================================*/

add_theme_support('post-thumbnails');
/*===============================
  Add menus to my theme
=====================================*/
function register_my_menus(){
  register_nav_menus(
    array(
      'top-menu'    => __( 'Top Menu'),
    )
  );
}

add_action('init', 'register_my_menus');

/*===============================
  Add three widgets to my footer
=====================================*/

function blank_widgets_init(){
  register_sidebar(array(
    'name'          => ('Left Footer'),
    'id'            => 'left-footer',
    'description'   => 'Left widget area in footer',
    'before_widget' => '<div class="widget-footer">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="footer-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Middle Footer'),
    'id'            => 'middle-footer',
    'description'   => 'Middle widget area in footer',
    'before_widget' => '<div class="widget-footer">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="footer-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Right Footer'),
    'id'            => 'right-footer',
    'description'   => 'Right widget area in footer',
    'before_widget' => '<div class="widget-footer">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="footer-widget-title">',
    'after_title'   => '</h3>'
  ));
  /*HOME PAGE WIDGETS*/
  register_sidebar(array(
    'name'          => ('Hero Image'),
    'id'            => 'hero-image',
    'description'   => 'Hero image area in home page',
    'before_widget' => '<div class="widget-hero-image">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="hero-image-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('About Us'),
    'id'            => 'about-us',
    'description'   => 'About Us widget area in home page',
    'before_widget' => '<div class="widget-about-us">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="about-us-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Bottom Left'),
    'id'            => 'bottom-left',
    'description'   => 'Bottom left widget area in home page',
    'before_widget' => '<div class="widget-bottom-left">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="bottom-left-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Bottom Middle'),
    'id'            => 'bottom-middle',
    'description'   => 'Bottom middle widget area in home page',
    'before_widget' => '<div class="widget-bottom-middle">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="bottom-middle-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Bottom Right'),
    'id'            => 'bottom-right',
    'description'   => 'Bottom right widget area in home page',
    'before_widget' => '<div class="widget-bottom-right">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="bottom-right-widget-title">',
    'after_title'   => '</h3>'
  ));
  /*SIDEBAR WIDGETS*/
  register_sidebar(array(
    'name'          => ('Right Sidebar'),
    'id'            => 'right-sidebar',
    'description'   => 'Right sidebar widget area',
    'before_widget' => '<div class="widget-right-sidebar">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="right-sidebar-widget-title">',
    'after_title'   => '</h3>'
  ));
}

add_action('widgets_init','blank_widgets_init');
 ?>
