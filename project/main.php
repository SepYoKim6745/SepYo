<?php
$con = mysqli_connect("localhost", "user1", "12345", "project");
$sql = "select * from board order by num desc limit 5";
$result = mysqli_query($con, $sql);

if (!$result)
  echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
else {
  echo "<div class='container'>";
  while ($row = mysqli_fetch_array($result)) {
    $regist_day = substr($row["regist_day"], 0, 10);
    ?>
      <div class="album bg-light col-3.8" style="display:inline-flex;">
        <div class="col-12" >
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="자리표시자: 썸네일" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">
                  <?= $row["subject"] ?>
                </text>
              </svg>

              <div class="card-body">
                <p class="card-text">
                <h4>
                  <?= $row["subject"] ?>
                </h4>
                <?= $row["name"] ?>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><?= $row["hit"]?>&nbsp; &nbsp; <i class="bi bi-eye"></i></button>
                  <small class="text-muted">
                    <?= $regist_day ?>
                  </small>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
      <?php
  }
}
?>