<?php
/*
    Template Name: contact
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<main>
  <div class="row">
    <div class="col-md-12 container1">
      <?php dynamic_sidebar('hero-image'); ?>
      <h1 class="centered">CONTACT US</h1>
    </div>
  </div>
  <div class="row p-5 justify-content-center">
      <h3 class="font-italic">Fill out the form below and we should be in contact with you shortly!</h3>
  </div>

<!-- ======================= contact form ==================-->
  <section>
    <?php dynamic_sidebar('contact-form'); ?>
  </section>
</main>







<?php get_footer(); ?>
