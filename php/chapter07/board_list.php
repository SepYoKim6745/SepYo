<html>
<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
  $table= $_GET["table"];
if($table=="free")
  $board_title="자유게시판";
else
  $board_title="공지사항";
?>
<h1><?=$board_title?></h1>
</body>
  </html>