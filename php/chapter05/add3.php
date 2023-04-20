<?php  
	$scores = [ [28,28,26,9],
				[30,27,30,10], 
				[25,26,24,8],
				[18,22,22,5],
				[24,25,30,10]];
	$sub = array(0, 0, 0, 0, 0);

	echo "중간 기말 팀플 출석 총점<br>";

	for($s = 0; $s < 5; $s++){
		echo "학생 ". $s+1 ." 번:";
		$sum = 0;
		for($i = 0; $i < 4; $i++)
		{
			$sum += $scores[$s][$i];
			echo $scores[$s][$i]." ";
		}
		echo "$sum";
		echo "<br>";

		for($i = 0; $i < 4; $i++)
			$sub[$i] += $scores[$s][$i];
		$sub[$i] += $sum;
	}
	echo "과목 별 평균: ";
	for($i = 0; $i < 5; $i++)
	{	
		$sub[$i]/=5;
		echo "$sub[$i] ";
	}
	
?>