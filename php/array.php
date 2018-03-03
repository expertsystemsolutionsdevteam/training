<html>
<head><title>Dad Gum array</title></head>
<body>

<?php


	$people = array("Sebastian", "R2D2", "Gertrude");

	foreach ($people as $person) {
		echo $person . '<br>';

	}
echo "<ul>";
	foreach ($people as $person) {
		echo "<li> $person </li>"; 
}
echo "</ul>";




?>


</body>

</html>
