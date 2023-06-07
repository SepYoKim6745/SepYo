<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>PHP 프로그래밍 입문</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/message.css">
	<script>
		function check_input() {
			if (!document.message_form.subject.value) {
				alert("제목을 입력하세요!");
				document.message_form.subject.focus();
				return;
			}
			if (!document.message_form.content.value) {
				alert("내용을 입력하세요!");
				document.message_form.content.focus();
				return;
			}
			document.message_form.submit();
		}
	</script>
</head>

<body>
	<?php include "header.php"; ?>
	<section>
		<br>
		<div id="message_box" class="container">
			<h3 id="title">
				답변 쪽지 보내기
			</h3>
			<hr>
			<?php
			$num = $_GET["num"];

			$con = mysqli_connect("localhost", "user1", "12345", "project");
			$sql = "select * from message where num=$num";
			$result = mysqli_query($con, $sql);

			$row = mysqli_fetch_array($result);
			$send_id = $row["send_id"];
			$rv_id = $row["rv_id"];
			$subject = $row["subject"];
			$content = $row["content"];

			$subject = "RE: " . $subject;

			$content = "> " . $content;
			$content = str_replace("\n", "\n>", $content);
			$content = "\n\n\n-----------------------------------------------\n" . $content;

			$result2 = mysqli_query($con, "select name from members where id='$send_id'");
			$record = mysqli_fetch_array($result2);
			$send_name = $record["name"];
			?>
			<form name="message_form" method="post" action="message_insert.php?send_id=<?= $userid ?>">
				<input type="hidden" name="rv_id" value="<?= $send_id ?>">
				<div id="write_msg">
					<ul>
						<li>
							<span class="col1">보내는 사람 : </span>
							<span class="col2">
								<?= $userid ?>
							</span>
						</li>
						<hr>
						<li>
							<span class="col1">수신 아이디 : </span>
							<span class="col2">
								<?= $send_name ?>(
								<?= $send_id ?>)
							</span>
						</li>
						<hr>
						<li>
							<div class="row">
								<label for="content" class="col-1 col-form-label">내용 </label>
								<div class="col-11">
									<textarea name="content" type="textarea" class="form-control" rows="10"></textarea>
								</div>
							</div>
						</li>
						<hr>
						<li id="text_area">
							<div class="row">
								<label for="content" class="col-1 col-form-label">내용 </label>
								<div class="col-11">
									<textarea name="content" type="textarea" class="form-control"
										rows="10"><?= $content ?></textarea>
								</div>
							</div>
						</li>
					</ul>
					<button type="button" class="btn btn-primary" style="float:right;"
						onclick="check_input()">보내기</button>
				</div>
			</form>
		</div> <!-- message_box -->
	</section>
	<br>
	<footer>
		<?php include "footer.php"; ?>
	</footer>
</body>

</html>