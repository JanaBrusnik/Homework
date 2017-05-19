<?php
//

$a = 6;
$b = 0;
$operator = '/';
if ($b==0)
{
    echo 'Forbidden! Division by zero!';
}
else{

    switch($operator) {
        case '+': echo $a+$b; break;
        case '-': echo $a-$b; break;
        case '*': echo $a*$b; break;
        case '/': echo $a/$b; break;
        case '%': echo $a%$b; break;
        default: echo 'Ooops';
    }
}