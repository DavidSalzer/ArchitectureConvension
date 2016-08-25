<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta property="og:image" content="http://nadlancity.org.il/wp-content/uploads/2016/08/5049-harshama-1200x627.jpg<?php echo "?". round(microtime(true) * 1000); ?>" /> 
		<meta property="og:description" content='ועידת אילת לאדריכלות ולעיצוב – 6-8.12, אילת' />    		

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


        
    </head>
    <body <?php body_class(); ?>>
        <div id="not-seport-html5"></div>
        <header class="nav transition">
            <a class="visible-xs visible-sm" href="<?php echo esc_url(home_url()); ?>" id="logo">
                  <img src="<?php echo get_template_directory_uri() . '/images/logo-mercaz.png'; ?>" alt="מרכז הבניה הישראלי" title="מרכז הבניה הישראלי" />
             </a>
             <nav class="navbar" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"><?php _e('Toggle navigation', 'tyler'); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                    </div>
                    <div id="navbar" class="navbar-collapse collapse text-fit">
                        <a class="navbar-brand pull-right hidden-xs hidden-sm" href="<?php echo esc_url(home_url()); ?>">
                            <img src="<?php echo get_template_directory_uri() . '/images/logo-mercaz.png'; ?>" alt="מרכז הבניה הישראלי" title="מרכז הבניה הישראלי" />
                        </a>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class' => 'transition',
                            'menu_id' => 'menu-primary'
                        ));
                    ?>
                        
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
            
        </header>