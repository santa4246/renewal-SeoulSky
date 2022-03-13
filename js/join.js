function form_check(){
    var u_name = document.getElementById("u_name");
    var u_id = document.getElementById("u_id");
    var u_pwd = document.getElementById("u_pwd");
    var re_pwd = document.getElementById("re_pwd");
    var agree = document.getElementById("agree");

    if(!u_name.value){
      alert("이름을 입력하세요.");
      u_name.focus();
      return false;
    };

    if(!u_id.value){
      alert("아이디를 입력하세요.");
      u_id.focus();
      return false;
    };

    if(u_id.value.length < 4 || u_id.value.length > 12){
      alert("아이디는 4~12글자만 입력할 수 있습니다.");
      u_id.focus();
      return false;
    };

    if(!u_pwd.value){
      alert("비밀번호를 입력하세요.");
      u_pwd.focus();
      return false;
    };
    if(u_pwd.value.length < 4 || u_pwd.value.length > 8){
      alert("비밀번호는 4~8글자만 입력할 수 있습니다.");
      u_pwd.focus();
      return false;
    };

    if(u_pwd.value != re_pwd.value){
      alert("비밀번호를 확인해주세요.");
      re_pwd.focus();
      return false;
    };

    if(!agree.checked){
      alert("약관 동의가 필요합니다.");
      agree.focus();
      return false;
    };

    return true;
  };

  function select_email(){
    var email_dns = document.getElementById("email_dns");
    var email_sel = document.getElementById("email_sel");

    var idx = email_sel.options.selectedIndex;
    var rtn_val = email_sel.options[idx].value;

    email_dns.value = rtn_val;
  };

  function search_id(){
    window.open("search_id.php", "sid", "width=600, height=250, left=0, top=0");
  }
  
  function search_addr(){
    window.open("../join/search_addr.html","addr","width=500, height=400, left=0, top=0");
  };