<?php
header('Access-Control-Allow-Origin: *');  
session_start();
if (isset($_POST['login'])) { 
include('connection.php');
$tagID=strip_tags($_POST['data_tag']);
$tagID = str_replace("'", "", "$tagID");
$ptx=strip_tags($_POST['data_pass']);
$ptx= str_replace("'", "", "$ptx");
$ptx = md5($ptx);
$loginres = '';
$etxbal= '';
$etxsd = '';
$walletAdd= '';
}

if (isset($_POST['login'])) { 
//$loginres =  "Oops, we are improving our service at the moment. Please come back later :)";
if ($ptx == null) {
echo "NO_PASS";
}
elseif ($tagID == null) {
    $loginres =  "NO_TAGID";
}
Else {
    $str1 = "Select * from wallet_tags where data_tag = '".$tagID."' AND ptx_data = '" . $ptx . "'";
$qry1 = mysql_query($str1);

if (!$data1=mysql_fetch_array($qry1)) {
    $loginres =  "Decrypting Failed. ERR_404 (IDENTIFIER DOES NOT EXIST) ";
}

else{
    if ($ptx != $data1['ptx_data']) {
        $loginres =  "Decrypting Failed. PASSWORD INCORRECT";
}
    
//else if($data1['natid']==""){
//    $_SESSION['binary_username'] = $tagID;
//    $_SESSION['binary_email'] = $ptx;
//    echo "PAY";
//}

else{
    $mysql_fetch = mysql_fetch_array($qry1);
       
    $tagID = $tagID;
    //$_SESSION['data_pass'] = $ptx;
    $etxsd =$data1['etxsd'];
    $walletAdd = $data1['wallet_add'];
    $loginres =  "OK";  //<!-- document.location.href='http://btcquest.ga/log-me-in.php?status=ok';  acct-index -->

  

}
}
}
}

$responedata = new StdClass;
$responedata->etxbal = $etx_temp;
$responedata->etxsd = $etxsd;
$responedata->tagID  = $tagID;
$responedata->walletAdd = $walletAdd;
$responedata->loginres = $loginres;

$JSONdata = json_encode($responedata);

echo $JSONdata;

?>