<?php
/* $day=15;
switch ($day) {
    case 1:
        echo "Это рабочий день"; break;
    case 2:
        echo "Это рабочий день"; break;
    case 3:
        echo "Это рабочий день"; break;
    case 4:
        echo "Это рабочий день"; break;
    case 5:
        echo "Это рабочий день"; break;
    case 6:
        echo "Это выходной день"; break;
    case 7:
        echo "Это выходной день"; break;
    default:
        echo "Неизвестный день";
}
*/

$day=5;
switch ($day) {
    case ($day >= 1 && $day <= 5):
        echo "This is a working day"; break;
    case ($day >= 6 && $day <= 7):
        echo "It's a day off"; break;
    default:
        echo "Undefined day";
}
