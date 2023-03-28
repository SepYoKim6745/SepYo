<?php
	$a = 10;
	$b = 20;

	$b-=$a--;
	$a-=--$a;

	$b+=2*($a++);
	$result = $a+$b;
	echo "$result";
?>