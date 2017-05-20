<?php
$arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$num = count($arr);
//echo $num;
foreach ($arr as $key=>$value)
{
    if( $key == ($num-1))
        echo $value;
    else
        echo $value.",";
}