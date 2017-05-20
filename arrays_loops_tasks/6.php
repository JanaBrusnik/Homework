<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$ru = array();
$en = array();
foreach ($arr as $key=>$value){
    $ru[]=$value;
    $en[]=$key;
}
print_r($ru);
print_r($en);