<?php
$id = $_GET["id"];
$pass = $_POST["pass"];
$name = $_POST["name"];
$email1 = $_POST["email1"];
$email2 = $_POST["email2"];
$email = $email1 . "@" . $email2;
$pass_confirm = $_POST["pass_confirm"];

if ($id && $pass && $name && $email1 != "" && $email2 != "" && $pass_confirm && ($pass == $pass_confirm)) {
    $con = mysqli_connect("localhost", "user1", "12345", "project");
    $sql = "UPDATE members SET pass='$pass', name='$name', email='$email' WHERE id = '$id'";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
        <script>
            location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            location.href = 'member_modify_form.php';
        </script>
    ";
}
?>
