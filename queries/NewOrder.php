<?php


header('Access-Control-Allow-Origin: *'); 
$amt  = $_POST['amount'];
//$callbackurl = $_POST['callback_uri'];
$callbackdata  = $_POST['callbackdata'] . '--123890';
$keychain =  $_POST['keychain'];


$secret = '21MqrswMdnLKyNfcppHj6YXcwvmPJDamsyM1bTofdyA1wKwy7hNAcRh1dtT3dxvy';
$nonce = 1442214027577; # (Time.now.to_f * 1000).to_i

$body = '';
$tlt_str = $nonce.$body;

$nonce_body_hash = hash("sha512", (string)$tlt_str, true);


$request = "POST/gateways/89a4c886a41b67da15d92c6ad9aeff94840bc18febf4b26ebb086e6230e7895f/orders?amount=" . $amt . "&callback_data=" . $callbackdata . $nonce_body_hash; 
$raw_signature = hash_hmac('sha512', (string)$request, (string)$secret, true);

$signature = base64_encode($raw_signature);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://gateway.gear.mycelium.com/gateways/89a4c886a41b67da15d92c6ad9aeff94840bc18febf4b26ebb086e6230e7895f/orders?amount=" . $amt . "&callback_data=" . $callbackdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$headers = array();
$headers[] = "X-Nonce: " . $nonce;
$headers[] = "X-Signature: ".$signature;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
echo $result;




?>