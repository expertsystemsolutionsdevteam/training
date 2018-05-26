<?php

function welcome_and_subtract($name, $age, $num1, $num2){
	echo "Welcome! silly goose. <br> Your name is: " . $name . " <br> Your age is: " . $age . "<br>";

	$total = $num1 - $num2;

	echo $num1 . " - " . $num2 . " = ";

	return $total;
}

echo welcome_and_subtract('Chris', "14", 20, 12);

?>