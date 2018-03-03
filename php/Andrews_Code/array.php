<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	
	echo "Clients: <br>";

	$people = array("Alice", "Bob", "Catherine", "Andrew", "Goose", "Gandalf", "Marty", "The Muffin Man", "Curious George", "Luke Skywalker", "Fred");

	echo "<ul>";

	foreach ($people as $person) {
		echo "<li> $person </li>";
	}

	echo "</ul";


?>

</body>
</html>