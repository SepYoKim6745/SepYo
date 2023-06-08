<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP 프로그래밍 입문</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/board_form_style.css">
    <script>
        function check_input() {
            if (!document.board_form.subject.value) {
                alert("제목을 입력하세요!");
                document.board_form.subject.focus();
                return;
            }
            if (!document.board_form.content.value) {
                alert("내용을 입력하세요!");
                document.board_form.content.focus();
                return;
            }
            document.board_form.submit();
        }
    </script>
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <br>
        <div id="board_box" class="container">
            <h3 id="board_title">
                게시판 > 글쓰기
            </h3>
            <hr style="border : solid 2px black;">
            <form name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
                <ul id="board_form">
                    <li>
                        <span class="col1">이름 : </span>
                        <span class="col2">
                            <?= $username ?>
                        </span>
                    </li>
                    <hr>
                    <li>
                        <div class="row">
                            <label for="subject" class="col-1 col-form-label">제 목 </label>
                            <div class="col-11">
                                <input class="form-control" name="subject" type="text">
                            </div>
                        </div>
                    </li>
                    <hr>
                    <li id="text_area">
                        <div class="row">
                            <label for="content" class="col-1 col-form-label">내용 </label>
                            <div class="col-11">
                                <textarea name="content" type="textarea" class="form-control" rows="10"></textarea>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <div class="row">
                            <label for="file-label" class="col-1 col-form-label">첨부파일</label>
                            <div class="col-10">
                                <input class="form-control" type="file" name="upfile">
                            </div>
                        </div>

                    </li>
                </ul>
                <ul class="buttons">
                    <li><button class="btn btn-warning" type="button" onclick="check_input()">완료</button></li>
                    <li><button class="btn btn-dark" type="button" onclick="location.href='board_list.php'">목록</button></li>
                </ul>
            </form>
        </div> <!-- board_box -->
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>