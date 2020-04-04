<?php
/* Template Name: Trucks */

get_header();


// Creates variable with different parameters to use
$args = array(
    'post_type' => 'trucks',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'orderby' => 'title',
    'order' => 'ASC',
);

//Passes the paramaters created through the new WP Query
$loop = new WP_Query( $args );

//WordPress Loop
while ( $loop->have_posts()){
   $loop->the_post();
    echo "<h2>" . get_the_title() . "</h2>";
    //Displays Year
    $year = get_field_object('year');
    if(isset($year)){
      echo "<p><span class='bold'>" . $year['label'] . ": </span>" . $year['value'] . "</p>";
      }
    //Displays Make
    $make = get_field_object('make');
    if(isset($make)){
      echo "<p><span class='bold'>" . $make['label'] . ": </span>" . $make['value'] . "</p>";
    }
    //Displays model
    $model = get_field_object('model');
    if(isset($model)){
      echo "<p><span class='bold'>" . $model['label'] . ": </span>" . $model['value'] . "</p>";
    }
    //Featured Image
    the_post_thumbnail('medium');

    $frontAxle = get_field_object('front-axle-capacity');

    //Display front axle
    if(isset($frontAxle)){
      echo "<p><span class='bold'>" . $frontAxle['label'] . ": </span>" . $frontAxle['value'] . "</p>";
    }
    //Display Body Make
    $bodyMake = get_field_object('body-make');
    if(isset($bodyMake)){
      echo "<p><span class='bold'>" . $bodyMake['label'] . ": </span>" . $bodyMake['value'] . "</p>";
    }
    //Display Body Model
    $bodyModel = get_field_object('body-model');
    if(isset($bodyModel)){
      echo "<p><span class='bold'>" . $bodyModel['label'] . ": </span>" . $bodyModel['value'] . "</p>";
    }


    //Displays Price
    $price = get_field_object('price');
    if(isset($price)){
      echo "<p><span class='bold'>" . $price['label'] . ": </span>" . $price['value'] . "</p>";
    }


}

wp_reset_postdata();

get_footer();

?>
