<?php 
	$n = 9000;
	
	for($i = 2; $i <= $n; $i++)
	{
		if($n % $i == 0) break;
	}

	if($n == $i)
		echo "$n 은 소수 입니다.";
	else
		echo "$n 은 소수가 아닙니다.";
?>