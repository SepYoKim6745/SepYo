<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- <script type="text/javascript" src="./js/modify.js"><script> -->
  </head>
  <script>

  function check_input(){

      if(!document.member_form.pass.value){
        alert("비밀번호를 입력하세요!");
        document.member_form.pass.focus();
        return;
        
      }

      if(!document.member_form.pass_confirm.value){
        alert("비밀번호 확인을 입력하세요!");
        document.member_form.pass_confirm.focus();
        return;
      }

      if(!document.member_form.name.value){
        alert("이름을 입력하세요!");
        document.member.form.name.focus();
        return;
      }

      if(!document.member_form.email1.value){
        alert("이메일을 입력하세요!");
        document.member_form.email1.focus();
        return;
      }

      if(!document.member_form.email2.value){
        alert("이메일을 입력하세요!");
        document.member_form.email2.focus();
        return;
      }

      if(document.member_form.pass.value != document.member_form.pass_confirm.value){
        alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요!");
        document.member_form.pass.focus();
        document.member_form.pass.select();
        return;
      }

      document.member_form.submit();
  }

  function reset_form(){
    //document.member_form.id.value = "";
    document.member_form.pass.value = "";
    document.member_form.pass_confirm.value = "";
    document.member_form.name.value = "";
    document.member_form.email1.value = "";
    document.member_form.email2.value = "";
    document.member_form.id.focus();
    return;
  }
  </script>
  <body>
    <?php include "header.php";?>
    <?php
        $con = mysqli_connect("localhost", "user1", "12345", "project");
        $sql = "select * from members where id='$userid'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);

        $pass = $row["pass"];
        $name = $row["name"];

        $email = explode("@", $row["email"]);
        $email1 = $email[0];
        $email2 = $email[1];

        mysqli_close($con);
    ?>
    <br><br>    
    <div class="container">
    <h1>회원 정보 수정</h1>
    <hr>
      <div class="col-12">
        <br>
        <form name="member_form"class="needs-validation" method="post" action="member_modify.php?id=<?=$userid?>" novalidate="">
            <br>
            <!-- id -->
            <div class="col-8" style="display : inline-block;">
              <label for="id_form" class="form-label">ID : <?= $userid ?></label>
              <div class="input-group has-validation">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>
            <br>
            <br>

            <!-- password -->
            <div class="col-sm-8">
              <label for="pass_form" class="form-label">password</label>
              <input type="password" name="pass" class="form-control" id="pass_form" value="<?=$pass?>">
            </div>

            <br>
            <!-- password confirm -->
            <div class="col-sm-8">
              <label for="pass_confirm_form" class="form-label">password 확 인</label>
              <input type="password" name="pass_confirm" class="form-control" id="pass_confirm_form" placeholder="password를 확인해주세요." value="<?=$pass?>">
            </div>

            <br>
            <!-- name -->
            <div class="col-sm-8">
              <label for="name_form" class="form-label">이름</label>
              <input type="text" name="name" class="form-control" id="name_form" placeholder="이름을 입력하세요." value="<?=$name?>" required="">

              <!-- <div class="invalid-feedback">
                Valid last name is required.
              </div> -->
            </div>

            <br>

            <!-- email -->
            <div class="col-4" style="display : inline-block;">
              <label for="email_form" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control col-sm-4" id="email_form" placeholder="you@example.com" name="email1" value="<?=$email1?>">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            @
            <div class="col-sm-4" style="display : inline-block;">
              <select class="form-select" aria-label="Default select example" name="email2">
                <option value="<?=$email2?>" selected><?=$email2?></option>
                <option value="naver.com">naver.com</option>
                <option value="gmail.com">gmail.com</option>
                <option value="daum.net">daum.net</option>
                <option value="koreatech.ac.kr">koreatech.ac.kr</option>
              </select>

              <!-- <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div> -->
            </div>

            <br>

            <!-- <div class="col-12">
              <label for="address_form" class="form-label">Address</label>
              <input type="text" class="form-control" id="address_form" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <br>
            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required="">
                <option>대한민국</option>
                <option>미국</option>
                <option>중국</option>
                <option>일본</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <br>
            
            <div class="col-md-4">
              <label for="belong" class="form-label">State</label>
              <select class="form-select" id="belong" required="">
                <option>한국기술교육대학교</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div> -->
          <hr class="my-4">
        <div>
          <button class="w-5 btn btn-primary" type="submit" onclick="check_input()">저장하기</button>
          <input class="w-5 btn btn-primary" type="submit" value="취소하기">

        </div>
        </form>
      </div>
    </div>
    <?php include "footer.php";?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

