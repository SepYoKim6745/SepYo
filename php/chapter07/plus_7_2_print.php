<html>
<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $v1 = $_POST["v1"];
        $v2 = $_POST["v2"];
        $v3 = $_POST["v3"];
        $num = count($_POST["menu"]);
        $content = $_POST["content"];
    ?>
    <h1>설문조사 결과</h1>
    성별 : <?= $gender?><br>
    나이 : <?= $age?><br>
    좋아하는 음식 : <?php
        for($i=0; $i<$num; $i++)
            echo $_POST["menu"][$i];
            if($i != $num -1)
                echo ", ";
    ?>
    본 식당의 위치는 만족스러운가?&nbsp;<?= $v1 ?>&nbsp;<br>
    본 식당의 서비스는 만족스러운가?&nbsp;<?= $v2 ?>&nbsp;<br>
    본 식당의 가격은 적당한가?&nbsp;<?= $v3 ?>&nbsp;<br>
    <br>
    기타 의견 사항 : <?= $content?> <br>

  </body>
  </html>