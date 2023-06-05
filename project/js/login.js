function check_input(){
    if(!document.sign_form.id.value){
        alert("아이디를 입력하세요");
        document.sign_form.id.focus();
        return;
    }

    if(!document.sign_form.pass.value){
        alert("비밀번호를 입력하세요");
        document.sign_form.pass.focus();
        return;
    }
    document.sign_form.submit();
}