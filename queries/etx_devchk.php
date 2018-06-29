<?php
header('Access-Control-Allow-Origin: *');  
session_start();
error_reporting(0);
//create Sql connection - SMARTSHOP-MAIN
include('connection.php');
$armid =  $_POST['armid'];
$walletAdd =  $_POST['extwal'];
$etx_stat = '';
$etx_price = '0.08';

$dev_alias= '';
$dev_armid= '';
$dev_secode= '';
$dev_CONFIG_STATE= '';
$dev_SBC_STAKCAP= '';

$mysql_qury = mysql_query("SELECT * FROM SBC_ARMDEV WHERE CONFIG_WALLET ='" . $walletAdd . "'");
$mysql_fetch = mysql_fetch_array($mysql_qury);

if (mysql_num_rows($mysql_qury)!==0){
#echo data
$etx_stat = 'OK';
$dev_alias = $mysql_fetch['DEV_ALIAS'];
$dev_armid = $mysql_fetch['ARM_ID'];
$dev_CONFIG_STATE = $mysql_fetch['CONFIG_STATE']; 
$dev_SBC_STAKCAP = $mysql_fetch['SBC_STAKCAP']; 

$dev_secode = substr($mysql_fetch['SEC_CODE'],8,2);
}

else {
    # code...
     $etx_stat = 'ERR';

}

$responedata = new StdClass;
$responedata->stat = $etx_stat;
$responedata->CONFIG_STATE = $dev_CONFIG_STATE;
$responedata->SBC_STAKCAP = $dev_SBC_STAKCAP;
$responedata->dev_alias = $dev_alias;
$responedata->dev_armid = $dev_armid;
$responedata->dev_secode = $dev_secode;


$JSONdata = json_encode($responedata);

echo $JSONdata;





 ?>