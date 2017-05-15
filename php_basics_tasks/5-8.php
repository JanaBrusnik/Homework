<?php
$name = "Jana";
$age = 25;
echo  "My name is {$name} <br>";
echo  "My age is {$age}<br>";
    if ($age >=18 && $age<=59)
        echo "You need to work";
      elseif($age > 59)
	  echo "It's time for you to retire";
    elseif ($age < 17 && $age > 0)
	  echo "It's too early for you to work";
	else
      echo "Undefined age";