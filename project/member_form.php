<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!-- 모달 -->
<div class="modal fade" id="idCheckModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">아이디 중복 체크</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cancel_modal" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe id="idCheckFrame" src="" width="100%" height="100%" frameborder="0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
      </div>
    </div>
  </div>
</div>

<!-- 스크립트 -->
<script>
  function openIdCheckModal() {
    const id = document.getElementById('id_form').value;
    const url = `member_check_id.php?id=${id}`;
    document.getElementById('idCheckFrame').src = url;
  }
</script>

<script>

  function check_input() {
    if (!document.member_form.id.value) {
      alert("아이디를 입력하세요!");
      document.member_form.id.focus();
      return;
    }

    if (!document.member_form.pass.value) {
      alert("비밀번호를 입력하세요!");
      document.member_form.pass.focus();
      return;
    }

    if (!document.member_form.pass_confirm.value) {
      alert("비밀번호 확인을 입력하세요!");
      document.member_form.pass_confirm.focus();
      return;
    }

    if (!document.member_form.name.value) {
      alert("이름을 입력하세요!");
      document.member.form.name.focus();
      return;
    }

    if (!document.member_form.email1.value) {
      alert("이메일을 입력하세요!");
      document.member_form.email1.focus();
      return;
    }

    if (!document.member_form.email2.value) {
      alert("이메일을 입력하세요!");
      document.member_form.email2.focus();
      return;
    }

    if (document.member_form.pass.value != document.member_form.pass_confirm.value) {
      alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요!");
      document.member_form.pass.focus();
      document.member_form.pass.select();
      return;
    }

    document.member_form.submit();
  }

  function reset_form() {
    document.member_form.id.value = "";
    document.member_form.pass.value = "";
    document.member_form.pass_confirm.value = "";
    document.member_form.name.value = "";
    document.member_form.email1.value = "";
    document.member_form.email2.value = "";
    document.member_form.id.focus();
    return;
  }

  function check_id() {
    // window.open("member_check_id.php?id=" + document.member_form.id_form.value, "IDcheck", "left=700, top=300, width=350, height=200, scrollbars=no, resizeable=yes");
    openIdCheckModal();
    const id = document.getElementById('id_form').value;
    const url = `member_check_id.php?id=${id}`;
    fetch(url)
      .then(response => response.text())
      .then(data => {
        $('#idCheckModal').modal('show');
      })
      .catch(error => console.log(error));

    $(document).ready(function () {
      // btn btn-secondary 클래스를 가진 버튼 클릭 시 모달 닫기
      $('.btn-secondary').click(function () {
        $('#idCheckModal').modal('hide');
      });

      $('.cancel_modal').click(function () {
        $('#idCheckModal').modal('hide');
      });
    });
  }

</script>
<?php include "header.php"; ?>
<?php include "section_login.php"; ?>
<div class="container">
  <div class="col-12">
    <form name="member_form" class="needs-validation" method="post" action="member_insert.php" novalidate="">
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
        <input type="password" name="pass_confirm" class="form-control" id="pass_confirm_form"
          placeholder="password를 확인해주세요.">
      </div>

      <br>
      <!-- name -->
      <div class="col-sm-8">
        <label for="name_form" class="form-label">이름</label>
        <input type="text" name="name" class="form-control" id="name_form" placeholder="이름을 입력하세요." value=""
          required="">

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