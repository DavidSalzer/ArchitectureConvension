<?php
    require_once("../../../wp-load.php");
    
    //print_r($_POST);
    
    session_start();
    
    //update bmby that pelecard not success
    $contractID = $_SESSION['contractID'] ;
        
		mail(  "ldaniel@cambium.co.il", "update payment work ",$contractID."<br>".print_r($_REQUEST,true) ) ;  
		
        if($contractID!=NULL){
            $_SESSION['contractID']=NULL;//reset
            $contract_post_id = $_SESSION['contract_post_id'];
            echo $contract_post_id;
            if($contract_post_id!=NULL){
                $_SESSION['contract_post_id']=NULL;//reset
               
                //echo $contract_post_id;
                $post = get_post($contract_post_id);
    
                setup_postdata($post);
                //$email = get_the_title($post->ID);                  
                //echo $email;
                
                //check if the contract id is the same
                if($contractID == get_post_meta($post->ID,'wpcf-contractid',true)){
                    update_post_meta($post->ID, 'wpcf-pay','false');
                }  
    
                $priceincvat = get_post_meta($post->ID, 'wpcf-priceincvat',true);
                $price = get_post_meta($post->ID, 'wpcf-price',true);
                $Reference = "np_".$contractID;
                //update bmby
                $arrPayment=array(  
                            "Reference"=>$Reference,
                            "PriceIncVat"=>$priceincvat,
                            "Price"=>$price                    
                );
    
                $client = new SoapClient('http://www.bmby.com/ReservationsWebService/index.wsdl', 
                                                array("trace" => 1, "exception" => 0, 'soap_version' => SOAP_1_1)
                                                );   
    
    
                                              
                try {
                    $token = $client->fnAuthenticate('5568','test1234');                  
                    $result = $client->fnUpdatePayment($token,$contractID,$arrPayment,0); 
                    
                    if($result=="success"){
                        mail(  "ldaniel@cambium.co.il", "update bmby after cancel payment work ",$contractID ) ;  
                        
                      
                    }
    
                }
                catch(Exception $e) {
                    mail( $email, "update bmby after cancel payment not work ","") ;  
                   
                }
            }
        }

    //updateBmbyNotPay( $_SESSION['Fname'],$_SESSION['Lname'],$_SESSION['Phone_Mobile'],$_SESSION['Email']);

    mail( "ldaniel@cambium.co.il", "התשלום נכשל ", $_REQUEST['result']) ;    
    header("Location:". home_url( '/' )."?page_id=665");
    
    die();
?>
