<?php session_start();
//check for connection

include('connection.php');

$myObj->usr = $_SESSION['usr'];
$myObj->ccd = $_SESSION['ccd'] ;
$myObj->tck = $_SESSION['tck'] ;
$myObj->wallet =  $_SESSION['wallet'];
$myObj->upline_ccd = $_SESSION['upline_ccd'];

echo $_SESSION['usr'];
$myJSON = json_encode($myObj);

echo $myJSON;

?>