<?php
    // Exit if accessed directly
    if ( !defined( 'ABSPATH' ) ) exit;
    /**
     * Register the Concert Widget
     * 
     * @package Event Framework
     * @since 1.0.0
     */
    /**
     * Ef_Concert_Widget Widget Class.
     * 
     * 
     * @package Concert
     * @since 1.0.0
     */
    class Ef_Concert_Widget extends WP_Widget {
        /**
         * Contact Widget setup.
         * 
         * @package Event Framework
         * @since 1.0.0
         */
        function Ef_Concert_Widget() {
    
            $widget_name = EF_Framework_Helper::get_widget_name();
    
            /* Widget settings. */
            $widget_ops = array( 'classname' => 'ef_concert', 'description' => __( 'Shows the concert', 'dxef' ) );
    
            /* Create the widget. */
            $this->WP_Widget( 'ef_concert', $widget_name . __( ' concert', 'dxef' ), $widget_ops );
    
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
    
            $concerttitle		= isset( $instance['concerttitle'] ) ? $instance['concerttitle'] : '';
            $concertsubtitle	= isset( $instance['concertsubtitle'] ) ? $instance['concertsubtitle'] : '';
            $concertcontent	= isset( $instance['concertcontent'] ) ? $instance['concertcontent'] : '';
    
            echo stripslashes( $args['before_widget'] );
?>

<!-- TEXT -->
<div class="tile_concert_wrap main-title">
    <h2><?php echo stripslashes($concerttitle); ?></h2>
     <h3><?php echo stripslashes($concertsubtitle); ?></h3>
    <div id="tile_concert" class="container widget">
        

        <div id="nadlan-concert">
            <div class="item-show">
                <p style="font-weight: bold;">מופע פתיחה 6.12.16</p>
                <p>להקת אתניקס</p>
                <img src="http://nadlancity.org.il/wp-content/uploads/2016/08/show1.png" class="img-responsive" data-toggle="modal" data-target="#etnix" />
            </div>

            <div class="item-show">
                <p style="font-weight: bold;">מופע  7.12.16</p>
                <p>עברי לידר מארח את ברי סחרוף</p>
                <img src="http://nadlancity.org.il/wp-content/uploads/2016/08/show2.png" class="img-responsive" data-toggle="modal" data-target="#ivri" />
            </div>
        </div>


    </div>
</div>
<!-- Modal 1-->
<div class="modal fade" id="etnix" tabindex="-1" role="dialog" aria-labelledby="etnix">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">6.12.16</h4>
            </div>
            <div class="modal-body">
                <p>המופע הפותח של עיר הנדל"ן</p>
                <p>עם להקת אתניקס  – החוגגת 30 שנות יצירה ומגיעה לפתוח את עיר הנדל"ן ולהרים איתכם ערב קצבי ושמח!</p>
                <p><img src="http://nadlancity.org.il/wp-content/uploads/2016/08/show1.png"  style="width: 100%; height: auto;"/><!--<img src="http://nadlancity.org.il/wp-content/uploads/2015/10/harel.jpg" style="width: 50%; height: auto;"/>--></p>
            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="button" class="btn btn-default" data-dismiss="modal">סגור</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2-->
<div class="modal fade" id="ivri" tabindex="-1" role="dialog" aria-labelledby="ivri">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">7.12.16</h4>
            </div>
            <div class="modal-body">
                <p>עברי לידר מארח את ברי סחרוף</p>
				<p>עברי לידר במופע פופ שמרים את הקהל, המשלב טרנדים עכשוויים בפופ העולמי</p>
				<p>במופע: ממיטב שיריו, שהפכו זה מכבר לנכס צאן ברזל במוזיקה הישראלית ושירים מאלבומו: "האהבה הזאת שלנו".</p>
				<p>עיברי יארח את ברי סחרוף  מהמוזיקאים הישראלים החשובים והאהובים!</p>
                <p><img src="http://nadlancity.org.il/wp-content/uploads/2016/08/show2.png" class="img-responsive modalImg" /></p>
            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="button" class="btn btn-default" data-dismiss="modal">סגור</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3-->
<!--<div class="modal fade" id="party" tabindex="-1" role="dialog" aria-labelledby="party">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">המסיבה: מופע של להקת הקצב של אביהו פנחסוב</h4>
            </div>
            <div class="modal-body">
                <p>מועדון הקצב של אביהו פנחסוב הוא הרכב שכולו קיבוץ גלויות של מוסיקאים ממקומות שונים בארץ ומתקופות שונות בזמן </p>
                <p>המועדון מפגיש את מיגוון ההשפעות המוסיקליות שעיצבו את חייו של אביהו והקמתו היתה דרכו לחזור הביתה לשורשים.</p>
                <p><img src="http://nadlancity.org.il/wp-content/uploads/2015/10/party.jpg" class="img-responsive modalImg" /></p>
            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="button" class="btn btn-default" data-dismiss="modal">סגור</button>
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
        $instance['concerttitle']		= strip_tags( $new_instance['concerttitle'] );
        $instance['concertsubtitle']	= strip_tags( $new_instance['concertsubtitle'] );
        $instance['concertcontent']	= $new_instance['concertcontent'];
    
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
    
        $concerttitle		= isset( $instance['concerttitle'] ) ? $instance['concerttitle'] : '';
        $concertsubtitle	= isset( $instance['concertsubtitle'] ) ? $instance['concertsubtitle'] : '';
        $concertcontent	= isset( $instance['concertcontent'] ) ? $instance['concertcontent'] : '';
?>

<em><?php _e('Title:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'concerttitle' ); ?>" value="<?php echo stripslashes($concerttitle); ?>" />
<br /><br />
<em><?php _e('Subtitle:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'concertsubtitle' ); ?>" value="<?php echo stripslashes($concertsubtitle); ?>" />
<br /><br />
<em><?php _e('Content:', 'dxef'); ?></em><br />
<textarea id="eventdescriptioncontent" name="<?php echo $this->get_field_name( 'concertcontent' ); ?>" class="widefat" rows="10"><?php echo esc_html($concertcontent);?></textarea>
<br /><br />
<input type="hidden" name="submitted" value="1" /><?php
    
        }
    }
    //Register Widget
    register_widget( 'Ef_concert_Widget' );
