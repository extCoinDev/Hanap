<?php
header('Access-Control-Allow-Origin: *');  
session_start();
error_reporting(0);
//create Sql connection - SMARTSHOP-MAIN
include('connection.php');
$armid =  $_POST['armid'];
$walletAdd =   '';
$etx_stat = '';
$etx_price = '0.08';

$mysql_qury = mysql_query("SELECT * FROM SBC_ARMDEV WHERE ARM_ID ='" . $armid . "'");
$mysql_fetch = mysql_fetch_array($mysql_qury);

if (mysql_num_rows($mysql_qury)!==0){
#echo data
    $etx_stat = 'OK';
 
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