<?php
$arr = array('January','February','March','April','May','June','July','August','September','October','November','December');
$month='May';
foreach ($arr as $value)
{
    if($value==$month)
        echo "<b> $value </b> <br>";
    else
        echo "$value <br>";
}