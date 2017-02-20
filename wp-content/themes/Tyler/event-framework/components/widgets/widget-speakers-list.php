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
    class Ef_SpeakersList_Widget extends WP_Widget {
        /**
         * Contact Widget setup.
         * 
         * @package Event Framework
         * @since 1.0.0
         */
        function Ef_SpeakersList_Widget() {
    
            $widget_name = EF_Framework_Helper::get_widget_name();
    
            /* Widget settings. */
            $widget_ops = array( 'classname' => 'ef_speakersList', 'description' => __( 'Shows the Speakers List', 'dxef' ) );
    
            /* Create the widget. */
            $this->WP_Widget( 'ef_speakersList', $widget_name . __( ' Home Speakers List', 'dxef' ), $widget_ops );
    
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
    
            $speakersListtitle		= isset( $instance['speakersListtitle'] ) ? $instance['speakersListtitle'] : '';
            $speakersListsubtitle	= isset( $instance['speakersListsubtitle'] ) ? $instance['speakersListsubtitle'] : '';
            $speakersListcontent	= isset( $instance['speakersListcontent'] ) ? $instance['speakersListcontent'] : '';
			$sessionsSpeakersList=new speakersList();
            echo stripslashes( $args['before_widget'] );
?>

<!-- TEXT -->
<div class="tile_conference_wrap">
    <div id="tile_conference" class="container widget">
        <div id="nadlan-speakers">
            <h2 style="font-size:22px;">
			<p><?php echo stripslashes($speakersListtitle); ?></p>
			</h2>
            <div class="sessions condensed">
                <?php echo $sessionsSpeakersList->render();?>
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
        $instance['speakersListtitle']		= strip_tags( $new_instance['speakersListtitle'] );
        $instance['speakersListsubtitle']	= strip_tags( $new_instance['speakersListsubtitle'] );
        $instance['speakersListcontent']	= $new_instance['speakersListcontent'];
    
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
    
        $speakersListtitle		= isset( $instance['speakersListtitle'] ) ? $instance['speakersListtitle'] : '';
        $speakersListsubtitle	= isset( $instance['speakersListsubtitle'] ) ? $instance['speakersListsubtitle'] : '';
        $speakersListcontent	= isset( $instance['speakersListcontent'] ) ? $instance['speakersListcontent'] : '';
?>

<em><?php _e('Title:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'speakersListtitle' ); ?>" value="<?php echo stripslashes($speakersListtitle); ?>" />
<br /><br />
<em><?php _e('Subtitle:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'speakersListsubtitle' ); ?>" value="<?php echo stripslashes($speakersListsubtitle); ?>" />
<br /><br />
<em><?php _e('Content:', 'dxef'); ?></em><br />
<textarea id="eventdescriptioncontent" name="<?php echo $this->get_field_name( 'speakersListcontent' ); ?>" class="widefat" rows="10"><?php echo esc_html($speakersListcontent);?></textarea>
<br /><br />
<a href="<?=admin_url()?>/options-general.php?page=home_speakers_list_admin"><em><?php _e('To Speakers List admin:', 'dxef'); ?></em></a><br />

<input type="hidden" name="submitted" value="1" /><?php
    
        }
    }
    //Register Widget
    register_widget( 'Ef_SpeakersList_Widget' );
