<?php
include('members_area/incl/connection.php');
header('Access-Control-Allow-Origin: *');  

$dbquery = mysql_query("SELECT * FROM binary_members WHERE username ='Donation'");
$mysql_fetch = mysql_fetch_array($dbquery);
$date=date('Y-m-d');

$value = $mysql_fetch['ps'];
$target = $mysql_fetch['psbalance'];

$getcycle = $target / $value;
$roundcycle = round($getcycle);

    //IF REACHE THE TARGET OR GREATER
echo ' executing script';
$db_qury = mysql_query("SELECT * FROM hashcode WHERE maturitydate > '$date' and date != '$date' and username = '3EHxUr1dNB8JCSEUNdNmuTPV8LLQ33UBGA'");
echo ' executing script done';
echo mysql_num_rows($db_qury);
    $c = 0;
    while($record = mysql_fetch_array($db_qury)){
        //SET 40 60 COUNTERS TO 0
        $var40 = 0;
        $var60 = 0;
        
        //MULTIPLY DAILY BY THE CYCLES
        echo $record['SUM(gh)'];

        //CHECK IF TARGET REACHED
        if ($roundcycle >= 1){$multiply_cycle = floatval($record['SUM(gh)'])*$roundcycle;}
        else{$multiply_cycle = floatval($record['SUM(gh)']);}

        //SPLIT RESULT TO 40 AND 60
        $var40 = floatval($multiply_cycle)*.4;
        $var60 = floatval($multiply_cycle)*.6;

        //UPDATE DATABASE
        $dbquery1 = mysql_query("UPDATE binary_members SET wwallet = wwallet + '" . $var60 . "', withdrawable = withdrawable + '" . $var40 . "' WHERE username ='" . $record['username'] . "'");
        if ($dbquery1){echo 'OK';}
        
    }

    //RESET COUNTER TO 0
    $dbquery1 = mysql_query("UPDATE * binary_members SET ps='0' WHERE username !='Donation'"); 
        if ($dbquery1){}





?>