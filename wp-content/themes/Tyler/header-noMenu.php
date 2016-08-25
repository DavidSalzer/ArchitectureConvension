<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta property="og:image" content="<?php echo home_url( '/' ); ?>/wp-content/themes/Tyler/images/pointing_ad_2-02.jpg<?php echo "?". round(microtime(true) * 1000); ?>" />    

        <!--[if IE]>
        <meta name="X-UA-Compatible" content="IE=edge" >
        <![endif]-->
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie8.css" />
        <![endif]-->
        <!--[if lte IE 7]>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-ie7.css" />
        <style type="text/css">
            .col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.input-group,.row,.content{
                box-sizing:border-box;behavior:url(<?php echo get_template_directory_uri(); ?>/js/boxsizing.htc)
            }
        </style>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie7.css" />
        <![endif]-->
        <!-- HTML5 Shim, Respond.js and PIE.htc IE8 support of HTML5 elements, media queries and CSS3 -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <style type="text/css">
            .speakers .speaker .speaker-inner, .speakers .photo img, .connect, .sessions .session .speaker img,
            .connect .links a:hover:before, .sessions .session .session-inner, .location .explore, .location .map,
            .articles article .image, .facebook .fb-event, .facebook .fb-view, .twitter .view, .twitter .tweet,
            .sidebar .widget_latest_comments li a,.sidebar h2, .articles article .image, .comments-area h2,
            .commentlist .comment .comment-content,.commentlist .comment .comment-content:after,
            .timecounter, input[type=text], textarea, .landing .box, h1 img.img-circle {
                behavior: url("<?php echo get_template_directory_uri(); ?>/js/pie/PIE.htc");
            }
        </style>
        <![endif]-->
        <?php wp_head(); ?>

        <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-47786650-4', 'auto');
              ga('send', 'pageview');

        </script>

        <script type="text/javascript">
          (function() {
            window._pa = window._pa || {};
            // _pa.orderId = "myCustomer@email.com"; // OPTIONAL: attach user email or order ID to conversions
            // _pa.revenue = "19.99"; // OPTIONAL: attach dynamic purchase values to conversions
            var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
            pa.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + "//tag.perfectaudience.com/serve/522d8a0273583cf13a000014.js";
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(pa, s);
          })();
        </script>

        <script type="text/javascript">(function(){
          window._fbds = window._fbds || {};
          _fbds.pixelId = 191467084396020;
          var fbds = document.createElement('script');
          fbds.async = true;
          fbds.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//connect.facebook.net/en_US/fbds.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(fbds, s);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(["track", "PixelInitialized", {}]);
        </script>
        <noscript><img height="1" width="1" border="0" alt="" style="display:none" src="https://www.facebook.com/tr?id=191467084396020&amp;ev=NoScript" /></noscript>


    </head>
    <body <?php body_class(); ?>>
	<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MPNB8P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPNB8P');</script>
<!-- End Google Tag Manager -->
        <div id="not-seport-html5"></div>
        <header class="nav transition">
            <a  id="logo">
			<img src="http://nadlancity.org.il/wp-content/uploads/2015/09/nadlan-logo.png" alt="עיר הנדלן של ישראל" title="עיר הנדלן של ישראל" />
                <img src="<?php echo tyler_set_theme_logo(); ?>" alt="Logo <?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" />
            </a>
            
        </header>