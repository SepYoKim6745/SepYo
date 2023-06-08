<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/message.css">
</head>

<body>
    <?php include "header.php"; ?>
    <section>
        <div id="message_box">
            <br>
            <h3 class="title container">
                <?php
                $mode = $_GET["mode"];
                $num = $_GET["num"];

                $con = mysqli_connect("localhost", "user1", "12345", "project");
                $sql = "select * from message where num='$num'";
                $result = mysqli_query($con, $sql);

                $row = mysqli_fetch_array($result);
                $send_id = $row["send_id"];
                $rv_id = $row["rv_id"];
                $regist_day = $row["regist_day"];
                $subject = $row["subject"];
                $content = $row["content"];

                $content = str_replace(" ", "&nbsp;", $content);
                $content = str_replace("\n", "<br>", $content);

                if ($mode == "send")
                    $result2 = mysqli_query($con, "select name from members where id='$rv_id'");
                else
                    $result2 = mysqli_query($con, "select name from members where id='$send_id'");

                $record = mysqli_fetch_array($result2);
                $msg_name = $record["name"];

                if ($mode == "send")
                    echo "송신 쪽지함 > 내용보기";
                else
                    echo "수신 쪽지함 > 내용보기";
                ?>
            </h3>
            <hr class="container" style="border : solid 2px black;">
            <ul id="view_content" class="container">
                <li>
                    <span class="col1"><b>제목 :</b>
                        <?= $subject ?>
                    </span>
                    <span id="post_writer" class="col2">
                        <?= $msg_name ?> |
                        <?= $regist_day ?>
                    </span>
                </li>
                <hr>
                <li>
                    <?= $content ?>
                </li>
            </ul>
            
            <ul class="buttons container">
                <hr>
                <li><button class="btn btn-dark" onclick="location.href='message_box.php?mode=rv'">수신 쪽지함</button></li>
                <li><button class="btn btn-secondary" onclick="location.href='message_box.php?mode=send'">송신 쪽지함</button></li>
                <li><button class="btn btn-warning" onclick="location.href='message_response_form.php?num=<?= $num ?>'">답변 쪽지</button></li>
                <li><button class="btn btn-danger" onclick="location.href='message_delete.php?num=<?= $num ?>&mode=<?= $mode ?>'">삭제</button>
                </li>
            </ul>
        </div> <!-- message_box -->
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>