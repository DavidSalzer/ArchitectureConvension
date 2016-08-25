<?php
    /*
          Template Name: slideshow Page
      */
    
    
?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php $categories = get_the_category(); ?>
    <div class="heading">
        <div class="container">
            <h1><?php the_title() ?></h1>
        </div>
    </div>
    <div class="container" style="height: 500px">
        
                <!--<iframe width="100%" height="100%" src="http://nadlancity.cambium-team.com/slideshow.pdf"></iframe>-->

      <?php //do_action('slideshow_deploy', '49'); 
 ?>
       <?php do_action('slideshow_deploy', '673'); ?>     
        
    </div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>