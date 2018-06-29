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

$mysql_qury = mysql_query("SELECT SUM(data_amount) FROM etx_transaction");
$mysql_fetch = mysql_fetch_array($mysql_qury);

if (mysql_num_rows($mysql_qury)!==0){
#echo data

    $etx_sum = $mysql_fetch['SUM(data_amount)'];
    
}

else {
    # code...
    echo "NONE";

}

$responedata = new StdClass;
$responedata->etxsum = $etx_sum;

$JSONdata = json_encode($responedata);

echo $JSONdata;





 ?>