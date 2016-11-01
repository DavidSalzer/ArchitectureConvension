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

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/-----------------------1-1.png" class="attachment-post-thumbnail wp-post-image" alt="מיכאל אזולאי" title="מיכאל אזולאי">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%9E%D7%99%D7%9B%D7%90%D7%9C-%D7%90%D7%96%D7%95%D7%9C%D7%90%D7%99/"><span>מיכאל אזולאי</span></a>
                        <span class="speaker-title title-mobile">סטודיו מיכאל אזולאי</span>


                    </div>
                </div>

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/10/---------------------.png" class="attachment-post-thumbnail wp-post-image" alt="יואב אנדרמן" title="יואב אנדרמן">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%99%D7%95%D7%90%D7%91-%D7%90%D7%A0%D7%93%D7%A8%D7%9E%D7%9F/"><span>יואב אנדרמן</span></a>
                        <span class="speaker-title title-mobile">אנדרמן אדריכלים</span>


                    </div>
                </div>

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/miri-balbul-NEW.jpg" class="attachment-post-thumbnail wp-post-image" alt="מירי בלבול" title="מירי בלבול">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%9E%D7%99%D7%A8%D7%99-%D7%91%D7%9C%D7%91%D7%95%D7%9C/"><span>מירי בלבול</span></a>
                        <span class="speaker-title title-mobile">סקולה</span>


                    </div>
                </div>


                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/10/BW--------------.jpg" class="attachment-post-thumbnail wp-post-image" alt="מיקה בר" title="מיקה בר">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%9E%D7%99%D7%A7%D7%94-%D7%91%D7%A8/"><span>מיקה בר</span></a>
                        <span class="speaker-title title-mobile">סטודיו מיקה בר לעיצוב טקסטיל</span>


                    </div>
                </div>

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/dror-golan.jpg" class="attachment-post-thumbnail wp-post-image" alt="דרור גולן" title="דרור גולן">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%93%D7%A8%D7%95%D7%A8-%D7%92%D7%95%D7%9C%D7%9F/"><span>דרור גולן</span></a>
                        <span class="speaker-title title-mobile">שומע [חושב] עושה - עיצוב והפקת אירועים</span>


                    </div>
                </div>

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/-----------------.jpg" class="attachment-post-thumbnail wp-post-image" alt="חיים דותן" title="חיים דותן">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%97%D7%99%D7%99%D7%9D-%D7%93%D7%95%D7%AA%D7%9F/"><span>חיים דותן</span></a>
                        <span class="speaker-title title-mobile">חיים דותן אדריכלים</span>


                    </div>
                </div>


                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/10/-----------------BW.jpg" class="attachment-post-thumbnail wp-post-image" alt="דור כרמון" title="דור כרמון">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%93%D7%95%D7%A8-%D7%9B%D7%A8%D7%9E%D7%95%D7%9F/"><span>דור כרמון</span></a>
                        <span class="speaker-title title-mobile">מעצב מוצר</span>


                    </div>
                </div>


                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/-------------------1-1.png" class="attachment-post-thumbnail wp-post-image" alt="יוני מונג'ק" title="יוני מונג'ק">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%99%D7%95%D7%A0%D7%99-%D7%9E%D7%95%D7%A0%D7%92%D7%A7/"><span>יוני מונג'ק</span></a>
                        <span class="speaker-title title-mobile">יוני מונג'ק אדריכלות</span>


                    </div>
                </div>

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/---------------1-1.png" class="attachment-post-thumbnail wp-post-image" alt="יואב מסר" title="יואב מסר">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%99%D7%95%D7%90%D7%91-%D7%9E%D7%A1%D7%A8/"><span>יואב מסר</span></a>
                        <span class="speaker-title title-mobile">יואב מסר אדריכלים</span>


                    </div>
                </div>

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/---------------.png" class="attachment-post-thumbnail wp-post-image" alt="מיכי סתר" title="מיכי סתר">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%9E%D7%99%D7%9B%D7%99-%D7%A1%D7%AA%D7%A8/"><span>מיכי סתר</span></a>
                        <span class="speaker-title title-mobile">סתר אדריכלים</span>


                    </div>
                </div> 

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/10/Shahar-Peleg.jpg" class="attachment-post-thumbnail wp-post-image" alt="שחר פלג" title="שחר פלג">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%A9%D7%97%D7%A8-%D7%A4%D7%9C%D7%92/"><span>שחר פלג</span></a>
                        <span class="speaker-title title-mobile">סטודיו <br/>PELEG DESIGN</span>


                    </div>
                </div>

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/DANIELABW.jpg" alt="דניאלה פלסנר" title="דניאלה פלסנר">

                            </span>
                        </span>
                        <a href="http://designcity.org.il/speakers/%D7%93%D7%A0%D7%99%D7%90%D7%9C%D7%94-%D7%A4%D7%9C%D7%A1%D7%A0%D7%A8/" class="speaker-name"><span>דניאלה פלסנר</span></a>
                        <span class="speaker-title title-mobile">פלסנר אדריכלים</span>


                    </div>
                </div>
                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/MIABW.jpg" alt="מיה פלסנר" title="מיה פלסנר">

                            </span>
                        </span>
                        <a href="http://designcity.org.il/speakers/%D7%9E%D7%99%D7%94-%D7%A4%D7%9C%D7%A1%D7%A0%D7%A8/" class="speaker-name"><span>מיה פלסנר</span></a>
                        <span class="speaker-title title-mobile">פלסנר אדריכלים</span>


                    </div>
                </div>

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/-------------BW.jpg" class="attachment-post-thumbnail wp-post-image" alt="רות פקר" title="רות פקר">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%A8%D7%95%D7%AA-%D7%A4%D7%A7%D7%A8/"><span>רות פקר</span></a>
                        <span class="speaker-title title-mobile">לוין-פקר אדריכלים</span>


                    </div>
                </div>
                
                

                

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/tsafra-small.jpg" class="attachment-post-thumbnail wp-post-image" alt="צפרא פרלמוטר" title="צפרא פרלמוטר">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%A6%D7%A4%D7%A8%D7%90-%D7%A4%D7%A8%D7%9C%D7%9E%D7%95%D7%98%D7%A8/"><span>צפרא פרלמוטר</span></a>
                        <span class="speaker-title title-mobile">מייסדת ומנכ"לית CO.CO</span>


                    </div>
                </div>

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/10/---------------.jpg" class="attachment-post-thumbnail wp-post-image" alt="מיי קאהן" title="מיי קאהן">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%9E%D7%99%D7%99-%D7%A7%D7%90%D7%94%D7%9F/"><span>מיי קאהן</span></a>
                        <span class="speaker-title title-mobile">סטודיו קאהן</span>


                    </div>
                </div>

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/---------------------------BW-1.jpg" class="attachment-post-thumbnail wp-post-image" alt="פיצו קדם" title="פיצו קדם">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%A4%D7%99%D7%A6%D7%95-%D7%A7%D7%93%D7%9D/"><span>פיצו קדם</span></a>
                        <span class="speaker-title title-mobile">פיצו קדם אדריכלים</span>


                    </div>
                </div>

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/-----------------------------------------------------smallBW.jpg" class="attachment-post-thumbnail wp-post-image" alt="ירנה קרוננברג ואלון ברנוביץ" title="ירנה קרוננברג ואלון ברנוביץ">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%90%D7%9C%D7%95%D7%9F-%D7%91%D7%A8%D7%A0%D7%95%D7%91%D7%99%D7%A5/"><span>אירנה קרוננברג ואלון ברנוביץ</span></a>
                        <span class="speaker-title title-mobile">BARANOWITZ + KRONENBERG</span>


                    </div>
                </div>

                <div class="session">
                    <div class="session-inner">
                        <span class="speakers-thumbs speakers-list">
                            <span class="speaker  featured">
                                <img width="319" height="319" src="http://designcity.org.il/wp-content/uploads/2016/09/ORLY-R-BW.jpg" class="attachment-post-thumbnail wp-post-image" alt="אורלי רובינזון" title="אורלי רובינזון">

                            </span>
                        </span>
                        <a class="speaker-name" href="http://designcity.org.il/speakers/%D7%90%D7%95%D7%A8%D7%9C%D7%99-%D7%A8%D7%95%D7%91%D7%99%D7%A0%D7%96%D7%95%D7%9F/"><span>אורלי רובינזון</span></a>
                        <span class="speaker-title title-mobile">יוצרת ספרי עיצוב ואדריכלות</span>


                    </div>
                </div>
                <!--------------------------------------------------------------------------------->


                                    <!--<div class="session">
                                        <div class="session-inner">
                                            <span class="speakers-thumbs speakers-list">
                                                <a href="http://nadlancity.org.il/?speaker=%D7%93%D7%A4%D7%A0%D7%94-%D7%94%D7%A8%D7%9C%D7%91" class="speaker  featured">
                                                    <img width="319" height="319" src="http://nadlancity.org.il/wp-content/uploads/2015/08/------------------.jpg" class="attachment-post-thumbnail wp-post-image" alt="" title="">
                    
                                                </a>
                                            </span>
                                            <span class="speaker-name"><a href="http://nadlancity.org.il/?speaker=%D7%93%D7%A4%D7%A0%D7%94-%D7%94%D7%A8%D7%9C%D7%91"></a></span>
                                            <span class="speaker-title title-mobile">מנכ"ל</span>
                                            <span class="speaker-title title-mobile">קבוצת אביב</span>
                                            <a href="" class="speaker-title">תחום: מגורים</a>
                    
                                        </div>
                                    </div>-->
                                   
                               
                

                
                
                
                
                
                

                
                

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
