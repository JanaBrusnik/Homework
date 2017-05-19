<?php
$flag = true;

for($i = 2; $i <= 400; $i++) {

    for($j = 2; $j < $i; $j++) {
        if($i % $j == 0) {
            $flag = false;
            break;
        }
    }

    if($flag)
       echo $i." ";
       
    $flag = true;



}