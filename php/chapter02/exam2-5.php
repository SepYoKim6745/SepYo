<?php
	$name = '김요셉';
	$phone_number = '010-8283-6745';
	$address = '충청남도 천안시 동남구 병천면 가전리 160-3';
	$email = 'kys1479@koreatech.ac.kr';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<style type="text/css">
	table{
		border : 1px solid black;
		border-collapse: collapse;
	}
	td{
		border: 1px solid black;
		padding: 5px;
	}


</style>
<body>
	<table>
		<tr>
			<td>이름</td>
			<td>휴대폰 번호</td>
			<td>주소</td>
			<td>이메일</td>
		</tr>
		<tr>
			<td><?=$name?></td>
			<td><?=$phone_number?></td>
			<td><?=$address?></td>
			<td><?=$email?></td>
		</tr>
	</table>
</body>
</html>