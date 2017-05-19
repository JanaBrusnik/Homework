

<?php
$arr = array();
for($i=0; $i<6;$i++) {
    //$n=rand(1,20);
    $arr[] = $i;
}

function arrayPrint($a,$b=1){
    if($b == 1) {
        print_r($a); //как тут использовать <pre>?
    }
    else var_dump('<pre>',$a, '</pre>');
}
arrayPrint($arr);
arrayPrint($arr, 4);