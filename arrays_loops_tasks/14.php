<?php
$arr=array( 4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $value)
{
    if($value == 2 || $value == 3 || $value == 4)
        echo "$value  - yes <br>";
    else
        echo "$value  - no <br>";
}