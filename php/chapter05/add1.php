<?php  
	$num = 120;
	$cnt = 0;
	for($i = 2; $i <= $num; $i++)
	{
		$arr[$i] = $i;
	}

	for($i = 2; $i <= sqrt($num); $i++)
	{
		if($arr[$i] == 0) continue;
		for($j = 2 * $i; $j <= $num; $j += $i)
		{
			$arr[$j] = 0;
		}
	}

	for($i = 2; $i <= $num; $i++)
	{
		if($arr[$i] != 0)
		{
			$cnt++;
			echo "$arr[$i] ";
		}
	}
	echo "<br>";
	echo "Count : ".$cnt;
	
?>