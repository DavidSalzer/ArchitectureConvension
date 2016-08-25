<?php
    /*
          Template Name: Thank Page
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
<div class="container">
    <div class="row">
        <div>
            <?php the_post_thumbnail(null, array('class' => 'img-rounded')); ?>
            <?php the_content(); ?>

        </div>
    </div>
</div>
<?php endwhile; // end of the loop. ?>

<!-- Google Code for Nadlancity Online reg Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 988860976;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "Kx8dCN6rklYQsKTD1wM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/988860976/?label=Kx8dCN6rklYQsKTD1wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php get_footer(); ?>