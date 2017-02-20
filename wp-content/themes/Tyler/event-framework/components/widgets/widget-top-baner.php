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
class Ef_topBaner_Widget extends WP_Widget {

	/**
	 * Contact Widget setup.
	 * 
	 * @package Event Framework
	 * @since 1.0.0
	 */
	function Ef_topBaner_Widget() {
		
		$widget_name = EF_Framework_Helper::get_widget_name();
		
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'ef_topbaner', 'description' => __( 'Add top baner to top of home page', 'dxef' ) );
		
		/* Create the widget. */
		$this->WP_Widget( 'ef_topbaner', $widget_name . __( ' Top Baner', 'dxef' ), $widget_ops );
		
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
		
		$topBanerSrc = isset( $instance['topBanerSrc'] ) ? $instance['topBanerSrc'] : '';
	
	    echo stripslashes($args['before_widget']);?>
	    
	    <!-- top-baner -->
	    <div class="pas-baner top-baner" style="background-image: url('<?php echo $topBanerSrc;?>')"></div>
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
			update_option('ef_topbaner_widget_topBanerSrc', isset( $new_instance['topBanerSrc'] ) ? $new_instance['topBanerSrc'] : '' );
		}

		$instance = $old_instance;
		
		/* Set the instance to the new instance. */
		$instance = $new_instance;
		
		/* Input fields */
		$instance['topBanerSrc']	= strip_tags( $new_instance['topBanerSrc'] );
		
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
	
		$topBanerSrc = isset( $instance['topBanerSrc'] ) ? $instance['topBanerSrc'] : '';
	    ?>
	    <em><?php _e('Src:', 'dxef'); ?></em><br />
	    <input type="text" class="widefat fileUploader" name="<?php echo $this->get_field_name( 'topBanerSrc' ); ?>" value="<?php echo stripslashes($topBanerSrc); ?>" />
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
register_widget( 'Ef_topBaner_Widget' );