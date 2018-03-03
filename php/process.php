<html>
<head><title>Hello World</title></head>


<body>

<?php


	$name = $_GET["name"];
	$address = $_GET["address"];
	echo "Hello, " . "<b>  $name </b>" . " from " . "<b>" .  $address . "</b>"  . "!!!";

?>

</body>
</html>
