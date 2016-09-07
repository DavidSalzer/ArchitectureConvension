<?php
    // Exit if accessed directly
    if ( !defined( 'ABSPATH' ) ) exit;
    /**
     * Register the Contact Widget
     * 
     * @package Event Framework
     * @since 1.0.0
     */
    /**
     * Ef_Contact_Widget Widget Class.
     * 
     * 
     * @package Event Framework
     * @since 1.0.0
     */
    class Ef_Contact_Widget extends WP_Widget {
    
        /**
         * Contact Widget setup.
         * 
         * @package Event Framework
         * @since 1.0.0
         */
        function Ef_Contact_Widget() {
    
            $widget_name = EF_Framework_Helper::get_widget_name();
    
            /* Widget settings. */
            $widget_ops = array( 'classname' => 'ef_contact', 'description' => __( 'Display a Contact Form', 'dxef' ) );
    
            /* Create the widget. */
            $this->WP_Widget( 'ef_contact', $widget_name . __( ' Contact Form', 'dxef' ), $widget_ops );
    
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
    
            $contacttitle 			= isset( $instance['contacttitle'] ) ? $instance['contacttitle'] : '';
            $contactsubtitle 		= isset( $instance['contactsubtitle'] ) ? $instance['contactsubtitle'] : '';
            $contactsendtext 		= isset( $instance['contactsendtext'] ) ? $instance['contactsendtext'] : '';
            $contactemail			= isset( $instance['contactemail'] ) ? $instance['contactemail'] : '';
            $recaptchapublickey		= isset( $instance['recaptchapublickey'] ) ? $instance['recaptchapublickey'] : '';
            $recaptchaprivatekey	= isset( $instance['recaptchaprivatekey'] ) ? $instance['recaptchaprivatekey'] : '';
    
            echo stripslashes( $args['before_widget'] );
?>

<!-- CONTACT US -->
<div id="tile_contact" class="container widget">
    <h2><?php echo stripslashes($contacttitle); ?></h2>
    <h3><?php echo stripslashes($contactsubtitle); ?></h3>
    <form method="post" class="contact-us">
        <div class="row">
            <div class="col-sm-6 col-md-8 contact-us-col">
                <input type="text" name="contactFirstName" placeholder="שם פרטי" />
                <input type="text" name="contactLastName" placeholder="שם משפחה" />
                <input type="text" name="phone" placeholder="<?php _e('Number', 'dxef'); ?>" />
                <input type="text" name="email" placeholder="<?php _e('Email', 'dxef'); ?>" />
                <input type="hidden" name="mediaId" id="mediaIdInput" />
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4"><?php
                
                if( !empty( $recaptchapublickey ) && !empty( $recaptchaprivatekey ) ) {
                    echo recaptcha_get_html($recaptchapublickey);
                }
                ?>
            </div>
            <div class="col-sm-6 col-md-8 contact-us-col">
                <button type="submit" class="btn btn-secondary" style="width: 100%"><?php
                    
                    echo stripslashes($contactsendtext);
                    ?></button>
            </div>
        </div>
        <input type="hidden" name="recaptcha_publickey" value="<?php echo $recaptchapublickey;?>" />
        <input type="hidden" name="recaptcha_privatekey" value="<?php echo $recaptchaprivatekey;?>" />
        <input type="hidden" name="contact_email" value="<?php echo $contactemail;?>" />

        <input type="hidden" name="action" value="send_contact_email" />
        <input type="hidden" name="submitted" id="submitted" value="true" />
    </form>

    <a href="<?php echo home_url( '/' ); ?>?page_id=48" class="btn btn-lg btn-secondary sign-up-btn">הירשם און ליין</a>
</div>


<div id="contact-popup">
    <span class="triangle"></span>
    <div id="contact-popup-title">להרשמה טלפונית</div>
    <input type="text" value="" name="contact-phone" placeholder="מספר טלפון">
    <div id="contact-success">תודה על פנייתך. נציגינו יחזרו אליך בהקדם</div>
    <div id="contact-popup-error">*נא להזין מספר טלפון תקין</div>
    <div id="contact-popup-sign-btn" class="next-page"></div>
</div>

<style type="text/css">
    @media only screen and (max-width: 40.063em) {
        #recaptcha_area, #recaptcha_table {
            width: 290px !important;
        }
        .recaptchatable #recaptcha_image {
            width: 250px !important;
        }
    }
</style><?php
    
        echo stripslashes( $args['after_widget'] );
    
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
        $instance['contacttitle']		= strip_tags( $new_instance['contacttitle'] );
        $instance['contactsubtitle']	= strip_tags( $new_instance['contactsubtitle'] );
        $instance['contactsendtext']	= strip_tags( $new_instance['contactsendtext'] );
        $instance['contactemail']		= strip_tags( $new_instance['contactemail'] );
        $instance['recaptchapublickey']	= strip_tags( $new_instance['recaptchapublickey'] );
        $instance['recaptchaprivatekey']= strip_tags( $new_instance['recaptchaprivatekey'] );
    
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
    
        $contacttitle			= isset( $instance['contacttitle'] ) ? $instance['contacttitle'] : '';
        $contactsubtitle		= isset( $instance['contactsubtitle'] ) ? $instance['contactsubtitle'] : '';
        $contactsendtext		= isset( $instance['contactsendtext'] ) ? $instance['contactsendtext'] : '';
        $contactemail			= isset( $instance['contactemail'] ) ? $instance['contactemail'] : '';
        $recaptchapublickey		= isset( $instance['recaptchapublickey'] ) ? $instance['recaptchapublickey'] : '';
        $recaptchaprivatekey	= isset( $instance['recaptchaprivatekey'] ) ? $instance['recaptchaprivatekey'] : '';
?>

<em><?php _e('Title:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'contacttitle' ); ?>" value="<?php echo stripslashes($contacttitle); ?>" />
<br /><br />
<em><?php _e('Subtitle:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'contactsubtitle' ); ?>" value="<?php echo stripslashes($contactsubtitle); ?>" />
<br /><br />
<em><?php _e('"Send message" Text:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'contactsendtext' ); ?>" value="<?php echo stripslashes($contactsendtext); ?>" />
<br /><br />
<em><?php _e('Email Address To Send Forms To:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'contactemail' ); ?>" value="<?php echo stripslashes($contactemail); ?>" />
<br /><br />
<em><?php _e('Recaptcha Public Key:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'recaptchapublickey' ); ?>" value="<?php echo stripslashes($recaptchapublickey); ?>" />
<br /><br />
<em><?php _e('Recaptcha Private Key:', 'dxef'); ?></em><br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'recaptchaprivatekey' ); ?>" value="<?php echo stripslashes($recaptchaprivatekey); ?>" />
<br /><br />
<input type="hidden" name="submitted" value="1" /><?php
    
            }
        }
        // Ajax code for send contect email
        // add_action('wp_ajax_nopriv_send_contact_email', 'ef_ajax_send_contact_email');
        //add_action('wp_ajax_send_contact_email', 'ef_ajax_send_contact_email');
    
        add_action('wp_ajax_nopriv_send_contact_email', 'sendBamby');
        add_action('wp_ajax_send_contact_email', 'sendBamby');
        /**
         * Ajax Code Contect Email
         * 
         * Handle to send contact
         * email functionality
         * 
         * @package Event Framework
         * @since 1.0.0
         */
        function ef_ajax_send_contact_email() {
    
            $ret = array( 'sent' => false, 'error' => false, 'message' => '' );
    
            $recaptchapublickey		= isset( $_POST['recaptcha_publickey'] ) ? $_POST['recaptcha_publickey'] : '';
            $recaptchaprivatekey	= isset( $_POST['recaptcha_privatekey'] ) ? $_POST['recaptcha_privatekey'] : '';
            $contactemail			= isset( $_POST['contact_email'] ) ? $_POST['contact_email'] : '';
    
            if( !empty( $recaptchapublickey ) && !empty( $recaptchaprivatekey ) ) {
    
                $resp = recaptcha_check_answer( $recaptchaprivatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"] );
    
                // check reCaptcha
                if( !$resp || !$resp->is_valid ) {
    
                    $ret['message'] = __('The reCAPTCHA wasn\'t entered correctly. Go back and try it again.!', 'dxef');
                    $ret['error'] = true;
                }
            }
    
            // require a name from user
            if( trim( $_POST['contactName'] ) === '' ) {
    
                $ret['message']	= __( 'Forgot your name!', 'dxef' );
                $ret['error']	= true;
            } else {
    
                $name	= trim( $_POST['contactName'] );
            }
    
            // need valid email
            if( trim($_POST['email']) === '' ) {
    
                $ret['message'] = __('Forgot to enter in your e-mail address.', 'dxef');
                $ret['error'] = true;
            } else if ( !preg_match( "/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim( $_POST['email'] ) ) ) {
    
                $ret['message'] = __('You entered an invalid email address.', 'dxef');
                $ret['error'] = true;
            } else {
    
                $email = trim($_POST['email']);
            }
    
             // require a name from user
            if( trim( $_POST['phone'] ) === '' ) {
    
                $ret['message']	= "שכחת להזין מספר טלפון";
                $ret['error']	= true;
            } else {
    
                $phone = trim( $_POST['phone'] );
            }
    
    
    
            // we need at least some content
            if( trim( $_POST['comments'] ) === '' ) {
    
                $ret['message'] = __('You forgot to enter a message!', 'dxef');
                $ret['error'] = true;
            } else {
    
                if( function_exists( 'stripslashes' ) ) {
    
                    $comments = stripslashes( trim($_POST['comments']) );
                } else {
    
                    $comments = trim( $_POST['comments'] );
                }
            }
            // upon no failure errors let's email now!
            if ( !$ret['error'] ) {
    
                $subject	= __('Submitted message from ', 'dxef') . $name;
                $body		= __('Name:', 'dxef') . " $name \n\n" . __('Email:', 'dxef') . " $email \n\n " . __('Phone:', 'dxef') . " $phone \n\n" . __('Comments:', 'dxef') . " $comments";
                $headers	= 'From: ' . $contactemail . "\r\n" . 'Reply-To: ' . $email . "\r\n";
    
                try {
    
                    wp_mail($contactemail, $subject, $body, $headers);
                    $ret['sent']	= true;
                    $ret['message']	= __('Your email was sent.', 'dxef');
    
                } catch (Exception $e) {
    
                    $ret['message']	= __( 'Error submitting the form', 'dxef' );
    
                }
            }
    
            echo json_encode( $ret );
            die;
        }
    
        function sendBamby(){       
            $ret = array( 'sent' => false, 'error' => false, 'message' => '' );
    
            $recaptchapublickey		= isset( $_POST['recaptcha_publickey'] ) ? $_POST['recaptcha_publickey'] : '';
            $recaptchaprivatekey	= isset( $_POST['recaptcha_privatekey'] ) ? $_POST['recaptcha_privatekey'] : '';
            $contactemail			= isset( $_POST['contact_email'] ) ? $_POST['contact_email'] : '';
    
            if( !empty( $recaptchapublickey ) && !empty( $recaptchaprivatekey ) ) {
    
                $resp = recaptcha_check_answer( $recaptchaprivatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"] );
    
                // check reCaptcha
                if( !$resp || !$resp->is_valid ) {
    
                    $ret['message'] = __('The reCAPTCHA wasn\'t entered correctly. Go back and try it again.!', 'dxef');
                    $ret['error'] = true;
                }
            }
    
            // require a first name from user
            if( trim( $_POST['contactFirstName'] ) === '' ) {
    
                $ret['message']	= __( 'Forgot your name!', 'dxef' );
                $ret['error']	= true;
            } else {
    
                $Fname 	= trim( $_POST['contactFirstName'] );
            }
    
            // require a last name from user
            if( trim( $_POST['contactLastName'] ) === '' ) {
    
                $ret['message']	= __( 'Forgot your name!', 'dxef' );
                $ret['error']	= true;
            } else {
    
                $Lname 	= trim( $_POST['contactLastName'] );
            }
    
             // require a name from user
            if( trim( $_POST['phone'] ) === '' ) {
    
                $ret['message']	= "שכחת להזין מספר טלפון";
                $ret['error']	= true;
            } else {
    
                $phone = trim( $_POST['phone'] );
            }
    
            // need valid email
            if( trim($_POST['email']) === '' ) {
    
                $ret['message'] = __('Forgot to enter in your e-mail address.', 'dxef');
                $ret['error'] = true;
            } else if ( !preg_match( "/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim( $_POST['email'] ) ) ) {
    
                $ret['message'] = __('You entered an invalid email address.', 'dxef');
                $ret['error'] = true;
            } else {
    
                $email = trim($_POST['email']);
            }
    
    
            //referal
            session_start();
    
            if ( !isset( $_SESSION["origURL"] ) )
                $_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
    
            // upon no failure errors let's email now!
            if ( !$ret['error'] ) {
    
                switch (trim($_POST['mediaId'])):
                    case "36433":
                        $mediaTitle= "Facebook";
                        break;
                     case "33703":
                        $mediaTitle= "Google";
                        break;
                    case "47906":
                        $mediaTitle= "Gmail";
                        break;
                    case "47905":
                        $mediaTitle= "Linkedin";
                        break;
                    case "32276":
                        $mediaTitle= "Calcalist";
                        break;
                    default:
                       $mediaTitle= "";
                endswitch;
                //$mediaId=trim($_POST['mediaId']);
              $sendObj = array( 'Fname' => $Fname, 'Lname' => $Lname, 'Phone' => $phone,'Email'=>$email,'AllowedMail'=>'0',IP=>$_SERVER['REMOTE_ADDR'],'ProjectID'=>'4909','Password'=>'pwd@4909','MediaTitle'=>$mediaTitle);
              //$ccc=print_r($sendObj,true);
              //mail(  "treut@cambium.co.il", "sendObj",$ccc) ; 
             // echo json_encode($sendObj);
                try {
    
                    $ch = curl_init();
    
                    curl_setopt($ch, CURLOPT_URL,"http://www.bmby.com/shared/AddClient/index.php");
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($sendObj));
    
                    // receive server response ...
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
                    $server_output = curl_exec ($ch);
    
                    curl_close ($ch);
    
                    // further processing ....
                    if (strpos($server_output,"Response=1")>-1) { 
                          $ret['sent']	= true;
                          $ret['message']	="send";
                          $ret['redirect']=home_url()."?page_id=1199";
    
                         //mail(  "treut@cambium.co.il", "contact work",$test) ;  
                         //  wp_redirect( home_url()."?page_id=1199" );
                           //header("Location:". home_url( '/' )."?page_id=1199");
                           //exit();
                     } else {  
                        //  echo $server_output;
                        $ret['sent']	= false;
                        mail(  "treut@cambium.co.il", "contact not work","0") ;  
                          $ret['message']	= __( 'Error submitting the form', 'dxef' );
                     }
    
    
                } catch (Exception $e) {    
                     $ret['sent']	= false;
                    $ret['message']	= "שליחת ההודעה נכשלה, אנא נסו שנית";
    
                }
            }
    
            echo json_encode( $ret );
            die;
        }
    
        function phoneContact(){
    
            $ret = array( 'sent' => false, 'error' => false, 'message' => '' );
    
             // require a name from user
            if( trim( $_POST['contact-phone'] ) === '' ) {
    
                $ret['message']	= "שכחת להזין מספר טלפון";
                $ret['error']	= true;
            } 
            else {
    
                $phone = trim( $_POST['phone'] );
            }
    
              if ( !$ret['error'] ) {
    
              $sendObj = array( 'Destination' => $phone,IP=>$_SERVER['REMOTE_ADDR'],'CompanyID '=>'143','ProjectID'=>'4909','Password'=>'pwd@4909' ,'Token'=>'7276dd1bdb78020059d8e2f9aeda4523');
            try {
    
                    $ch = curl_init();
    
                    curl_setopt($ch, CURLOPT_URL,"http://noname.bmby.com/Asterisk/Calling.php");
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($sendObj));
    
                    // receive server response ...
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
                    $server_output = curl_exec ($ch);
    
                    curl_close ($ch);
    
                    // further processing ....
                    if (strpos($server_output,"Response=1")>-1) { 
                          $ret['sent']	= true;
                          $ret['message']	="send";
                          //$ret['redirect']=home_url()."?page_id=1199";
                         // mail(  "treut@cambium.co.il", "contact work","1") ;  
                         //  wp_redirect( home_url()."?page_id=1199" );
                           //header("Location:". home_url( '/' )."?page_id=1199");
                           //exit();
                     } else {  
                        //  echo $server_output;
                        mail(  "treut@cambium.co.il", "contact not work","0") ;  
                          $ret['message']	="שליחת ההודעה נכשלה, אנא נסו שנית";
                     }
    
    
                } catch (Exception $e) {    
                     mail(  "treut@cambium.co.il", "contact not work","0") ;  
                    $ret['message']	= "שליחת ההודעה נכשלה, אנא נסו שנית";
    
                }
    
                echo json_encode( $ret );
            die;
        }
        }
        // Register widget
        register_widget( 'Ef_Contact_Widget' );
