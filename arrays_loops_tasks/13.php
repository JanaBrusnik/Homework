<?php
$arr=array(1,2,3,4,5,6,7,8,9,10);
$n=0;
foreach ($arr as $value){
    foreach ($arr as $val){
        $n=$value*$val;
        echo "$value*$val=$n <br>";
    }
    echo '<br>';
}