<?php
header('Access-Control-Allow-Origin: *');  
$to_data = $_POST['to_data'];
$bcc_data = $_POST['bcc_data'];
$from_data = $_POST['from_data'];
$txt_data = $_POST['txt_data'];
$subject_data = $_POST['subject_data'];




        //ini_set( 'display_errors', 1 );
        //error_reporting( E_ALL );
        $from = $from_data; //"info@ethxpert.io";
        $to = $to_data;
        $subject = $subject_data;
        $message = $txt_data;

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "Bcc:" . $bcc_data . "\r\n";
        $headers .= "From:" . $from;

        //$headers .= "From: Sample@example.com" . "\r\n";// ."CC: somebodyelse@example.com";
      if(mail($to,$subject,$message, $headers))  {
echo "The email message was sent.". "<br>";
}

echo "TO DATA: " . $to_data . "<br>";
echo "BCC DATA: " . $bcc_data. "<br>";
echo "FROM DATA: " . $from_data. "<br>";
echo "SUBJECT DATA: " . $subject_data. "<br> <br>";
echo "TEXT DATA: " . $txt_data;
?>