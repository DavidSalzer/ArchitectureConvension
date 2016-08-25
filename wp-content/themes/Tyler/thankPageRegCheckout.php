<?php
    /*
          Template Name: Thank Reg checkout Page
      */
    
    
?>
<?php get_header();
  
  ?>
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
    var google_conversion_value = <?php echo $_SESSION['price'];?>;
var google_conversion_currency = "ILS";
    var google_remarketing_only = false;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/988860976/?value=<?php echo $_SESSION['price'];?>&amp;currency_code=ILS&amp;label=Kx8dCN6rklYQsKTD1wM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

<!-- Facebook Conversion Code for Checkouts -->
<script>
    (function() {
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
    window._fbq.push(['track', '6009803295507', {'value':'<?php echo $_SESSION['price'];?>','currency':'ILS'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6009803295507&amp;cd[value]=<?php echo $_SESSION['price'];?>&amp;cd[ILS]=USD&amp;noscript=1" /></noscript>


<?php get_footer(); ?>