<?php
header('Access-Control-Allow-Origin: *');  
session_start();
//error_reporting(0);

include('connection.php');
$tx =  $_POST['tx'];
$etx_stat = '';
$dtadd=date("Y-m-d H:i:s");

$mysql_qury = mysql_query("SELECT * FROM etx_buyExt WHERE transID ='" . $tx . "'");
$mysql_fetch = mysql_fetch_array($mysql_qury);

$data_ext_amt = $mysql_fetch['data_ext_amt'];
$ext_wallet = $mysql_fetch['ext_wallet'];
$CRYPTDATA = floatval($data_ext_amt) ."', '" . $ext_wallet ."', '" . $dtadd;

if (mysql_num_rows($mysql_qury)!==0){
#echo data
  
    $mysql_qury = mysql_query("UPDATE etx_buyExt SET data_status = 'WAITING_CONFIRMATION', transaction_tx='0x" . sha1($CRYPTDATA) . "' WHERE transID = '" . $tx . "'");	    
    if($mysql_qury){  $etx_stat = 'OK';}

//GET PREV TRANSACTION
$qry = "SELECT * FROM etx_transaction";
$mysql_qury = mysql_query($qry);
$vulkan_blockheight = mysql_num_rows($mysql_qury) - 1;

$qry = "SELECT * FROM etx_transaction WHERE id ='" . $vulkan_blockheight . "'";
$mysql_qury = mysql_query($qry) or die(mysql_error());
$row = mysql_fetch_array($mysql_qury);
$data_prevhash = $row['data_prevhash'];

$mysql_qury = mysql_query("INSERT INTO etx_transaction(wallet_add_from, data_amount, wallet_add_to, data_date, data_prevhash, data_curhash,data_status) VALUES ('BUY EXT','$data_ext_amt','$ext_wallet','$dtadd','$data_prevhash','0x" . sha1($CRYPTDATA) . "', 'WAITING CONFIRMATIONS')");	
 if($mysql_qury){}


}

else {
    # code...
     $etx_stat = 'ERR';
}

$responedata = new StdClass;
$responedata->stat = $etx_stat;
$responedata->tx = $tx;

$JSONdata = json_encode($responedata);

echo $JSONdata;

 ?>