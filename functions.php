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
/* ================================================

  STANDARD NEEDS FOR POSTS AND PAGES

  ====================================================*/
/* ================================================
  Header Widgets
  ====================================================*/

$custom_image_header = array(
  'width' => 225,
  'height' => 120,
  'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);

/*----HEADER CALL EMAIL----*/

register_sidebar(array(
    'name'          => ('Right Header'),
    'id'            => 'right-header',
    'description'   => 'Right widget area in header',
    'before_widget' => '<div class="widget-header">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="header-widget-title">',
    'after_title'   => '</h3>'
  ));

/*===============================
  Add menus to my theme
=====================================*/
function register_my_menus(){
  register_nav_menus(
    array(
      'top-menu'    => __( 'Top Menu'),
      'footer-menu'   => ('Footer Menu'),
    )
  );
}

add_action('init', 'register_my_menus');
/*===============================
  Adds Featured Images
=====================================*/

add_theme_support('post-thumbnails');
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
  'name'          => ('Search Trucks'),
  'id'            => 'search-trucks',
  'description'   => 'Search bar on truck page',
  'before_widget' => '<div class="widget-search-trucks">',
  'after_widget'  => "</div>",
  'before_title'  => '<h3 class="search-trucks-widget-title">',
  'after_title'   => '</h3>'
));
register_sidebar(array(
  'name'          => ('Search Trucks Two'),
  'id'            => 'search-trucks-two',
  'description'   => 'Search bar 2 on truck page',
  'before_widget' => '<div class="widget-search-trucks-two">',
  'after_widget'  => "</div>",
  'before_title'  => '<h3 class="search-trucks-two-widget-title">',
  'after_title'   => '</h3>'
));
/*===============================
  FOOTER WIDGETS
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
/*--------------------------------------------

FUNCTIONS FOR SPECIFIC PAGES AND POSTS!

------------------------------*/
/*------------------------
HOME PAGE WIDGETS
-----------------------*/
register_sidebar(array(
    'name'          => ('Right Header'),
    'id'            => 'right-header',
    'description'   => 'Right widget area in header',
    'before_widget' => '<div class="widget-header">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="header-widget-title">',
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
  register_sidebar(array(
    'name'          => ('Front Loader Home'),
    'id'            => 'front-loader-home',
    'description'   => 'Front loader for home page widget area',
    'before_widget' => '<div class="widget-front-loader-home">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="front-loader-home-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Rear Loader Home'),
    'id'            => 'rear-loader-home',
    'description'   => 'Truck type for home page widget area',
    'before_widget' => '<div class="widget-rear-loader-home">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="rear-loader-home-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Side Loader Home'),
    'id'            => 'side-loader-home',
    'description'   => 'Side loader for home page widget area',
    'before_widget' => '<div class="widget-side-loader-home">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="side-loader-home-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Roll Off Home'),
    'id'            => 'roll-off-home',
    'description'   => 'Roll off for home page widget area',
    'before_widget' => '<div class="widget-roll-off-home">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="roll-off-home-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Container Delivery Home'),
    'id'            => 'container-delivery-home',
    'description'   => 'Container Delivery for home page widget area',
    'before_widget' => '<div class="widget-container-delivery-home">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="container-delivery-home-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Grapple Boom Home'),
    'id'            => 'grapple-boom-home',
    'description'   => 'Grapple Boom for home page widget area',
    'before_widget' => '<div class="widget-grapple-boom-home">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="grapple-boom-home-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Concrete Mixer Home'),
    'id'            => 'concrete-mixer-home',
    'description'   => 'Concrete Mixer for home page widget area',
    'before_widget' => '<div class="widget-concrete-mixer-home">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="concrete-mixer-home-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Cab Chasis Home'),
    'id'            => 'cab-chasis-home',
    'description'   => 'Cab & Chasis for home page widget area',
    'before_widget' => '<div class="widget-cab-chasis-home">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="cab-chasis-home-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Truck Type Home'),
    'id'            => 'trucktype-home',
    'description'   => 'Truck type for home page widget area',
    'before_widget' => '<div class="widget-trucktype-home">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="trucktype-home-widget-title">',
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
  /*TESTIMONIAL WIDGETS*/
  register_sidebar(array(
    'name'          => ('Testimonial Home'),
    'id'            => 'testimonial-home',
    'description'   => 'Testimonial for home page widget area',
    'before_widget' => '<div class="widget-testimonial-home">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="testimonial-home-widget-title">',
    'after_title'   => '</h3>'
  ));
  /*MAP WIDGETS*/
  register_sidebar(array(
    'name'          => ('Map Tampa Home'),
    'id'            => 'map-tampa-home',
    'description'   => 'Tampa map for home page widget area',
    'before_widget' => '<div class="widget-map-tampa">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="map-tampa-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Map Glenmoore Home'),
    'id'            => 'map-glenmoore-home',
    'description'   => 'Glenmoore map for home page widget area',
    'before_widget' => '<div class="widget-map-glenmoore">',
    'after_widget'  => "</div>",
    'before_title'  => '<h3 class="map-glenmoore-widget-title">',
    'after_title'   => '</h3>'
  ));
/*------------------
Contact Form Widget
-------------------*/
register_sidebar(array(
'name'          => ('Contact Form'),
'id'            => 'contact-form',
'description'   => 'Contact Form',
'before_widget' => '<div class="widget-contact-form"',
'after_widget'  => '</div>',
'before_title'  => '<h3 class="contact-form-title">',
'after_title'   => '</h3>'
));
}
/* ================================================

  TRUCK CUSTOM POST TYPE

  ====================================================*/
/*=======================================
Custom taxonomy
=========================================*/
// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );

//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy() {

  $labels = array(
    'name' => _x( 'Truck Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Truck Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Truck Types' ),
    'all_items' => __( 'All Truck Types' ),
    'parent_item' => __( 'Parent Truck Type' ),
    'parent_item_colon' => __( 'Parent Truck Type:' ),
    'edit_item' => __( 'Edit Truck Type' ),
    'update_item' => __( 'Update Truck Type' ),
    'add_new_item' => __( 'Add New Truck Type' ),
    'new_item_name' => __( 'New Truck Type Name' ),
    'menu_name' => __( 'Truck Types' ),
  );

  register_taxonomy('types',array('trucks'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}
/*===============================
  Custom post type
=====================================*/
if ( ! function_exists('truckInventory') ) {

// Register Custom Post Type
function truckInventory() {

	$labels = array(
		'name'                  => _x( 'Trucks', 'Post Type General Name', 'spring-2020' ),
		'singular_name'         => _x( 'Truck', 'Post Type Singular Name', 'spring-2020' ),
		'menu_name'             => __( 'Truck Inventory', 'spring-2020' ),
		'name_admin_bar'        => __( 'Truck Inventory', 'spring-2020' ),
		'archives'              => __( 'Truck Inventory', 'spring-2020' ),
		'attributes'            => __( 'Truck Attributes', 'spring-2020' ),
		'parent_item_colon'     => __( 'Parent Truck:', 'spring-2020' ),
		'all_items'             => __( 'All Trucks', 'spring-2020' ),
		'add_new_item'          => __( 'Add New Truck', 'spring-2020' ),
		'add_new'               => __( 'Add New Truck', 'spring-2020' ),
		'new_item'              => __( 'New Truck', 'spring-2020' ),
		'edit_item'             => __( 'Edit Truck', 'spring-2020' ),
		'update_item'           => __( 'Update Truck', 'spring-2020' ),
		'view_item'             => __( 'View Truck', 'spring-2020' ),
		'view_items'            => __( 'View Trucks', 'spring-2020' ),
		'search_items'          => __( 'Search Trucks', 'spring-2020' ),
		'not_found'             => __( 'Not found', 'spring-2020' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'spring-2020' ),
		'featured_image'        => __( 'Featured Image', 'spring-2020' ),
		'set_featured_image'    => __( 'Set featured image', 'spring-2020' ),
		'remove_featured_image' => __( 'Remove featured image', 'spring-2020' ),
		'use_featured_image'    => __( 'Use as featured image', 'spring-2020' ),
		'insert_into_item'      => __( 'Insert into item', 'spring-2020' ),
		'uploaded_to_this_item' => __( 'Uploaded to this truck', 'spring-2020' ),
		'items_list'            => __( 'Trucks list', 'spring-2020' ),
		'items_list_navigation' => __( 'Trucks list navigation', 'spring-2020' ),
		'filter_items_list'     => __( 'Filter Trucks list', 'spring-2020' ),
	);
	$args = array(
		'label'                 => __( 'Truck', 'spring-2020' ),
		'description'           => __( 'Truck Inventory', 'spring-2020' ),
		'labels'                => $labels,
		'supports'              => array( 'title','custom-fields', 'editor', 'thumbnail', 'revisions', 'post-formats' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'truck-inventory',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'trucks', $args );

}
add_action( 'init', 'truckInventory', 0 );

}
/*===============================
  Add stylesheets for ACF dashboard
=====================================*/
function adminACFStyles(){
//ACF CSS
wp_enqueue_style('acf', get_stylesheet_directory_uri() . '/admin/styles.css');
}
add_action('admin_head', 'adminACFStyles');

/*===============================
/*========================================
Truck Fields
===========================================*/
if( function_exists('acf_add_local_field_group') ){

acf_add_local_field_group(array (
	'key' => 'body-specifications',
	'title' => 'Body Specifications',
	'fields' => array (
		array (
			'key' => 'body-type',
			'label' => 'Body Type',
			'name' => 'body-type',
			'type' => 'text',
			'wrapper' => array (
				'width' => '100%',
			),
		),
    array (
			'key' => 'body-make',
			'label' => 'Body Make',
			'name' => 'body-make',
			'type' => 'text',
			'wrapper' => array (
				'width' => '100%',
			),
		),
    array (
			'key' => 'body-model',
			'label' => 'Body Model',
			'name' => 'body-model',
			'type' => 'text',
			'wrapper' => array (
				'width' => '100%',
			),
		),
    array (
      'key' => 'body-capacity',
      'label' => 'Body Capacity',
      'name' => 'body-capacity',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'body-serial',
      'label' => 'Body Serial Number',
      'name' => 'body-serial',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'other-options',
      'label' => 'Other Body Options',
      'name' => 'other-options',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'trucks',
			),
		),
	),
));

acf_add_local_field_group(array (
	'key' => 'chassis-specifications',
	'title' => 'Chassis Specifications',
  'wrapper' => array(
    'width' => '50'
  ),
	'fields' => array (
		array (
			'key' => 'new-used',
			'label' => 'New/Used',
			'name' => 'new-used',
			'type' => 'select',
      'choices' => array(
        'new'	=> 'New',
        'used' => 'Used'
      ),
			'wrapper' => array (
				'width' => '100%',
			),
		),
    array (
      'key' => 'year',
      'label' => 'Year',
      'name' => 'year',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'make',
      'label' => 'Make',
      'name' => 'make',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'model',
      'label' => 'Model',
      'name' => 'model',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'miles',
      'label' => 'Miles',
      'name' => 'miles',
      'type' => 'number',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'hours',
      'label' => 'Hours',
      'name' => 'hours',
      'type' => 'number',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'engine-make',
      'label' => 'Engine Make',
      'name' => 'engine-make',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'engine-model',
      'label' => 'Engine Model',
      'name' => 'engine-model',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'engine-hp',
      'label' => 'Engine HP',
      'name' => 'engine-hp',
      'type' => 'number',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'engine-brake',
      'label' => 'Engine Brake',
      'name' => 'engine-brake',
      'type' => 'select',
      'choices' => array(
        'yes'	=> 'Yes',
        'no' => 'No'
      ),
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'transmission-type',
      'label' => 'Transmission Type',
      'name' => 'transmission-type',
      'type' => 'select',
      'choices' => array(
        'automatic'	=> 'Automatic',
        'manual' => 'Manual'
      ),
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'transmission-make',
      'label' => 'Transmission Make',
      'name' => 'transmission-make',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'transmission-model',
      'label' => 'Transmission Model',
      'name' => 'transmission-model',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'speeds',
      'label' => 'Speeds',
      'name' => 'speeds',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'front-axle-capacity',
      'label' => 'Front Axle Capacity',
      'name' => 'front-axle-capacity',
      'type' => 'number',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'rear-axle-capacity',
      'label' => 'Rear Axle Capacity',
      'name' => 'rear-axle-capacity',
      'type' => 'number',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'additional-axle',
      'label' => 'Additional Axle',
      'name' => 'additional-axle',
      'type' => 'select',
      'choices' => array(
        'yes'	=> 'Yes',
        'no' => 'No'
      ),
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'suspension',
      'label' => 'Suspension',
      'name' => 'suspension',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'suspension-model',
      'label' => 'Suspension Model',
      'name' => 'suspension-model',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'brakes',
      'label' => 'Brakes',
      'name' => 'brakes',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'ratio',
      'label' => 'Ratio',
      'name' => 'ratio',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'gvw',
      'label' => 'GVW',
      'name' => 'gvw',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'steering-configuration',
      'label' => 'Steering Configuration',
      'name' => 'steering-configuration',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'paint',
      'label' => 'Paint',
      'name' => 'paint',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'stock-number',
      'label' => 'Stock #',
      'name' => 'stock-number',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'price',
      'label' => 'Price',
      'name' => 'price',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'gallery',
      'label' => 'Gallery',
      'name' => 'gallery',
      'type' => 'photo_gallery',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'trucks',
			),
		),
	),
));
};


add_action('widgets_init','blank_widgets_init');
 ?>
