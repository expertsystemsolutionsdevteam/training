<!DOCTYPE html>
<html>
	<head>
		<title>Process</title>
	</head>
	<body>

		<?php  

			$name = $_POST["name"];
			$address = $_POST["address"];
			$food = $_POST["food"];
			echo "Hello, " . "<b> $name </b>" . "<br>";
			echo "You live here: " . "<i> $address </i>" . "<br>";
			echo "We heard you like " . $food;



		?>


	</body>
</html>