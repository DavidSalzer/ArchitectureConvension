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
    
            echo stripslashes( $args['before_widget'] );
?>

<!-- TEXT -->
<div class="tile_conference_wrap main-title">
    <h2><?php echo stripslashes($conferencetitle); ?></h2>
    <h3><?php echo stripslashes($conferencesubtitle); ?></h3>
    <div id="tile_conference" class="container widget">


        <div id="nadlan-conference">
            <div class="sessions condensed">
                                    <!--<div class="session">
                                        <div class="session-inner">
                                            <span class="speakers-thumbs speakers-list">
                                                <a href="http://nadlancity.org.il/?speaker=%D7%93%D7%A4%D7%A0%D7%94-%D7%94%D7%A8%D7%9C%D7%91" class="speaker  featured">
                                                    <img width="319" height="319" src="http://nadlancity.org.il/wp-content/uploads/2015/08/------------------.jpg" class="attachment-post-thumbnail wp-post-image" alt="דפנה הרלב" title="דפנה הרלב">
                    
                                                </a>
                                            </span>
                                            <span class="speaker-name"><a href="http://nadlancity.org.il/?speaker=%D7%93%D7%A4%D7%A0%D7%94-%D7%94%D7%A8%D7%9C%D7%91">דפנה הרלב</a></span>
                                            <span class="speaker-title title-mobile">מנכ"ל</span>
                                            <span class="speaker-title title-mobile">קבוצת אביב</span>
                                            <a href="" class="speaker-title">תחום: מגורים</a>
                    
                                        </div>
                                    </div>-->
                                   
                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/---------------.png" class="attachment-post-thumbnail wp-post-image" alt="דפנה הרלב" title="דפנה הרלב">

                            </span>
                        </span>
                        <span class="speaker-name"><span>מיכי סתר</span></span>
                        <span class="speaker-title title-mobile">סתר אדריכלים</span>


                    </div>
                </div>
                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/-------------------.png" class="attachment-post-thumbnail wp-post-image" alt="דפנה הרלב" title="דפנה הרלב">

                            </span>
                        </span>
                        <span class="speaker-name"><span>מירי בלבול</span></span>
                        <span class="speaker-title title-mobile">סקולה</span>


                    </div>
                </div>
                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/-----------------------------------------------------smallBW.jpg" class="attachment-post-thumbnail wp-post-image" alt="דפנה הרלב" title="דפנה הרלב">

                            </span>
                        </span>
                        <span class="speaker-name"><span>אירנה קרוננברג ואלון ברנוביץ	</span></span>
                        <span class="speaker-title title-mobile">BARANOWITZ + KRONENBERG</span>


                    </div>
                </div>
                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/---------------1-1.png" class="attachment-post-thumbnail wp-post-image" alt="דפנה הרלב" title="דפנה הרלב">

                            </span>
                        </span>
                        <span class="speaker-name"><span>יואב מסר</span></span>
                        <span class="speaker-title title-mobile">יואב מסר אדריכלים</span>


                    </div>
                </div>
                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/-----------------------1-1.png" class="attachment-post-thumbnail wp-post-image" alt="דפנה הרלב" title="דפנה הרלב">

                            </span>
                        </span>
                        <span class="speaker-name"><span>מיכאל אזולאי</span></span>
                        <span class="speaker-title title-mobile">סטודיו מיכאל אזולאי</span>


                    </div>
                </div>
                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/-------------------1-1.png" class="attachment-post-thumbnail wp-post-image" alt="דפנה הרלב" title="דפנה הרלב">

                            </span>
                        </span>
                        <span class="speaker-name"><span>יוני מונג'ק</span></span>
                        <span class="speaker-title title-mobile">יוני מונג'ק אדריכלות</span>


                    </div>
                </div>
                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/---------------------------BW-1.jpg" class="attachment-post-thumbnail wp-post-image" alt="דפנה הרלב" title="דפנה הרלב">

                            </span>
                        </span>
                        <span class="speaker-name"><span>פיצו קדם</span></span>
                        <span class="speaker-title title-mobile">פיצו קדם אדריכלים</span>


                    </div>
                </div>
                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/ORLYR.png" class="attachment-post-thumbnail wp-post-image" alt="דפנה הרלב" title="דפנה הרלב">

                            </span>
                        </span>
                        <span class="speaker-name"><span>אורלי רובינזון</span></span>
                        <span class="speaker-title title-mobile">יוצרת ספרי עיצוב ואדריכלות</span>


                    </div>
                </div>
                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/-------------BW.jpg" class="attachment-post-thumbnail wp-post-image" alt="דפנה הרלב" title="דפנה הרלב">

                            </span>
                        </span>
                        <span class="speaker-name"><span>רות פקר</span></span>
                        <span class="speaker-title title-mobile">לוין-פקר אדריכלים</span>


                    </div>
                </div>

            </div>
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
<input type="hidden" name="submitted" value="1" /><?php
    
        }
    }
    //Register Widget
    register_widget( 'Ef_Conference_Widget' );
