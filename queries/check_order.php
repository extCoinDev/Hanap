<?php



$gateway = '89a4c886a41b67da15d92c6ad9aeff94840bc18febf4b26ebb086e6230e7895f';

$payment_id = $_POST['payment_id'];

$secret = '21MqrswMdnLKyNfcppHj6YXcwvmPJDamsyM1bTofdyA1wKwy7hNAcRh1dtT3dxvy';

$nonce = ''; 



$body = '';

$tlt_str = $nonce.$body;



$nonce_body_hash = hash("sha512", (string)$tlt_str, true);

$request = "GET/gateways/" . $gateway . "/orders/" . $payment_id  . $nonce_body_hash; 

$raw_signature = hash_hmac('sha512', (string)$request, (string)$secret, true);



$signature = base64_encode($raw_signature);





$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://gateway.gear.mycelium.com/gateways/" . $gateway . "/orders/" . $payment_id );

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

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