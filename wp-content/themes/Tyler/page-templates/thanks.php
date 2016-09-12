<?php
     /**
     * Template Name: Thank you
     *
     * @package Event Framework
     * @since 1.0.0
     */
    
    get_header(); 
    
?>
<!-- Google Code for Lead Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1042074714;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "TSj1CNGagmAQ2pjz8AM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1042074714/?label=TSj1CNGagmAQ2pjz8AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<div class="heading new-convention" style="margin-bottom: 0;">
    <div class="container">
        <h1><?php the_title() ?></h1>
    </div><!-- end .container -->
</div> <!-- end .heading -->
<div style="width:100%; background: #e7e7e7; padding-top: 35px;">
    <div class="container">
        <div class="row" style="margin-bottom: 40px;">
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-xs-12">
               <?php the_content(); ?>
            </div>
            <?php endwhile; // end of the loop. ?>

        </div><!-- end .row -->

    </div><!-- end .container -->
</div>


<?php get_footer(); ?>