<?php
    /*
          Template Name: Thank Lead Page
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

<!-- Google Code for Nadlacity lead Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 988860976;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "NDHDCPCnklYQsKTD1wM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/988860976/?label=NDHDCPCnklYQsKTD1wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Facebook Conversion Code for Leads -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6009803309107', {'value':'0.00','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6009803309107&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>

<?php get_footer(); ?>