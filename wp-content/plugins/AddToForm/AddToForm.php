<?php
/**
 * @package addToForm
 */
/*
Plugin Name: addToForm
Plugin URI: http://addToForm.com/
Description: send Details To Bmby Form
Version: 1
Author: Automattic
Author URI: http://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: woocommerce
*/
function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return "HTTP_CLIENT_IP: ".$_SERVER['HTTP_CLIENT_IP'];
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return 'HTTP_X_FORWARDED_FOR: '.$_SERVER['HTTP_X_FORWARDED_FOR'];
    return $_SERVER['REMOTE_ADDR'];
}

function getMedia() {
    $string = $_SERVER['REQUEST_URI'];
    $newString = (substr($string, strpos($string, "?MediaTitle=")+12))?substr($string, strpos($string, "?MediaTitle=")+12):'';
    $mediaTitle = (substr($newString, 0, strpos($newString, "&")))?substr($newString, 0, strpos($newString, "&")):'';
    return $mediaTitle;
}

add_action('wpcf7_before_send_mail', 'sendDetailsToBmbyForm',10,1);

function sendDetailsToBmbyForm($form){
    
    
    $allowMail = isset($_POST['allowMail'])? 0 : 2; 
    
	$sendObj = array (
		'Fname'=> $_POST['fullName'],
		'Company'=> $_POST['company'],
		'Job'=> $_POST['position'],
		'Phone'=> $_POST['tel'],
		'Email'=> $_POST['email'],
        'Area'=> $_POST['area'],
        'AllowedMail' => $allowMail,
        'IP'=> getRealIP(),
		'MediaTitle' => getMedia(),
		'ProjectID' => '4093',
		'Password' => 'kfa0509',
	 );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"http://www.bmby.com/shared/AddClient/index.php");
	curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($sendObj));
    
    // receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$server_output = curl_exec ($ch);
	curl_close ($ch);
}

