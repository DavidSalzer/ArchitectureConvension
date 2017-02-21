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
class Ef_RegistrationBtn_Widget extends WP_Widget {

	/**
	 * Contact Widget setup.
	 * 
	 * @package Event Framework
	 * @since 1.0.0
	 */
	function Ef_RegistrationBtn_Widget() {
		
		$widget_name = EF_Framework_Helper::get_widget_name();
		
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'ef_registrationBtn', 'description' => __( 'Add register button', 'dxef' ) );
		
		/* Create the widget. */
		$this->WP_Widget( 'ef_registrationBtn', $widget_name . __( ' Home Register Btn', 'dxef' ), $widget_ops );
		
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
		
		$registrationtitle = isset( $instance['registrationtitle'] ) ? $instance['registrationtitle'] : '';
	    $registrationlink = isset( $instance['registrationlink'] ) ? $instance['registrationlink'] : '';
        $registrationcolor = isset( $instance['registrationcolor'] ) ? $instance['registrationcolor'] : '';
        $registrationbgcolor = isset( $instance['registrationbgcolor'] ) ? $instance['registrationbgcolor'] : '';
	
	    echo stripslashes($args['before_widget']);?>
	    
	    <!-- REGISTRATION -->
<div class="registration-Btn">
<a href="<?php echo $registrationlink;?>" class="btn btn-lg" style="background-color:<?php echo $registrationbgcolor;?>; color: <?php echo $registrationcolor;?>;"> <?=$registrationtitle?></a>
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
			update_option('ef_registrationBtn_title', isset( $new_instance['registrationtitle'] ) ? $new_instance['registrationtitle'] : '' );
			update_option('ef_registrationBtn_link', isset( $new_instance['registrationlink'] ) ? $new_instance['registrationlink'] : '' );
            update_option('ef_registrationBtn_color', isset( $new_instance['registrationcolor'] ) ? $new_instance['registrationcolor'] : '' );
            update_option('ef_registrationBtn_bgcolor', isset( $new_instance['registrationbgcolor'] ) ? $new_instance['registrationbgcolor'] : '' );
		}

		$instance = $old_instance;
		
		/* Set the instance to the new instance. */
		$instance = $new_instance;
		
		/* Input fields */
		$instance['registrationtitle']	= strip_tags( $new_instance['registrationtitle'] );
		$instance['registrationlink']	= strip_tags( $new_instance['registrationlink'] );
        $instance['registrationcolor']	= strip_tags( $new_instance['registrationcolor'] );
        $instance['registrationbgcolor']	= strip_tags( $new_instance['registrationbgcolor'] );
        
		
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
	
		$registrationtitle 				= isset( $instance['registrationtitle'] ) ? $instance['registrationtitle'] : '';
	    $registrationlink 			= isset( $instance['registrationlink'] ) ? $instance['registrationlink'] : '';
        $registrationcolor = isset( $instance['registrationcolor'] ) ? $instance['registrationcolor'] : '';
        $registrationbgcolor = isset( $instance['registrationbgcolor'] ) ? $instance['registrationbgcolor'] : '';
        ?>
	    
	    <em><?php _e('Title:', 'dxef'); ?></em><br />
	    <input type="text" class="widefat" name="<?php echo $this->get_field_name( 'registrationtitle' ); ?>" value="<?php echo stripslashes($registrationtitle); ?>" />
	    <br /><br />
	    <em><?php _e('Link:', 'dxef'); ?></em><br />
	    <input type="text" class="widefat" name="<?php echo $this->get_field_name( 'registrationlink' ); ?>" value="<?php echo stripslashes($registrationlink); ?>" />
	    <br /><br />
        <em><?php _e('Text Color:', 'dxef'); ?></em><br />
	    <input type="text" class="widefat widget-color-picker" name="<?php echo $this->get_field_name( 'registrationcolor' ); ?>" value="<?php echo stripslashes($registrationcolor); ?>" />
	    <br /><br />
        <em><?php _e('Background Color:', 'dxef'); ?></em><br />
	    <input type="text" class="widefat widget-color-picker" name="<?php echo $this->get_field_name( 'registrationbgcolor' ); ?>" value="<?php echo stripslashes($registrationbgcolor); ?>" />
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
register_widget( 'Ef_RegistrationBtn_Widget' );