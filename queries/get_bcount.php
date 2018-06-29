<?php
header('Access-Control-Allow-Origin: *');  
session_start();
error_reporting(0);
//create Sql connection - SMARTSHOP-MAIN
include('connection.php');

$walletAdd =   '';
$data_count = '';

$mysql_qury = mysql_query("SELECT * FROM wallet_tags");
$mysql_fetch = mysql_fetch_array($mysql_qury);

if (mysql_num_rows($mysql_qury)!==0){
#echo data

    $data_count = mysql_num_rows($mysql_qury);
 
}

else {
    # code...
    echo "NONE";

}

$responedata = new StdClass;
$responedata->data_count = $data_count;

$JSONdata = json_encode($responedata);

echo $JSONdata;





 ?>