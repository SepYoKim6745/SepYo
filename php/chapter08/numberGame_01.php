<html>
<head>
    <meta charset='utf-8'>
</head>
<body>
    <?php
        $n = rand(1,100);
        session_start();

        if (!isset($_SESSION['try']))
            $_SESSION['try'] = 0;

        // if (!isset($_SESSION['num']))
        //     $_SESSION['num'] = $_POST['num'];
        
        if (isset($_POST['sub'])){
            $_SESSION['try']++;
            $_SESSION['num'] = $_POST['num'];
        }   
    ?>
    <?php
        echo "숫자를 입력하시오. (양수)<br>"
    ?>
    <form name="form1" method="post" action="numberGame_01.php">
        <input type="text" name="num">
        <input type="submit" name="sub" value="확인"><br>
        <!-- <?php echo "시도 횟수 : ".$_SESSION['try']."<br>" ?> -->
        <?php echo "시도 횟수 : ".$n."<br>" ?>
        <?php
            if (isset($_POST['num'])){
                $num = $_SESSION['num'];
                if(($num == $n) && $_SESSION['try']>=1){
                        unset($_SESSION['num']);
                        unset($_SESSION['try']);
                        $_SESSION['try'] = 0;
                        echo "당신이 입력한 숫자".$n."은 정답입니다!";
                }
                else if($num < $n){
                    echo "당신이 입력한 숫자".$num."보다 Up!";
                }
                else if($num > $n){
                    echo "당신이 입력한 숫자".$num."보다 Down!";
                }
            }
        ?>
    </form>
</body>
</html>
