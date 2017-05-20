<?php
$arr = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');

foreach ($arr as $key=> $value)
{
    if($key==5 || $key==6)
        echo "<b> $value </b> <br>";
    else
        echo "$value <br>";
}