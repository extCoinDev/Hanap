<?php
header('Access-Control-Allow-Origin: *');  
session_start();
error_reporting(0);
//create Sql connection - SMARTSHOP-MAIN
include('connection.php');
$etxsd =  $_POST['extsd'];
$walletAdd =   '';
$etx_temp = '';
$etx_price = '0.08';

$mysql_qury = mysql_query("SELECT * FROM wallet_tags WHERE etxsd ='" . $etxsd . "'");
$mysql_fetch = mysql_fetch_array($mysql_qury);

if (mysql_num_rows($mysql_qury)!==0){
#echo data

    $etx_temp = $mysql_fetch['etx_temp'];
    $walletAdd =  $mysql_fetch['wallet_add'];
}

else {
    # code...
    echo "NONE";

}

$responedata = new StdClass;
$responedata->etxbal = $etx_temp;
$responedata->etxsd = $etxsd;
$responedata->etxprice = $etx_price;
$responedata->walletAdd = $walletAdd;

$JSONdata = json_encode($responedata);

echo $JSONdata;





 ?>