<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION["userid"]))
  $userid = $_SESSION["userid"];
else
  $userid = "";
if (isset($_SESSION["username"]))
  $username = $_SESSION["username"];
else
  $username = "";
if (isset($_SESSION["userlevel"]))
  $userlevel = $_SESSION["userlevel"];
else
  $userlevel = "";
if (isset($_SESSION["userpoint"]))
  $userpoint = $_SESSION["userpoint"];
else
  $userpoint = "";
?>

<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
          <use xlink:href="#bootstrap"></use>
        </svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-3 text-secondary">Home</a></li>
        <li><a href="board_list.php" class="nav-link px-3 text-white">게시판</a></li>
        <?php if ($userlevel >= 1) { ?>
          <li><a href="message_form.php" class="nav-link px-3 text-white">쪽지</a></li>
        <?php } ?>

        <li><a href="#" class="nav-link px-3 text-white">About</a></li>
      </ul>

      <?php
      if (!$userid) {
        ?>
        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2" onClick="location.href='sign_form.php'">Login</button>
          <button type="button" class="btn btn-warning" onClick="location.href='login_form.php'">Sign-up</button>
        </div>
      <?php } else {
        $logged = $username . "(" . $userid . ")님 [level:" . $userlevel . ", Point : " . $userpoint . "]";
        ?>

        <?= $logged ?>
        &nbsp;|&nbsp;
        <a href="logout.php">로그아웃</a>
        &nbsp;|&nbsp;
        <a href="member_modify_form.php">정보 수정</a>
      <?php } ?>
      <?php if ($userlevel == 1) { ?>

        &nbsp;|&nbsp;
        <a href="admin.php">관리자 모드</a>

      <?php } ?>
    </div>
  </div>
</header>