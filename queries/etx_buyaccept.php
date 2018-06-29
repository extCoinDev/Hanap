<?php
header('Access-Control-Allow-Origin: *');  
session_start();
//error_reporting(0);

include('connection.php');
$tx =  $_GET['tx'];
$etx_stat = '';
$dtadd=date("Y-m-d H:i:s");

$mysql_qury = mysql_query("SELECT * FROM etx_buyExt WHERE transID ='" . $tx . "' and data_status='WAITING_CONFIRMATION'");
$mysql_fetch = mysql_fetch_array($mysql_qury);

$data_ext_amt = $mysql_fetch['data_ext_amt'];

$txfee = (floatval($data_ext_amt) / 100) * 10;
$data_ext_amt = floatval($data_ext_amt);

$ext_wallet = $mysql_fetch['ext_wallet'];
$transaction_tx = $mysql_fetch['transaction_tx'];
$CRYPTDATA = floatval($data_ext_amt) ."', '" . $ext_wallet ."', '" . $dtadd;

if (mysql_num_rows($mysql_qury)!==0){
#echo data
    $etx_stat = 'OK';
    $mysql_qury = mysql_query("UPDATE wallet_tags SET etx_temp=etx_temp + '" . $data_ext_amt . "' WHERE wallet_add='" . $mysql_fetch['ext_wallet']  . "'");	  
    if($mysql_qury){}

    $mysql_qury = mysql_query("UPDATE etx_buyExt SET data_status = 'SENT' WHERE transID = '" . $tx . "'");	    
    if($mysql_qury){}

    //GET PREV TRANSACTION
$qry = "SELECT * FROM etx_transaction";
$mysql_qury = mysql_query($qry);
$vulkan_blockheight = mysql_num_rows($mysql_qury) - 1;

$qry = "SELECT * FROM etx_transaction WHERE id ='" . $vulkan_blockheight . "'";
$mysql_qury = mysql_query($qry) or die(mysql_error());
$row = mysql_fetch_array($mysql_qury);
$data_prevhash = $row['data_prevhash'];

  $mysql_qury = mysql_query("UPDATE etx_transaction SET data_status = 'CONFIRMED' WHERE data_curhash = '" . $transaction_tx . "'");
 if($mysql_qury){}

}

else {
    # code...
     $etx_stat = 'ERROR - TRANSACTION NOT FOUND OR ALREADY CONFIRMED.';
}

$responedata = new StdClass;
$responedata->stat = $etx_stat;
$responedata->tx = $tx;

$JSONdata = json_encode($responedata);

echo $JSONdata . '<br /> <br />' . $etx_stat;

 ?>