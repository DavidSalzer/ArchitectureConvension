<?php
get_header();

// Get Theme Options
//$ef_options = get_option( 'eventframework' );
$ef_options = EF_Event_Options::get_theme_options();
?>
<!-- LANDING - BIG PICTURE -->

    <div class="landing">
        <h1 style="position: relative;">
            <!--<span class="first-title" <?php if ( isset( $ef_options['ef_title_color']) ) echo 'style="color:' . $ef_options['ef_title_color'] . '"'; ?>><?php if ( isset( $ef_options['ef_herotitle'] ) ) { echo stripslashes( $ef_options['ef_herotitle'] ); } ?>
                
            </span>-->            
                <img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" class="main-text-img"/>
            <img src="<?php echo get_template_directory_uri() . '/images/hashraa.png'; ?>" class="main-text-img"/>
        </h1>        
        
        <?php 
        $widget_ef_registration = get_option('widget_ef_registration');
        
        if (is_active_widget(false, false, 'ef_registration') && is_array( $widget_ef_registration ) ) {
			$reg_widget = reset( $widget_ef_registration );
			if( $reg_widget['registrationshowcalltoaction'] == 1 ) { ?>
            	<!--<a href="<?php echo home_url( '/' ); ?>?page_id=48" class="btn btn-lg btn-secondary sign-up-btn">ההרשמה תחל בקרוב</a>-->
				<a href="designcity.org.il/%D7%94%D7%A8%D7%A9%D7%9E%D7%94-%D7%9C%D7%95%D7%A2%D7%99%D7%93%D7%AA-%D7%94%D7%90%D7%93%D7%A8%D7%99%D7%9B%D7%9C%D7%99%D7%9D/" class="btn btn-lg btn-secondary sign-up-btn">רישום לועידת האדריכלות</a>
        	<?php 
			}
		} ?>
                        
    </div>

<?php
if (is_active_sidebar('homepage'))
    dynamic_sidebar('homepage');
?>

<?php get_footer(); ?>
