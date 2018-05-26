<?php

function validate($subject, $pattern) {

	preg_match($pattern, $subject, $matches);
	#print_r($matches);

	if(sizeof($matches) == 1){

		return 1;

	} else{

		return 0;

	}

}


?>