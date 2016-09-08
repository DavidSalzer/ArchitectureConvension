<?php
 /**
 * Template Name: Register
 *
 * @package Event Framework
 * @since 1.0.0
 */
 
get_header(); 

?>
    <div class="heading new-convention" style="margin-bottom: 0;">
        <div class="container">
            <h1><?php the_title() ?></h1>

        </div><!-- end .container -->
    </div> <!-- end .heading -->
	<div style="width:100%; background: #e7e7e7; padding-top: 35px;">
    <div class="container">
        <div class="row" style="margin-bottom: 40px;">
            <div class="col-xs-12 col-sm-6">
                <?php echo do_shortcode( '[contact-form-7 id="251130" title="הרשמה לועידה"]' ); ?>
            </div>
            <div class="col-xs-12 col-sm-6">
                <img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>"/>
            </div>
            
        </div><!-- end .row -->
        <div class="row" style="margin-bottom: 40px; text-align: center;">
            <img src="<?php echo get_template_directory_uri() . '/images/details-lid.png'; ?>"/>
            <img src="<?php echo get_template_directory_uri() . '/images/logo_mercaz_p.png'; ?>"/>
        </div>
    </div><!-- end .container -->
    </div>
    
    
<?php get_footer(); ?>