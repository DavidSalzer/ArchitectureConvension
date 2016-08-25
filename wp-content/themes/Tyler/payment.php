<?php
    /*
          Template Name: Notify-Url Page
      */
    
    
?>

<?php
   
     
   // function validPay(){
        
            //call from paypal_ipn.php
            //global $conf;
            //global $order;
    
            $req = 'cmd=_notify-validate'; // Add 'cmd=_express-checkout-mobile' to beginning of the acknowledgement
            foreach ($_POST as $key => $value) { // Loop through the notification NV pairs
                $value = urlencode(stripslashes($value)); // Encode these values
                $req .= "&$key=$value"; // Add the NV pairs to the acknowledgement
            }
    
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,"https://www.sandbox.paypal.com/cgi-bin/webscr");
            curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
    
            if( !($res = curl_exec($ch)) ) {
                curl_close($ch);
                exit;
            }
            curl_close($ch);
    
            $orderID = $_POST['item_number'];
            $payment_status = $_POST['payment_status'];
            $payment_currency = $_POST['mc_currency'];
            $payment_amount = $_POST['mc_gross'];
            $payer_email = $_POST['payer_email'];
            $txn_id = $_POST['txn_id'];
            $receiver_email = $_POST['receiver_email'];		
    
            

            $log =date("Y-m-d H:i:s");
            $log .=" res=".$res;
            $log .=" payment_status=".$payment_status;
            $log .=" orderID=".$orderID;
            $log .=" amount=".$payment_amount;
            $log .=" txn_id=".$txn_id;
            $log .=" data=".$req;		
    
            //file_put_contents($conf->paypal->log, $log."\n", FILE_APPEND | LOCK_EX);
    
            if ($res=="VERIFIED") {
                //call order func.
                $secsess=true;
                if ($payment_currency!="ILS"){
                    $secsess=false;
                    $payment_status +=" currency_error";
                }
                if ($receiver_email!=$conf->paypal->user){
                    $secsess=false;
                    $payment_status +=" payer_email_error";
                }
    
                mail( "treut@cambium.co.il", "הפונקציה נקראה ",$txn_id) ;
                paypalresponse($orderID,$payment_status,$payment_amount,$txn_id);		
            }
        
    
    function paypalresponse($orderid,$payment_status,$payment_amount,$txn_id){
        global $db;
        global $conf;
        $orderdata=$this->getorder($orderid);
        if (($orderdata["paymentMethod"]!="pp" && $orderdata["paymentMethod"]!="PP") || $orderdata["status"]!="0")
        {
            return;	
        }
        if ($payment_amount!=$orderdata["totalCost"]){
            $payment_status .=" amount_error";
        }
        $status=0;
        $xml=$orderdata["xml"];
        if ($payment_status=="Completed"){
            $ans = new stdClass();
            $reqxml=$xml = preg_replace('/<paypal_transaction_id>(.*?)<\/paypal_transaction_id>/s', '<paypal_transaction_id>'.$txn_id.'</paypal_transaction_id>', $xml);
            $resxml=$ans->caspit=sendSOAPreq($conf->soapURL->performorder,$xml);
            $ans->caspitJson=getSoapData($ans->caspit)->performorderResponse;
            $preforamorder_code=(string)$ans->caspitJson->performorderResult->response_msg->msg_id;
            $preforamorder_text=(string)$ans->caspitJson->performorderResult->response_msg->msg_text;
            if ($preforamorder_code==null){
                $preforamorder_code=-1;
                $preforamorder_text="caspit error";
            }
            $xml=$ans->caspit;
            $status=1;
            if ($preforamorder_code!=null && in_array($preforamorder_code,$conf->order->performorder->secsess_code)){
                $status=2;
            }
            if (in_array($preforamorder_code,$conf->order->performorder->report_code)){
                $this->errorReport($orderid,"Performorder - paypal",$preforamorder_text,$preforamorder_code,"req:\n\r".$reqxml."\n\r res:\n\r".$resxml);
            }
        }
        $db->smartQuery(array(
            'sql' => "UPDATE `order` set `status`=:status, `paypal_status`=:paypal_status,`paypal_txn_id`=:paypal_txn_id, `xml`=:xml, `preforamorder_code`=:preforamorder_code,`preforamorder_text`=:preforamorder_text, `reqxml`=:reqxml,`resxml`=:resxml WHERE `order-id`=:orderID ;",
            'par' => array('status' =>$status,'orderID' => $orderid,'paypal_status'=>$payment_status,'paypal_txn_id'=>$txn_id,'xml'=>$xml,'preforamorder_code'=>$preforamorder_code,'preforamorder_text'=>$preforamorder_text,"reqxml"=>$reqxml,"resxml"=>$resxml)
        ));
    }

    //validPay();
?>