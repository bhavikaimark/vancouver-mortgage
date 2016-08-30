<?php 
/*
Template Name: Home Page Template
*/
?>

    <?php get_header(); ?>

     <section class="homepage-block">
    <div class="container"> 
       <div class="hompage-caption">
<?php if ( have_posts() ) : while( have_posts() ) : the_post();
     the_content();
endwhile; endif; ?>
       
       </div>
    </div>
  </section>

        <?php get_footer(); ?>
