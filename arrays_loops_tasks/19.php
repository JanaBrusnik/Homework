<?php
$arr = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
$day='Saturday';
foreach ($arr as $value)
{
    if($value==$day)
        echo "<b> $value </b> <br>";
   else
       echo "$value <br>";
}