<?php
	$buy = 80000;
	if($buy>=10000 && $buy<50000)
		$rate = 5.0;
	else if($buy>=50000 && $buy<300000)
		$rate = 10.0;
	else
		$rate = 0;

	$discout = $buy * $rate / 100;
	$pay = $buy - $discout;

	echo "구매액 : {$buy}원<br>";
	echo "할인율 : {$rate}%<br>";
	echo "할인 금액 : {$discout}원<br>";
	echo "지불액 : {$pay}원";
?>