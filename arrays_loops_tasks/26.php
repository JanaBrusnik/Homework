<?php
$arr=array();
$pro=1;
for($i=0;$i<10; $i++) {
    $arr[] = rand(1, 100);
    }
var_dump($arr);
echo '<br>';
foreach ($arr as $key=>$value){
    if(($key%2==0)&&$value>0)
     $pro*=$value;
    if(($key%2!=0)&&$value>0) {
        echo $key, '=>', $value, '<br>';
    }

}
echo $pro;