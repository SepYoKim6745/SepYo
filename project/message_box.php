<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/message_box_style.css">
</head>
<style>
    li {
        list-style: none;
    }
</style>
<script>
    function check_input() {
        if (!document.message_form.rv_id.value) {
            alert("수신 아이디를 입력하세요!");
            document.message_form.rv_id.focus();
            return;
        }
        if (!document.message_form.subject.value) {
            alert("제목을 입력하세요!");
            document.message_form.subject.focus();
            return;
        }
        if (!document.message_form.content.vlaue) {
            alert("내용을 입력하세요!");
            document.message_form.content.focus();
            return;
        }
        document.message_form.submit();
    }
</script>

<body>
    <?php include "header.php"; ?>
    <section>
        <br>
        <div id="message_box">
            <h3 class="container">
                <?php
                if (isset($_GET["page"]))
                    $page = $_GET["page"];
                else
                    $page = 1;
                $mode = $_GET["mode"];
                if ($mode == "send")
                    echo "송신 쪽지함 > 목록 보기";
                else
                    echo "수신 쪽지함 > 목록 보기";
                ?>
            </h3>
            <br>
            <hr id="postline" class="container">
            <div class="row mb-3 text-center">
                <ul id="message">
                    <li>
                        <div class="col-1">번호</div>
                        <div class="col-4">제목</div>
                        <?php
                        if ($mode == "send")
                            echo "<div class='col-3'>받은이</div>";
                        else
                            echo "<div class='col-3'>보낸이</div>";
                        ?>
                        <div class="col-3">등록일</div>
                        <hr class="container">
                    </li>
                    <?php   
                    $con = mysqli_connect("localhost", "user1", "12345", "project");
                    if ($mode == "send")
                        $sql = "select * from message where send_id='$userid' order by num desc";
                    else
                        $sql = "select * from message where rv_id='$userid' order by num desc";

                    $result = mysqli_query($con, $sql);
                    $total_record = mysqli_num_rows($result);
                    $scale = 10;

                    if ($total_record % $scale == 0)
                        $total_page = floor($total_record / $scale);
                    else
                        $total_page = floor($total_record / $scale) + 1;

                    $start = ($page - 1) * $scale;
                    $number = $total_record - $start;

                    for ($i = $start; $i < $start + $scale && $i < $total_record; $i++) {
                        mysqli_data_seek($result, $i);
                        $row = mysqli_fetch_array($result);
                        $num = $row["num"];
                        $subject = $row["subject"];
                        $regist_day = $row["regist_day"];

                        if ($mode == "send")
                            $msg_id = $row["rv_id"];
                        else
                            $msg_id = $row["send_id"];

                        $result2 = mysqli_query($con, "select name from members where id='$msg_id'");
                        $record = mysqli_fetch_array($result2);
                        $msg_name = $record["name"];
                        ?>
                        <li>
                            <div class="col-1">
                                <?= $number ?>
                            </div>
                            <div class="col-4">
                                <a href="message_view.php?mode=send&num=<?= $num ?>">
                                    <?= $subject ?></a>
                            </div>
                            <div class="col-3">
                                <?= $msg_name ?>(
                                <?= $msg_id ?> )
                            </div>
                            <div class="col-3">
                                <?= $regist_day ?>
                            </div>
                        </li>
                        <hr class="container">
                        <?php
                        $number--;
                    }
                    mysqli_close($con);
                    ?>
                </ul>
            </div>
            <ul id="page_num">
                <?php
                if ($total_page >= 2 && $page >= 2) {
                    $new_page = $page - 1;
                    echo "<li
                        <a href='message_box.php?mode=$mode&page=$new_page'>
                            ◀ 이전</a></li>";
                } else
                    echo "<li>&nbsp;</li>";

                for ($i = 1; $i <= $total_page; $i++) {
                    if ($page == $i) {
                        echo "<li><b> $i </b></li>";
                    } else {
                        echo "<li> <a href='message_box.php?mode=$mode&page=$i'>
                                $i </a></li>";
                    }
                }
                if ($total_page >= 2 && $page != $total_page) {
                    $new_page = $page + 1;
                    echo "<li> <a href='message_box.php?mode=$mode&page=$new_page'>
                            ◀ 이전</a></li>";
                } else {
                    echo "<li>&nbsp;</li>";
                }
                ?>
            </ul>
            <ul class="buttons container">
                <li><button class="btn btn-primary" onclick="location.href='message_box.php?mode=rv'">
                        수신 쪽지함</button></li>
                <li><button class="btn btn-primary" onclick="location.href='message_box.php?mode=send'">
                        송신 쪽지함</button></li>
                <li><button class="btn btn-primary" onclick="location.href='message_form.php'">
                        쪽지 보내기</button></li>
            </ul>
        </div>
    </section>
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>