<?php
include('connection.php');

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$nname=$_POST['nname'];
$cp_no=$_POST['cp_no'];
$email=$_POST['email'];
$address=$_POST['address'];
$usn=$_POST['usn'];
$pass=md5($_POST['pass']);
$gender=$_POST['gender'];
$type=$_POST['act'];
$ccd=$_POST['ccd'];
$dtadd=date("Y-m-d H:i:s");

$db_qury = mysql_query("INSERT INTO users_main(fname,mname,lname,nname,cp_no,email,address,usn,pass,gender,type,ccd,dt_add)
		VALUES('$fname','$mname','$lname','$nname','$cp_no','$email','$address','$usn','$pass','$gender','$type','$ccd','$dtadd')");


if($db_qury){
echo "Data Submitted succesfully";
}

?>