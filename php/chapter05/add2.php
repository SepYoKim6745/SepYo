<?php  
	$arr = array(20, 18, 19, 17 ,15, 14, 16, 12, 13, 11, 9, 8, 5, 7, 4, 1, 2, 10, 3, 6);
	//$num = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
	$even = 10;
	$odd = 0;
	for($i = 0; $i < 20; $i++)
	{	
		
		if($arr[$i] % 2 == 0)
		{
			$num[$even] = $arr[$i];
			$even++;
		}
		else
		{
			$num[$odd] = $arr[$i];
			$odd++;
		}
	}

	for($i = 10-2; $i >= 0; $i--)
	{
		for($j = 0; $j <= $i; $j++){
			if($num[$j] > $num[$j+1])
			{
				$tmp = $num[$j];
				$num[$j] = $num[$j+1];
				$num[$j+1] = $tmp;
			}
		}
	}

	for($i = 20-2; $i >= 10; $i--)
	{
		for($j = 10; $j <= $i; $j++){
			if($num[$j] < $num[$j+1])
			{
				$tmp = $num[$j];
				$num[$j] = $num[$j+1];
				$num[$j+1] = $tmp;
			}
		}
	}

	for($i = 0; $i < 20; $i++)
		echo "$num[$i] ";
?>