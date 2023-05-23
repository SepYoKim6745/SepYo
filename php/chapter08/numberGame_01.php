<html>
<head>
    <meta charset='utf-8'>
</head>
<body>
    <?php
        $n = rand(1,100);
        $er = 0;
        session_start();

        if (!isset($_SESSION['try']))
            $_SESSION['try'] = 0;

        if (!isset($_SESSION['n']))
            $_SESSION['n'] = $n;
        
        if (isset($_POST['sub'])){
            $_SESSION['num'] = $_POST['num'];
            if(!is_numeric($_SESSION['num'])) $er = 1;
            else if($_SESSION['try'] >= 5) $er = 2;
            else{
                $er = 0;
                $_SESSION['try']++;
            }
        }   
    ?>
    <?php
        echo "숫자를 입력하시오. (양수)<br>"
    ?>
    <form name="form1" method="post" action="numberGame_01.php">
        <input type="text" name="num">
        <input type="submit" name="sub" value="확인"><br>
        <!-- <?php echo "시도 횟수 : ".$_SESSION['try']."<br>" ?> -->
        <?php echo "시도 횟수 : ".$_SESSION['try']."<br>" ?>
        <?php
            if($er == 1) echo "숫자가 아닙니다. 숫자를 입력해주세요.";
            else if($er == 2){ 
                echo "최대 시도 회수가 초과했습니다!";
                unset($_SESSION['num']);
                unset($_SESSION['try']);
                $_SESSION['try'] = 0;
                echo "<br>정답은".$_SESSION['n']."입니다.";
                $_SESSION['n'] = $n;
            }
            else if (isset($_POST['num'])){
                $num = $_SESSION['num'];
                if(($num == $_SESSION['n']) && $_SESSION['try']>=1){
                        unset($_SESSION['num']);
                        unset($_SESSION['try']);
                        $_SESSION['try'] = 0;
                        echo "당신이 입력한 숫자".$num."은 정답입니다!";
                        $_SESSION['n'] = $n;

                }
                else if($num < $_SESSION['n']){
                    echo "당신이 입력한 숫자".$num."보다 Up!";
                }
                else if($num > $_SESSION['n']){
                    echo "당신이 입력한 숫자".$num."보다 Down!";
                }
            }
        ?>
    </form>
</body>
</html>
