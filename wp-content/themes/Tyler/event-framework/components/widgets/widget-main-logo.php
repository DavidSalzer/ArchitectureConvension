<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Register the Registration Widget
 * 
 * @package Event Framework
 * @since 1.0.0
 */

/**
 * Ef_Registration_Widget Widget Class.
 * 
 * 
 * @package Event Framework
 * @since 1.0.0
 */
class Ef_MainLogo_Widget extends WP_Widget {

	/**
	 * Contact Widget setup.
	 * 
	 * @package Event Framework
	 * @since 1.0.0
	 */
	function Ef_MainLogo_Widget() {
		
		$widget_name = EF_Framework_Helper::get_widget_name();
		
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'ef_mainLogo', 'description' => __( 'Add main logo', 'dxef' ) );
		
		/* Create the widget. */
		$this->WP_Widget( 'ef_mainLogo', $widget_name . __( ' Main Logo', 'dxef' ), $widget_ops );
		
	}
	
	/**
	 * Output of Widget Content
	 * 
	 * Handle to outputs the
	 * content of the widget
	 * 
	 * @package Event Framework
	 * @since 1.0.0
	 */
	function widget( $args, $instance ) {
		
		$mainLogoSrc = isset( $instance['mainLogoSrc'] ) ? $instance['mainLogoSrc'] : '';
	
	    echo stripslashes($args['before_widget']);?>
	    
	    <!-- REGISTRATION -->
<div class="main-logo">
<img src="<?php echo $mainLogoSrc; ?>" class="main-text-img" />
</div>
        
	    <?php
	    echo stripslashes($args['after_widget']);
	}
	/**
	 * Update Widget Setting
	 * 
	 * Handle to updates the widget control options
	 * for the particular instance of the widget
	 * 
	 * @package Event Framework
	 * @since 1.0.0
	 */
	function update( $new_instance, $old_instance ) {

		if (isset($_POST['submitted'])) {
			update_option('ef_mainLogo_widget_mainLogoSrc', isset( $new_instance['mainLogoSrc'] ) ? $new_instance['mainLogoSrc'] : '' );
		}

		$instance = $old_instance;
		
		/* Set the instance to the new instance. */
		$instance = $new_instance;
		
		/* Input fields */
		$instance['mainLogoSrc']	= strip_tags( $new_instance['mainLogoSrc'] );

		
		return $instance;
	}
	
	/**
	 * Display Widget Form
	 * 
	 * Displays the widget
	 * form in the admin panel
	 * 
	 * @package Event Framework
	 * @since 1.0.0
	 */
	function form( $instance ) {
	
		$mainLogoSrc 				= isset( $instance['mainLogoSrc'] ) ? $instance['mainLogoSrc'] : '';

        ?>
	    
	    <em><?php _e('Src:', 'dxef'); ?></em><br />
	    <input type="text" class="widefat fileUploader" name="<?php echo $this->get_field_name( 'mainLogoSrc' ); ?>" value="<?php echo stripslashes($mainLogoSrc); ?>" />
	    <br /><br />

	    <input type="hidden" name="submitted" value="1" />
	    <?php
	}
}

add_filter('wp_nav_menu_items', 'ef_wp_nav_menu_items', 10, 2);

/**
 * Add Register Menu In MenuBar
 * 
 * Handle to displays register
 * menu in menuBar
 * 
 * @package Event Framework
 * @since 1.0.0
 */


// Register Widget
register_widget( 'Ef_MainLogo_Widget' );