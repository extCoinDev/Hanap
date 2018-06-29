<?php
include('connection.php');
$order_id = $_GET['order_id'];
$amount_in_btc = $_GET['amount_in_btc'];
$amount_paid_in_btc = $_GET['amount_paid_in_btc'];
$status = $_GET['status'];
$address = $_GET['address'];
$transaction_ids  = $_GET['transaction_ids'];
$callback_data = $_GET['callback_data'];
$keychain_id = $_GET['keychain_id'];
$pieces = explode('--', $callback_data);
$dtadd= date("Y-m-d H:i:s");
$dttime= date("H:i:s");
if ($pieces[2]=='123890'){
  
    if($status==2){

    //check if this tansaction has already been processed

        
    $CRYPTDATA = floatval($pieces[1]) ."', '" . $pieces[0] ."', '" . $dtadd;
        //add record to the database that this trancation is already done
        $dbquery = mysql_query("INSERT INTO etx_transaction (wallet_add_from,data_amount,wallet_add_to,data_date,data_curhash) VALUES ('" . 'BTC' . "', '" . floatval($pieces[1]) ."', '" . $pieces[0] ."', '" . $dtadd ."', '" . sha1($CRYPTDATA) . "')");
        if ($dbquery){}

        $dbquery = mysql_query("UPDATE wallet_tags SET etx_temp = etx_temp + '" . floatval($pieces[1]) . "' WHERE wallet_add ='". $pieces[0] . "'");
        if ($dbquery){}

        //$data = 'credits=' . $amount_paid_in_btc . '&recipient=' . $pieces[0];
        //$url = 'http://btcquest.ga/bitcoin-community/members-account/Pv-5KlRx0aS-Q-/Accounts-Secure-Login/2016-Auth-192621/activator.php';


        //$ch = curl_init($url);
        //curl_setopt($ch, CURLOPT_POST, 1);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        //curl_setopt($ch, CURLOPT_HEADER, 0);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


        //$result = curl_exec($ch);
        //if (curl_errno($ch)) {
        //    echo 'Error:' . curl_error($ch);
        //}
        //curl_close ($ch);
        //echo 'OK';
        //echo ' ';
        //echo $result;

  


}

else if($status==4){

    
    //check if this tansaction has already been processed

        
    $CRYPTDATA = floatval($pieces[1]) ."', '" . $pieces[0] ."', '" . $dtadd;
        //add record to the database that this trancation is already done
        $dbquery = mysql_query("INSERT INTO etx_transaction (wallet_add_from,data_amount,wallet_add_to,data_date,data_curhash) VALUES ('" . 'BTC' . "', '" . floatval($pieces[1]) ."', '" . $pieces[0] ."', '" . $dtadd ."', '" . sha1($CRYPTDATA) . "')");
        if ($dbquery){}

        $dbquery = mysql_query("UPDATE wallet_tags SET etx_temp = etx_temp + '" . floatval($pieces[1]) . "' WHERE wallet_add ='". $pieces[0] . "'");
        if ($dbquery){}


}


else if($status==3){

 
    //check if this tansaction has already been processed

        
    $CRYPTDATA = floatval($pieces[1]) ."', '" . $pieces[0] ."', '" . $dtadd;
        //add record to the database that this trancation is already done
        $dbquery = mysql_query("INSERT INTO etx_transaction (wallet_add_from,data_amount,wallet_add_to,data_date,data_curhash) VALUES ('" . 'BTC' . "', '" . floatval($pieces[1]) ."', '" . $pieces[0] ."', '" . $dtadd ."', '" . sha1($CRYPTDATA) . "')");
        if ($dbquery){}

        $dbquery = mysql_query("UPDATE wallet_tags SET etx_temp = etx_temp + '" . floatval($pieces[1]) . "' WHERE wallet_add ='". $pieces[0] . "'");
        if ($dbquery){}
       

    


}

else{echo 'OK'; echo ' Not Confirmed or Under Paid';}

}



?>

