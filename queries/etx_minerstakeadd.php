<?php
header('Access-Control-Allow-Origin: *');  
session_start();
error_reporting(0);
//create Sql connection - SMARTSHOP-MAIN
include('connection.php');
$etxwal =  $_POST['etxwal'];
$amt = floatval($_POST['amt']);
$scr = $_POST['scr'];
$stkcap = '1500';
//$walletAdd =  $_POST['extwal'];
//$etx_stat = '';
//$etx_price = '0.08';

$mysql_qury = mysql_query("SELECT * FROM wallet_tags WHERE wallet_add ='" . $etxwal . "'");
$mysql_fetch = mysql_fetch_array($mysql_qury);

$mysql_qury1 = mysql_query("SELECT * FROM SBC_ARMDEV WHERE CONFIG_WALLET ='" . $etxwal . "'");
$mysql_fetch1 = mysql_fetch_array($mysql_qury1);

if ($scr == '0PXOI35S')
{
	
if (mysql_num_rows($mysql_qury)!==0){
#echo data

if (floatval($mysql_fetch['etx_temp']) >= $amt)
{

if ((floatval($mysql_fetch1['SBC_STAKCAP']) + floatval($amt)) <= $stkcap)
{
	$etx_stat = 'OK';
    $mysql_qury = mysql_query("UPDATE SBC_ARMDEV SET SBC_STAKCAP=SBC_STAKCAP + '" . $amt . "' WHERE CONFIG_WALLET='" . $etxwal . "'");	    
    if($mysql_qury){}

    $mysql_qury = mysql_query("UPDATE wallet_tags SET etx_temp=etx_temp - '" . $amt . "' WHERE wallet_add='" . $etxwal . "'");	    
    if($db_qury){}
}
else
{
	 $etx_stat = 'STKPOL_ERR';	
}

}
else
{
   $etx_stat = 'AMT_ERR';	
}

}

else {
    # code...
     $etx_stat = 'WAL_ERR';

}
}
else {
    # code...
     $etx_stat = 'AUTH_ERR';

}



$responedata = new StdClass;
$responedata->stat = $etx_stat;

$JSONdata = json_encode($responedata);

echo $JSONdata;

 ?>