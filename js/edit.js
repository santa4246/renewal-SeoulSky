function form_check(){
      var u_pwd = document.getElementById("u_pwd");
      var re_pwd = document.getElementById("re_pwd");
        if(u_pwd.value && u_pwd.value.length < 4 || u_pwd.value.length > 8){
          alert("비밀번호는 4~8글자만 입력할 수 있습니다.");
          u_pwd.focus();
          return false;
        };

      if(u_pwd.value != re_pwd.value){
        alert("비밀번호를 확인해주세요.");
        re_pwd.focus();
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
    
    function search_addr(){
      window.open("member.html","addr","width=500, height=400, left=0, top=0");
    };

    function del_mem(){
      var ck = confirm("정말 탈퇴하시겠습니까?\n탈퇴한 아이디는 다시 사용하실 수 없습니다.");
      if(ck){
        location.href="delete.php";
      };
    };