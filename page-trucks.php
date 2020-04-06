<?php
/* Template Name: Trucks */

get_header();?>
<div class="row pink2">
  <div class="col-sm-12 col-md-6 col-lg-6">
    <?php dynamic_sidebar('search-trucks'); ?>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-6">
    <?php dynamic_sidebar('search-trucks-two'); ?>
  </div>
</div>
<?php
// Creates variable with different parameters to use
$args = array(
    'post_type' => 'trucks',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'orderby' => 'title',
    'order' => 'ASC',
); ?>

<div class="container row bg-light">

  <?php
  //Passes the paramaters created through the new WP Query
  $loop = new WP_Query( $args );

  //WordPress Loop
  while ( $loop->have_posts()){
     $loop->the_post(); ?>

     <div class="individual-truck col-md-6 col-lg-4 text-center justify-content-center">
    <?php
      echo "<h4>" . get_the_title() . "</h4>";

      ?>
      <div class="text-left pl-6">
        <?php
      //Displays Year
      $year = get_field_object('year');
      if(isset($year)){
        echo "<h3><span class='year'>" . $year['value'] . " </span>";
        }
      //Displays Make
      $make = get_field_object('make');
      if(isset($make)){
        echo "<span  class='make'>" . $make['value'] . " </span>";
      }
      //Displays model
      $model = get_field_object('model');
      if(isset($model)){
        echo "<span  class='model'>"  . $model['value'] . "</span>" . "</h3>";
      }
      //Display front axle
      $frontAxle = get_field_object('front-axle-capacity');
      if(isset($frontAxle)){
        echo "<p><span class='year'>" . $frontAxle['value'] . " </span>";
      }
      //Display Body Make
      $bodyMake = get_field_object('body-make');
      if(isset($bodyMake)){
        echo "<span class='year'>" . $bodyMake['value'] . " </span>";
      }
      //Display Body Model
      $bodyModel = get_field_object('body-model');
      if(isset($bodyModel)){
        echo "<span class='year'>" . $bodyModel['value'] . " </span>" . "</p>";
      }
      ?>

    </div> <?php
      //Featured Image
    ?>
      <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium');?></a><?php

      //Displays Price
      $price = get_field_object('price');
      if(isset($price)){
        echo "<h3><span class='bold'>" . $price['value'] . "</span>" . "</h3>";
      }
      ?>

    </div>
    <?php
  }

  wp_reset_postdata(); ?>

</div>

<?php

get_footer();

?>
