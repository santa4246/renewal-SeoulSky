<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>아이디 중복확인</title>
  <link rel="stylesheet" href="../css/reset.css">
  <style type="text/css">
    form{
      margin:50px
    }
    legend{
      font-weight:normal;
      font-size:20px;
      margin-bottom:20px
    }
    input{
      width: 250px;
      border: none;
      border-bottom: 1px solid #969696;
      font-size: 18px;
      outline: none;
      margin-left:20px;
    }
    fieldset{
      border:0px
    }
    p{
      font-weight:normal;
      font-size:25px
    }
    button{
      cursor:pointer
    }
    .btn_search_id{
      width: 60px;
      height: 30px;
      border: 1px solid #969696;
      border-radius: 5px;
      background-color: #fbfbfb;
      font-size: 13px;
    }
    .btn_search_id:hover{
      background-color:#969696;
    }

  </style>
  <script text/javascript>
    function form_check(){
      var u_id = document.getElementById("u_id");
      if(u_id.value.length < 4 || u_id.value.length > 12){
        alert("아이디는 4~12글자만 입력할 수 있습니다.");
        u_id.focus();
        return false;
      };
    };
  </script>
</head>
<body>
  <form name="search_id_form" action="search_id_result.php" method="post">
    <fieldset>
      <legend>아이디를 입력하세요.</legend>  
      <p>
        <label for="u_id">ID</label>
        <input type="text" name="u_id" id="u_id">
        <button type="submit" class="btn_search_id" onclick="form_check()">검색</button>
      </p>
    </fieldset>
  </form>
</body>
</html>