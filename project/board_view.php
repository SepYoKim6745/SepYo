<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP 프로그래밍 입문</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/board.css">
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <br>
    <section>
        <div id="board_box" class="container">
            <h3 class="title">
                게시판 > 내용보기
            </h3>
            <hr style="border : solid 2px black;">
            <?php
            $num = $_GET["num"];
            $page = $_GET["page"];

            $con = mysqli_connect("localhost", "user1", "12345", "project");
            $sql = "select * from board where num=$num";
            $result = mysqli_query($con, $sql);

            $row = mysqli_fetch_array($result);
            $id = $row["id"];
            $name = $row["name"];
            $regist_day = $row["regist_day"];
            $subject = $row["subject"];
            $content = $row["content"];
            $file_name = $row["file_name"];
            $file_type = $row["file_type"];
            $file_copied = $row["file_copied"];
            $hit = $row["hit"];

            $content = str_replace(" ", "&nbsp;", $content);
            $content = str_replace("\n", "<br>", $content);

            $new_hit = $hit + 1;
            $sql = "update board set hit=$new_hit where num=$num";
            mysqli_query($con, $sql);
            ?>
            <ul id="view_content" class="container">
                <li>
                    <div class="col-8"><b>제목 :</b>
                        <div class="col-11" style="display : inline-block;">
                            <?= $subject ?>
                        </div>
                    </div>
                    <div class="col-3" style="float:right; text-align: right;">
                        <?= $name ?> |
                        <?= $regist_day ?>
                    </div>
                </li>
                <hr>
                <li>
                    <?php
                    if ($file_name) {
                        $real_name = $file_copied;
                        $file_path = "./data/" . $real_name;
                        $file_size = filesize($file_path);

                        echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
			       		<a href='board_download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
                    }
                    ?>
                    <?= $content ?>
                </li>
            </ul>
            <hr>
            <ul class="buttons">
                <li><button class="btn btn-dark"
                        onclick="location.href='board_list.php?page=<?= $page ?>'">목록</button></li>
                <li><button class="btn btn-success"
                        onclick="location.href='board_modify_form.php?num=<?= $num ?>&page=<?= $page ?>'">수정</button>
                </li>
                <li><button class="btn btn-danger"
                        onclick="location.href='board_delete.php?num=<?= $num ?>&page=<?= $page ?>'">삭제</button>
                </li>
                <li><button class="btn btn-warning" onclick="location.href='board_form.php'">글쓰기</button></li>
            </ul>
        </div> <!-- board_box -->
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>