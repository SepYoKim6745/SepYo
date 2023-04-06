<?php

	$year = 2000;

	if(($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0)
		echo "$year 년은 윤년입니다.";
	else
		echo "$year 년은 윤년이 아닙니다."

?>