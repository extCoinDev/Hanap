<?php
foreach (glob("appViews/*.php") as $filename)
{
    include $filename;
}
?>

