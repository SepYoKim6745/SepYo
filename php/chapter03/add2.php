<?php
	$count = 0;
	$num = 0;
	$sw = true;
	for($i = 100; $i <= 10000; $i++){
		if($i % 9 == 0){
			echo "$i"." ";
			$count++;
			$num++;
		}
		if($num % 11 == 0){
			echo "<br>";
			$num++;
		}
	}
	echo "100부터 10000까지 자연수 중에서 9의 배수의 개수는 $count 개 입니다.";
?>