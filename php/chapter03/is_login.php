<?php
	$level = 7;
	echo "회원 레벨 : $level<br>";

	if($level >= 1 and $level <= 7)
		echo "로그인 가능합니다!";
	else
		echo "로그인이 가능하지 않습니다!";
?>