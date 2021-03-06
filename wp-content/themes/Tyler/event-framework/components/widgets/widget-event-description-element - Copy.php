<?php
    // Exit if accessed directly
    if ( !defined( 'ABSPATH' ) ) exit;
    /**
     * Register the Event Description Widget
     * 
     * @package Event Framework
     * @since 1.0.0
     */
    /**
     * Ef_Event_Description_Widget Widget Class.
     * 
     * 
     * @package Event Description
     * @since 1.0.0
     */
    class Ef_Event_Description_element_Widget extends WP_Widget {
        /**
         * Contact Widget setup.
         * 
         * @package Event Framework
         * @since 1.0.0
         */
        function Ef_Event_Description_Widget() {
    
            $widget_name = EF_Framework_Helper::get_widget_name();
    
            /* Widget settings. */
            $widget_ops = array( 'classname' => 'ef_event_description_element', 'description' => __( 'Shows the event description element', 'dxef' ) );
    
            /* Create the widget. */
            $this->WP_Widget( 'ef_event_description_element', $widget_name . __( ' Event Description Element', 'dxef' ), $widget_ops );
    
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
    
            $title		= isset( $instance['title'] ) ? $instance['title'] : '';
            $color	= isset( $instance['color'] ) ? $instance['color'] : '';
            $image	= isset( $instance['image'] ) ? $instance['image'] : '';
			
            echo stripslashes( $args['before_widget'] );
?>

<!-- speaker wideget element -->

                <div class="speaker  featured">
                    <a class="speaker-inner">

                        <span class="photo" style="background: <?=$color?>;">
                            <img src="<?=$image?>" class="attachment-tyler-speaker wp-post-image" alt="ועידות" title="ועידות">
                        </span>
                        <span class="name"><span class="text-fit"><span class="text-fit-inner" style="display:block"><?=$title?></span></span></span>

                    </a>
                </div>
 <!-- speaker wideget end -->              
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
    
        $instance = $old_instance;
    
        /* Set the instance to the new instance. */
        $instance = $new_instance;
    
        /* Input fields */
        $instance['title']		= strip_tags( $new_instance['title'] );
        $instance['color']	= strip_tags( $new_instance['color'] );
        $instance['image']	= $new_instance['image'];
    
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
    
        $title		= isset( $instance['title'] ) ? $instance['title'] : '';
        $image	= isset( $instance['image'] ) ? $instance['image'] : '';
        $color	= isset( $instance['color'] ) ? $instance['color'] : '';
?>

<em><?php _e('Title:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo stripslashes($title); ?>" />
<br /><br />
<em><?php _e('Color:', 'dxef'); ?></em><br />
<input type="text" class="widefat colorpicker" name="<?php echo $this->get_field_name( 'color' ); ?>" value="<?php echo stripslashes($color); ?>" />
<br /><br />
<em><?php _e('Image:', 'dxef'); ?></em><br />
<textarea id="eventdescriptioncontent" name="<?php echo $this->get_field_name( 'image' ); ?>" class="widefat" rows="10"><?php echo esc_html($$image);?></textarea>
<br /><br />
<input type="hidden" name="submitted" value="1" />
<script>
  (function ($) {
     $(function () {
    $('.colorpicker').wpColorPicker();
     });
  }(jQuery));
 </script>
<?php
    
        }
    }
    //Register Widget
    register_widget( 'Ef_Event_Description_element_Widget' );
