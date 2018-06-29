<?php
header('Access-Control-Allow-Origin: *');  
session_start();
error_reporting(0);
//create Sql connection - SMARTSHOP-MAIN

include('connection.php');
$tagID  = $_SESSION['data_tag'];
$ptx    = $_SESSION['data_pass'];
$walletAdd =  $_SESSION['data_walletAdd'];
$etx_temp = '';

$to_data = $_POST['recipient'];
$amt = floatval($_POST['credits']);

$mysql_qury = mysql_query("SELECT * FROM wallet_tags WHERE wallet_add ='" . $walletAdd . "'");
$mysql_fetch = mysql_fetch_array($mysql_qury);
$wallet_val = floatval($mysql_fetch['etx_temp']);

if (mysql_num_rows($mysql_qury)!==0){

    //CHECK IF RECIPIENT EXISTS
    $mysql_qury = mysql_query("SELECT * FROM wallet_tags WHERE wallet_add ='" . $to_data . "'");
    if (mysql_num_rows($mysql_qury)!==0){
        
  if($wallet_val >= $amt){
        //PERFORM SEND DATA
        $mysql_qury = mysql_query("UPDATE wallet_tags SET etx_temp=etx_temp + '" . $amt . "' WHERE wallet_add='" . $to_data . "'");	    
        if($db_qury){}

        //PERFORM DEDUCT
        $mysql_qury = mysql_query("UPDATE wallet_tags SET etx_temp=etx_temp - '" . $amt . "' WHERE wallet_add='" . $walletAdd . "'");	    
        if($db_qury){}

        echo 'OK';
    }
    else{echo 'NO_WAL';}

    }
    else{echo 'WAL_404';}

  
 

}




 ?>