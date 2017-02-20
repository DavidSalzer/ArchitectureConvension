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
class Ef_AddText_Widget extends WP_Widget {

	/**
	 * Contact Widget setup.
	 * 
	 * @package Event Framework
	 * @since 1.0.0
	 */
	function Ef_AddText_Widget() {
		
		$widget_name = EF_Framework_Helper::get_widget_name();
		
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'ef_addText', 'description' => __( 'Add more text', 'dxef' ) );
		
		/* Create the widget. */
		$this->WP_Widget( 'ef_addText', $widget_name . __( ' Additional Text', 'dxef' ), $widget_ops );
		
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
		
		$addText = isset( $instance['addText'] ) ? $instance['addText'] : '';
        $fontColor = isset( $instance['fontColor'] ) ? $instance['fontColor'] : '';
	
	    echo stripslashes($args['before_widget']);?>
	    
	    <!-- REGISTRATION -->
<div class="add-text" style="color: <?php echo $fontColor; ?>">
<?php echo $addText; ?>
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
			update_option('ef_addText_widget_addText', isset( $new_instance['addText'] ) ? $new_instance['addText'] : '' );
            update_option('ef_addText_widget_fontColor', isset( $new_instance['fontColor'] ) ? $new_instance['fontColor'] : '' );
		}

		$instance = $old_instance;
		
		/* Set the instance to the new instance. */
		$instance = $new_instance;
		
		/* Input fields */
		$instance['addText']	= strip_tags( $new_instance['addText'] );
        $instance['fontColor']	= strip_tags( $new_instance['fontColor'] );

		
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
	
		$addText 				= isset( $instance['addText'] ) ? $instance['addText'] : '';
        $fontColor = isset( $instance['fontColor'] ) ? $instance['fontColor'] : '';
        ?>
	    
	    <em><?php _e('Text:', 'dxef'); ?></em><br />
	    <input type="text" class="widefat" name="<?php echo $this->get_field_name( 'addText' ); ?>" value="<?php echo stripslashes($addText); ?>" />
	    <br /><br />
        <em><?php _e('Color (Hex):', 'dxef'); ?></em><br />
	    <input type="text" class="widefat colorpicker" name="<?php echo $this->get_field_name( 'fontColor' ); ?>" value="<?php echo stripslashes($fontColor); ?>" />
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
register_widget( 'Ef_AddText_Widget' );