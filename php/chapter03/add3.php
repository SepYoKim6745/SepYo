<?php
// 2,200를 사용했다면,

// 0 ~ 500까지 410원씩 부과
// 501 ~ 2000까지 910원씩 부과
// 2001 ~ 200까지 1600원씩 부과

// (500 * 410) + (1500 * 910) + (200 * 1600)

	$use = 2200;
	$price = 0;
	$kwh = $use;
	if($use >= 500){
		$use -= 500;
		$price += 500*410;
	}else{
		$price += ($use*410);
		$use = 0;
	}
	
	if($use >= 1500){
		$use -= 1500;
		$price += 1500*910;

	}else{
		$price += ($use*910);
		$use = 0;
	}

	if($use >= 2000){
		$use -= 2000;
		$price += 2000*1600;
	}else{
		$price += ($use*1600);
		$use = 0;
	}

	if($use != 0){
		$price += ($use*3850);
		$use = 0;
	}

	echo "전력 소비량 $kwh kwh에 대한 지불액은 ".number_format((int)$price)."원 입니다.";
	
?>