<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
        $count = 0;
        $fp = fopen("lesson6_txt.txt", "r") or die("파일을 열 수 없습니다！");
        while( !feof($fp) ){
            $arr = fgets($fp);
            $arr = preg_replace("/\s+/", "\n", $arr);
            $count += mb_strlen($arr);
        }
        echo "<br>text 글자수 (공백포함) : $count 자";
        fclose($fp);
        echo "<br>";

        $count = 0;
        $fp = fopen("lesson6_txt.txt", "r") or die("파일을 열 수 없습니다！");
        while( !feof($fp) ){
            $arr = fgets($fp);
            $arr = preg_replace("/\s+/", "", $arr);
            $count += mb_strlen($arr);
        }
        echo "<br>text 글자수 (공백제외) : $count 자";
        fclose($fp);
    ?>
</body>
</html>
