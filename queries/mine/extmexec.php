<?php
header('Access-Control-Allow-Origin: *');  
session_start();
//error_reporting(0);
//create Sql connection - SMARTSHOP-MAIN
include('../connection.php');
$armid =  $_POST['armid'];
$dtadd=date("Y-m-d H:i:s");
$stakerw = '0.170';
$shareval = '';//0.04618;
$data_log = '';
//$armserial =  $_POST['armserial'];
//$walletAdd =  $_POST['extwal'];
//$etx_stat = '';
//$etx_price = '0.08';

function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

$qry = "SELECT * FROM SBC_ARMDEV WHERE ARM_ID ='" . $armid . "'";
$mysql_qury = mysql_query($qry) or die(mysql_error());
$row = mysql_fetch_array($mysql_qury);
$wallet_add = $row['CONFIG_WALLET'];

$shareval = (floatval($stakerw) * floatval($row['SBC_STAKCAP']) / 24) / 60;

$CRYPTDATA = floatval($shareval) ."', '" . $wallet_add ."', '" . $dtadd;

if (mysql_num_rows($mysql_qury)!==0){
#echo data
    $etx_stat = '200';
    $randBlock = sha1(generateRandomString());   
    
      $data_log = 'NEW SHARE FOUND! ' . $randBlock . ' @' . $dtadd . ' blockrwd' . $shareval . ' ON ' . $armid . '[' . $wallet_add . ']' ;
     
//GET PREV TRANSACTION
$qry = "SELECT * FROM etx_transaction";
$mysql_qury = mysql_query($qry);
$vulkan_blockheight = mysql_num_rows($mysql_qury) - 1;

$qry = "SELECT * FROM etx_transaction WHERE id ='" . $vulkan_blockheight . "'";
$mysql_qury = mysql_query($qry) or die(mysql_error());
$row = mysql_fetch_array($mysql_qury);
$data_prevhash = $row['data_prevhash'];

$mysql_qury = mysql_query("UPDATE wallet_tags SET etx_temp=etx_temp + " . $shareval . " WHERE wallet_add='" . $wallet_add . "'");	
        if($mysql_qury){}
$mysql_qury = mysql_query("INSERT INTO etx_transaction(wallet_add_from, data_amount, wallet_add_to, data_date, data_prevhash, data_curhash) VALUES ('ARM_MINER'," . $shareval . "," . $wallet_add . "," . $dtadd . "," . $data_prevhash . "," . sha1($CRYPTDATA) . ")");	
        if($mysql_qury){}

}

else {
    # code...
     $etx_stat = 'ERR';
}

$responedata = new StdClass;
$responedata->stat = $etx_stat;
$responedata->data_log = $data_log;
$JSONdata = json_encode($responedata);

echo $JSONdata;
?>