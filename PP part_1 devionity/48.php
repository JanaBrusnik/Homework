<?php
$flag = true;
$i = 2;

while ($i <= 100) {
    for($j = 2; $j < $i; $j++) {
        if($i % $j == 0) {
            $flag = false;
            break;
        }
    }

    if($flag) echo $i." ";
    $flag = true;
    $i++;

}