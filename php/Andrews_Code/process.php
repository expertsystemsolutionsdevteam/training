<!DOCTYPE html>
<html>
	<head>
		<title>Process</title>
	</head>
	<body>

		<?php  

			include("validation.php");

			$name = $_POST["name"];
			$address = $_POST["address"];
			$food = $_POST["food"];
			$email = $_POST["e-mail"];

			echo "Hello, " . "<b> $name </b>" . "<br>";
			echo "You live here: " . "<i> $address </i>" . "<br>";
			echo "We heard you like " . $food . "<br>";
			echo "Your email is, " . $email . ", and ";

			if(validate($email, '/@/')) {

				echo "it is Valid!";

			} else{

				echo "it's not Valid :(";

			}

		?>


	</body>
</html>