<?php  
	echo "----------------------------<br>";
	echo "야드 미터<br>";
	echo "----------------------------<br>";

	for($pow = 10; $pow <= 300; $pow= $pow+10)
	{
		$flat = $pow * 0.3025;
		echo "$pow $flat<br>";
	}
	echo "----------------------------<br>";
?>