<?php 
	$age = 68;
	$welfare = "no";
	$youkong = "yes";
	$after = "no";

	if($age < 3)
		$fee = "무료";
	else if(($age >= 3 && $age <= 13) || ($after == "yes"))
		$fee = "4,000원";
	else if(($age >= 14 && $age <= 18) || ($age >= 70) || ($welfare == "yes") || ($youkong == "yes"))
		$fee = "8,000원";
	else
		$fee = "10,000원";

	echo "복지 카드 소지 : $welfare<br>";
	echo "국가유공자증 소지 : $youkong<br>";
	echo "17시 이후 입장 : $after<br>";
	echo "나이 : $age 세<br><br>";
	echo "입장료 : $fee";
?>