function form_check(){
  var u_id = document.getElementById("u_id");
  var u_pwd = document.getElementById("u_pwd");

  if(!u_id.value){
    alert("아이디를 입력하세요.");
    u_id.focus();
    return false;
  };
  if(!u_pwd.value){
    alert("비밀번호를 입력하세요.");
    u_pwd.focus();
    return false;
  };
  return true;
};