<?php
$arr = array();
for($i=0; $i<6;$i++) {
    //$n=rand(1,20);
    $arr[] = $i;
}

function arrayPrint($a){
    var_dump('<pre>',$a, '</pre>'); //почему в PS перед тегом, сразу после скобочки пишет expression:, что это значит?
}

arrayPrint($arr);