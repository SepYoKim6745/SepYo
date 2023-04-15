<?php  
	$a = 6;
	$b = 8;
	$i = 1;
	$min = 0;
	while ($i <= $a && $i <= $b) {
		if($a % $i == 0 && $b % $i == 0)
			$max = $i;
		$i++;
	}
	$min = $a*$b/$max;

	echo "정수 a : $a<br>";
	echo "정수 b : $b<br>";
	echo "최대공약수는 $max 이며, 최소공배수는 $min 입니다."
?>