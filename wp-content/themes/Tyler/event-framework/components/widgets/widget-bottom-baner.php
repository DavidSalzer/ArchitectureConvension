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
class Ef_bottomBaner_Widget extends WP_Widget {

	/**
	 * Contact Widget setup.
	 * 
	 * @package Event Framework
	 * @since 1.0.0
	 */
	function Ef_bottomBaner_Widget() {
		
		$widget_name = EF_Framework_Helper::get_widget_name();
		
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'ef_bottombaner', 'description' => __( 'Add bottom baner to top of home page', 'dxef' ) );
		
		/* Create the widget. */
		$this->WP_Widget( 'ef_bottombaner', $widget_name . __( ' bottom Baner', 'dxef' ), $widget_ops );
		
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
		
		$bottomBanerSrc = isset( $instance['bottomBanerSrc'] ) ? $instance['bottomBanerSrc'] : '';
	
	    echo stripslashes($args['before_widget']);?>
	    
	    <!-- bottom-baner -->
	    <div class="pas-baner bottom-baner" style="background-image: url('<?php echo $bottomBanerSrc;?>')"></div>
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
			update_option('ef_bottombaner_widget_bottomBanerSrc', isset( $new_instance['bottomBanerSrc'] ) ? $new_instance['bottomBanerSrc'] : '' );
		}

		$instance = $old_instance;
		
		/* Set the instance to the new instance. */
		$instance = $new_instance;
		
		/* Input fields */
		$instance['bottomBanerSrc']	= strip_tags( $new_instance['bottomBanerSrc'] );
		
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
	
		$bottomBanerSrc = isset( $instance['bottomBanerSrc'] ) ? $instance['bottomBanerSrc'] : '';
	    ?>
	    <em><?php _e('Src:', 'dxef'); ?></em><br />
	    <input type="text" class="widefat fileUploader" name="<?php echo $this->get_field_name( 'bottomBanerSrc' ); ?>" value="<?php echo stripslashes($bottomBanerSrc); ?>" />
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
register_widget( 'Ef_bottomBaner_Widget' );