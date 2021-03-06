<?php
    // Exit if accessed directly
    if ( !defined( 'ABSPATH' ) ) exit;
    /**
     * Register the design world Widget
     * 
     * @package Event Framework
     * @since 1.0.0
     */
    /**
     * Ef_Design_Widget Widget Class.
     * 
     * 
     * @package Design
     * @since 1.0.0
     */
    class Ef_Design_Widget extends WP_Widget {
        /**
         * Contact Widget setup.
         * 
         * @package Event Framework
         * @since 1.0.0
         */
        function Ef_Design_Widget() {
    
            $widget_name = EF_Framework_Helper::get_widget_name();
    
            /* Widget settings. */
            $widget_ops = array( 'classname' => 'ef_design', 'description' => __( 'Shows the design', 'dxef' ) );
    
            /* Create the widget. */
            $this->WP_Widget( 'ef_design', $widget_name . __( ' Design', 'dxef' ), $widget_ops );
    
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
    
            $designtitle		= isset( $instance['designtitle'] ) ? $instance['designtitle'] : '';
            $designsubtitle	= isset( $instance['designsubtitle'] ) ? $instance['designsubtitle'] : '';
            $designcontent	= isset( $instance['designcontent'] ) ? $instance['designcontent'] : '';
    
            echo stripslashes( $args['before_widget'] );
?>

<!-- TEXT -->
<!--<div class="tile_design_wrap main-title">
    <h2><?php echo stripslashes($designtitle); ?></h2>
    <h3><?php echo stripslashes($designsubtitle); ?></h3>
    <div id="tile_design" class="container widget">


        <div id="nadlan-design">
            <div class="sessions condensed">
                <div class="row" style="margin-bottom: 25px;">
                    <div class="conferenc-type col-xs-6 col-sm-3">
                        <div class="session-inner">
                            <span class="speaker-name">מחווה לזכרו של אדריכל אולריק פלסנר</span>
                            <span class="speaker-title"></span>
                        </div>
                        <a href="http://designcity.org.il/%D7%9E%D7%97%D7%95%D7%95%D7%94-%D7%9E%D7%99%D7%95%D7%97%D7%93%D7%AA-%D7%9C%D7%90%D7%93%D7%A8%D7%99%D7%9B%D7%9C-%D7%90%D7%95%D7%9C%D7%A8%D7%99%D7%A7-%D7%A4%D7%9C%D7%A1%D7%A0%D7%A8/"><div class="more-details">לפרטים נוספים ></div></a>
                    </div>

                    <div class="conferenc-type col-xs-6 col-sm-3">
                        <div class="session-inner">
                            <span class="speaker-name">ההשראה מתחילה מהבית</span>
                            <span class="speaker-title"></span>
                        </div>
                        <a href="http://designcity.org.il/%D7%94%D7%94%D7%A9%D7%A8%D7%90%D7%94-%D7%9E%D7%AA%D7%97%D7%99%D7%9C%D7%94-%D7%9E%D7%94%D7%91%D7%99%D7%AA/"><div class="more-details">לפרטים נוספים ></div></a>
                    </div>

                    <div class="conferenc-type col-xs-6 col-sm-3">
                        <div class="session-inner">
                            <span class="speaker-name">ההשראה יוצאת מהבית</span>
                            <span class="speaker-title"></span>
                        </div>
                        <a href="http://designcity.org.il/%D7%94%D7%94%D7%A9%D7%A8%D7%90%D7%94-%D7%99%D7%95%D7%A6%D7%90%D7%AA-%D7%9E%D7%94%D7%91%D7%99%D7%AA/"><div class="more-details">לפרטים נוספים ></div></a>
                    </div>

                    <div class="conferenc-type col-xs-6 col-sm-3">
                        <div class="session-inner">
                            <span class="speaker-name">ההשראה יוצאת לגינה</span>
                            <span class="speaker-title"></span>
                        </div>
                        <a href="http://designcity.org.il/%D7%94%D7%94%D7%A9%D7%A8%D7%90%D7%94-%D7%99%D7%95%D7%A6%D7%90%D7%AA-%D7%9C%D7%92%D7%99%D7%A0%D7%94/"><div class="more-details">לפרטים נוספים ></div></a>
                    </div>
                    
                </div>

                <div class="row" style="margin-bottom: 50px;">
                    <div class="conferenc-type col-xs-6 col-sm-3">
                        <div class="session-inner">
                            <span class="speaker-name">ההשראה עולה על המטוס</span>
                            <span class="speaker-title"></span>
                        </div>
                        <a href="http://designcity.org.il/%D7%94%D7%94%D7%A9%D7%A8%D7%90%D7%94-%D7%A2%D7%95%D7%9C%D7%94-%D7%A2%D7%9C-%D7%9E%D7%98%D7%95%D7%A1/"><div class="more-details">לפרטים נוספים ></div></a>
                    </div>

                    <div class="conferenc-type col-xs-6 col-sm-3">
                        <div class="session-inner">
                            <span class="speaker-name">ההשראה היא של כוווווולם</span>
                            <span class="speaker-title"></span>
                        </div>
                        <a href="http://designcity.org.il/%D7%94%D7%94%D7%A9%D7%A8%D7%90%D7%94-%D7%94%D7%99%D7%90-%D7%A9%D7%9C-%D7%9B%D7%95%D7%95%D7%95%D7%95%D7%95%D7%95%D7%9C%D7%9D/"><div class="more-details">לפרטים נוספים ></div></a>
                    </div>

                    <div class="conferenc-type col-xs-6 col-sm-3">
                        <div class="session-inner">
                            <span class="speaker-name">ההשראה בחסות הטרנד</span>
                            <span class="speaker-title"></span>
                        </div>
                        <a href="http://designcity.org.il/%D7%94%D7%94%D7%A9%D7%A8%D7%90%D7%94-%D7%91%D7%97%D7%A1%D7%95%D7%AA-%D7%94%D7%98%D7%A8%D7%A0%D7%93/"><div class="more-details">לפרטים נוספים ></div></a>
                    </div>

                    
                    <div class="conferenc-type col-xs-6 col-sm-3">
                        <div class="session-inner">
                            <span class="speaker-name">החומרים שמהם עשויה ההשראה</span>
                            <span class="speaker-title"></span>
                        </div>
                        <a href="http://designcity.org.il/%D7%94%D7%97%D7%95%D7%9E%D7%A8%D7%99%D7%9D-%D7%A9%D7%9E%D7%94%D7%9D-%D7%A2%D7%A9%D7%95%D7%99%D7%94-%D7%94%D7%94%D7%A9%D7%A8%D7%90%D7%94/"><div class="more-details">לפרטים נוספים ></div></a>
                    </div>
                </div>






             
            </div>


        </div>


    </div>
</div>-->
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
        $instance['designtitle']		= strip_tags( $new_instance['designtitle'] );
        $instance['designsubtitle']	= strip_tags( $new_instance['designsubtitle'] );
        $instance['designcontent']	= $new_instance['designcontent'];
    
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
    
        $designtitle		= isset( $instance['designtitle'] ) ? $instance['designtitle'] : '';
        $designsubtitle	= isset( $instance['designsubtitle'] ) ? $instance['designsubtitle'] : '';
        $designcontent	= isset( $instance['designcontent'] ) ? $instance['designcontent'] : '';
?>

<em><?php _e('Title:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'designtitle' ); ?>" value="<?php echo stripslashes($designtitle); ?>" />
<br /><br />
<em><?php _e('Subtitle:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'designsubtitle' ); ?>" value="<?php echo stripslashes($designsubtitle); ?>" />
<br /><br />
<em><?php _e('Content:', 'dxef'); ?></em><br />
<textarea id="eventdescriptioncontent" name="<?php echo $this->get_field_name( 'designcontent' ); ?>" class="widefat" rows="10"><?php echo esc_html($designcontent);?></textarea>
<br /><br />
<input type="hidden" name="submitted" value="1" /><?php
    
        }
    }
    //Register Widget
    register_widget( 'Ef_Design_Widget' );
