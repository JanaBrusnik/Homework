<?php
$arr = array( 1,20, 15, 17, 24, 35);
$result = 0;
foreach ($arr as $value) {
    $result=$result+$value;
}
echo $result;