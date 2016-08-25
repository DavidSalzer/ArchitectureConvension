<?php
        require_once("../../../wp-load.php");
        
        print_r($_POST);

        session_start();   
        //$_SESSION['contractID']="161357";
        //$_SESSION['contract_post_id']="614";
        $contractID = $_SESSION['contractID'] ;
        echo $contractID;
        if($contractID!=NULL){
            $_SESSION['contractID']=NULL;//reset
            $contract_post_id = $_SESSION['contract_post_id'];
            echo $contract_post_id;
            if($contract_post_id!=NULL){
                $_SESSION['contract_post_id']=NULL;//reset
               
                //echo $contract_post_id;
                $post = get_post($contract_post_id);
    
                setup_postdata($post);
                $email = get_the_title($post->ID);                  
                echo $email;
                
                //check if the contract id is the same
                if($contractID == get_post_meta($post->ID,'wpcf-contractid',true)){
                    update_post_meta($post->ID, 'wpcf-pay','true');
                }  
    
                $priceincvat = get_post_meta($post->ID, 'wpcf-priceincvat',true);
                $price = get_post_meta($post->ID, 'wpcf-price',true);
                $Reference = "nr_".$contractID;

                $_SESSION['price'] = $priceincvat;

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
                      echo $token;    
                      echo $contractID;
                    print_r($arrPayment); 
                    $result = $client->fnUpdatePayment($token,$contractID,$arrPayment,1); 
                    echo $result;
                    if($result=="success"){
                        echo $result;
                        //mail(  $email, "התשלום עבד ","") ;  
                        mail(  "ldaniel@cambium.co.il", "pay success and update bmby ",$contractID ) ;  
                        header("Location:". home_url( '/' )."?page_id=663");
                        die();
                    }
    
                }
                catch(Exception $e) {
                    echo 'Message: clientid' .$e;
                    //mail( $email, "התשלום  לא עבד ","") ;  
                    mail(  "ldaniel@cambium.co.il", " pay success and not! update bmby ",$e) ;  
                   header("Location:". home_url( '/' )."?page_id=665");
                        die();
                    echo 'client';
                    return;       
                }
            }
        }
    
        mail( "ldaniel@cambium.co.il", "pay not success ","") ;    
    
?>
