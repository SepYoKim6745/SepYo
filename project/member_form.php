<?php

  session_start();
  $_SESSION['duplication'] = "false";

?>

<script>

  function check_input(){
      if(!document.member_form.id.value){
        alert("아이디를 입력하세요!");
        document.member_form.id.focus();
        return;
      }

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
    document.member_form.id.value = "";
    document.member_form.pass.value = "";
    document.member_form.pass_confirm.value = "";
    document.member_form.name.value = "";
    document.member_form.email1.value = "";
    document.member_form.email2.value = "";
    document.member_form.id.focus();
    return;
  }

  function check_id(){
    window.open("member_check_id.php?id=" + document.member_form.id_form.value, "IDcheck", "left=700, top=300, width=350, height=200, scrollbars=no, resizeable=yes");
  }
</script>
<div class="container">
      <div class="col-12">
        <br>
        <h4 class="mb-3">회원 정보 입력</h4>
        <form name="member_form"class="needs-validation" method="post" action="member_insert.php" novalidate="">
            <br>
            <!-- id -->
            <div class="col-8" style="display : inline-block;">
              <label for="id_form" class="form-label">Username</label>
              <div class="input-group has-validation">
                <input type="text" name="id" class="form-control" id="id_form" placeholder="id를 입력하세요." required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>
            <!-- 중복체크 btn -->
            <input class="btn btn-primary" type="button" id="check_id_btn" onclick="check_id();" value="중복확인" />

            <br>
            <br>

            <!-- password -->
            <div class="col-sm-8">
              <label for="pass_form" class="form-label">password</label>
              <input type="password" name="pass" class="form-control" id="pass_form" placeholder="password를 입력해주세요.">
            </div>

            <br>
            <!-- password confirm -->
            <div class="col-sm-8">
              <label for="pass_confirm_form" class="form-label">password 확 인</label>
              <input type="password" name="pass_confirm" class="form-control" id="pass_confirm_form" placeholder="password를 확인해주세요.">
            </div>

            <br>
            <!-- name -->
            <div class="col-sm-8">
              <label for="name_form" class="form-label">이름</label>
              <input type="text" name="name" class="form-control" id="name_form" placeholder="이름을 입력하세요." value="" required="">

              <!-- <div class="invalid-feedback">
                Valid last name is required.
              </div> -->
            </div>

            <br>

            <!-- email -->
            <div class="col-4" style="display : inline-block;">
              <label for="email_form" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control col-sm-4" id="email_form" placeholder="you@example.com" name="email1">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            @
            <div class="col-sm-4" style="display : inline-block;">
              <select class="form-select" aria-label="Default select example" name="email2">
                <option value="" selected>선택하세요</option>
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

          <button class="w-20 btn btn-primary btn-lg" type="submit">회원가입 하기</button>
        </form>
      </div>
    </div>