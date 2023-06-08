<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
        if (!document.message_form.content.value) {
            alert("내용을 입력하세요!");
            document.message_form.content.focus();
            return;
        }
        document.message_form.submit();
    }
</script>

<body>
    <?php include "header.php"; ?>
    <div class="container">
        <form name="message_form" method="post" action="message_insert.php?send_id=<?= $userid ?>">
            <br>
            <div class="container">
                <h1 class="h3 mb-3 fw-normal" style="display:inline-block;">쪽지 보내기</h1>
                <ul class="top_buttons" style="float : right">
                    <li><span><a href="message_box.php?mode=rv">수신 쪽지함</a></span></li>
                    <li><span><a href="message_box.php?mode=send">송신 쪽지함</a></span></li>
                </ul>
            </div>
            <hr style="border : solid 2px black;">
            <ul>
                <li>
                    <!-- send id input -->
                    <div class="form-floating">
                        <span class="col1">보내는 사람 : </span>
                        <span class="col2">
                            <?= $userid ?>
                        </span>
                    </div>
                </li>
                <br>
                <li>
                    <!-- rv id input -->
                    <div class="form-floating">
                        <div class="row">
                            <label for="rv_id" class="col-1 col-form-label">수신 ID</label>
                            <div class="col-11">
                                <input name="rv_id" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </li>
                <br>
                <li>
                    <!-- subject input -->
                    <div class="form-floating">
                        <div class="row">
                            <label for="subject" class="col-1 col-form-label">제목 </label>
                            <div class="col-11">
                                <input name="subject" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                </li>
                <br>
                <li>
                    <!-- content input -->
                    <div class="form-floating">
                        <div class="row">
                            <label for="content" class="col-1 col-form-label">내용 </label>
                            <div class="col-11">
                                <textarea name="content" type="textarea" class="form-control" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="container" style="text-align : right">
                <button class="w-5 btn btn-warning" type="button" onclick="check_input()">보내기</button>
            </div>
        </form>
    </div>
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