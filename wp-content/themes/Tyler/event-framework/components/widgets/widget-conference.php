<?php
    // Exit if accessed directly
    if ( !defined( 'ABSPATH' ) ) exit;
    /**
     * Register the Conference Widget
     * 
     * @package Event Framework
     * @since 1.0.0
     */
    /**
     * Ef_Conference_Widget Widget Class.
     * 
     * 
     * @package Conference
     * @since 1.0.0
     */
    class Ef_Conference_Widget extends WP_Widget {
        /**
         * Contact Widget setup.
         * 
         * @package Event Framework
         * @since 1.0.0
         */
        function Ef_Conference_Widget() {
    
            $widget_name = EF_Framework_Helper::get_widget_name();
    
            /* Widget settings. */
            $widget_ops = array( 'classname' => 'ef_conference', 'description' => __( 'Shows the conference', 'dxef' ) );
    
            /* Create the widget. */
            $this->WP_Widget( 'ef_conference', $widget_name . __( ' Conference', 'dxef' ), $widget_ops );
    
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
    
            $conferencetitle		= isset( $instance['conferencetitle'] ) ? $instance['conferencetitle'] : '';
            $conferencesubtitle	= isset( $instance['conferencesubtitle'] ) ? $instance['conferencesubtitle'] : '';
            $conferencecontent	= isset( $instance['conferencecontent'] ) ? $instance['conferencecontent'] : '';
			$sessionsConfrence=new Confrence();
            echo stripslashes( $args['before_widget'] );
?>

<!-- TEXT -->
<div class="tile_conference_wrap">
    <div id="tile_conference" class="container widget">
        <div id="nadlan-conference">
            <h2 style="font-size:22px;">
			<p><?php echo stripslashes($conferencetitle); ?></p>
			</h2>
            <div class="sessions condensed">
                <?php echo $sessionsConfrence->render();?>
            </div>


        </div>


    </div>
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
    
        $instance = $old_instance;
    
        /* Set the instance to the new instance. */
        $instance = $new_instance;
    
        /* Input fields */
        $instance['conferencetitle']		= strip_tags( $new_instance['conferencetitle'] );
        $instance['conferencesubtitle']	= strip_tags( $new_instance['conferencesubtitle'] );
        $instance['conferencecontent']	= $new_instance['conferencecontent'];
    
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
    
        $conferencetitle		= isset( $instance['conferencetitle'] ) ? $instance['conferencetitle'] : '';
        $conferencesubtitle	= isset( $instance['conferencesubtitle'] ) ? $instance['conferencesubtitle'] : '';
        $conferencecontent	= isset( $instance['conferencecontent'] ) ? $instance['conferencecontent'] : '';
?>

<em><?php _e('Title:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'conferencetitle' ); ?>" value="<?php echo stripslashes($conferencetitle); ?>" />
<br /><br />
<em><?php _e('Subtitle:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'conferencesubtitle' ); ?>" value="<?php echo stripslashes($conferencesubtitle); ?>" />
<br /><br />
<em><?php _e('Content:', 'dxef'); ?></em><br />
<textarea id="eventdescriptioncontent" name="<?php echo $this->get_field_name( 'conferencecontent' ); ?>" class="widefat" rows="10"><?php echo esc_html($conferencecontent);?></textarea>
<br /><br />
<a href="<?=admin_url()?>/options-general.php?page=confrence_speakers_admin"><em><?php _e('To confrence speakers admin:', 'dxef'); ?></em></a><br />

<input type="hidden" name="submitted" value="1" /><?php
    
        }
    }
    //Register Widget
    register_widget( 'Ef_Conference_Widget' );
