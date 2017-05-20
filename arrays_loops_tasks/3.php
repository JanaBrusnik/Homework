<?php
$arr = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($arr as $value) {
    $value=pow($value,2);
    $result+=$value;
}
echo $result;