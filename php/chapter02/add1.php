<?php 
	$a = 10;
	$b=  20;

	$b-=$a--;
	$a-=--$a;

	$b+=++$a;
	$result = $a + $b;

	echo "$result";
 ?>