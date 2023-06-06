<?php
$id = $_POST["id"];
$pass = $_POST["pass"];
$name = $_POST["name"];
$email1 = $_POST["email1"];
$email2 = $_POST["email2"];
$email = $email1 . "@" . $email2;
$pass_confirm = $_POST["pass_confirm"];


if (!$id || !$pass || !$name || $email1 == "@" || $email2 == "" || $pass_confirm && ($pass != $pass_confirm)) {
    echo "
            <script>
                alert('회원정보를 모두 입력해주세요!');
                location.href = 'login_form.php';
            </script>
        ";
} else {
    $regist_day = date("Y-m-d (H:i)");

    $con = mysqli_connect("localhost", "user1", "12345", "project");

    $sql = "insert into members(id, pass, name, email, regist_day, level, point)";
    $sql .= "values('$id', '$pass', '$name', '$email1', '$regist_day',9,0)";

    mysqli_query($con, $sql);
    mysqli_close($con);
}

echo "
        <script>    
            location.href = 'index.php';
        </script>
    ";



?>