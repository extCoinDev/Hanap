<?php
header('Access-Control-Allow-Origin: *');  
session_start();
error_reporting(0);
//create Sql connection - SMARTSHOP-MAIN
include('connection.php');
$armid =  $_POST['armid'];
$armserial =  $_POST['armserial'];
$walletAdd =  $_POST['extwal'];
$etx_stat = '';
$etx_price = '0.08';

$mysql_qury = mysql_query("SELECT * FROM SBC_ARMDEV WHERE ARM_ID ='" . $armid . "' AND SEC_CODE = '" . $armserial . "'");
$mysql_fetch = mysql_fetch_array($mysql_qury);

if (mysql_num_rows($mysql_qury)!==0){
#echo data
    $etx_stat = 'OK';
    $mysql_qury = mysql_query("UPDATE SBC_ARMDEV SET CONFIG_STATE='STAKING', CONFIG_WALLET='" . $walletAdd . "' WHERE ARM_ID='" . $armid . "'");	    
        if($mysql_qury){}
}

else {
    # code...
     $etx_stat = 'ERR';

}

$responedata = new StdClass;
$responedata->stat = $etx_stat;

$JSONdata = json_encode($responedata);

echo $JSONdata;

 ?>