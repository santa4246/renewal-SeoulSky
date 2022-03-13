<?php
  $u_id = $_POST["u_id"];
  include "../dbcon.php";
  $sql = "select user_id from members where user_id='$u_id';";
  $result = mysqli_query($dbcon, $sql);
  $num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>"<?php echo $u_id;?>" 검색결과</title>
  <style type="text/css">
    body{
      margin:20px;
      font-size:20px
    }
    .no_use{font-weight:bold;color:blue}
    .use{font-weight:bold;color:red}
    a{text-decoration: none;color: #000;}
    .btn_research{
      width: 60px;
      height: 30px;
      border: 1px solid #969696;
      border-radius: 5px;
      background-color: #fbfbfb;
      font-size: 13px;
      margin-left:180px
    }
    .btn_use{
      width: 60px;
      height: 30px;
      border: 1px solid #969696;
      border-radius: 5px;
      background-color: #fbfbfb;
      font-size: 13px;
      margin-left:10px
    }
    .btn_close{
      width: 60px;
      height: 30px;
      border: 1px solid #969696;
      border-radius: 5px;
      background-color: #fbfbfb;
      font-size: 13px;
    }
  </style>

  <?php if(!$num){ ?>
  <script type="text/javascript">
    function return_val(){
      opener.document.getElementById("u_id").value="<?php echo $u_id;?>";
      window.close();
    };
  </script>
  <?php }; ?>

</head>
<body>
<?php if(!$num){ ?>
  <p><span class="sch_id">"<?php echo $u_id;?>"</span>는 사용할 수 <span class="no_use">있는</span> 아이디입니다.</p>
  <p>
    <a href="#" class="btn_research" onclick="history.back()">다시 검색</a>
    <a href="#" class="btn_use" onclick="return_val()">사용하기</a>
  </p>
<?php } else{ ?>
  <p><span class="sch_id">"<?php echo $u_id;?>"</span>는 사용할 수 <span class="use">없는</span> 아이디입니다.</p>
  <p>
    <a href="#" class="btn_research" onclick="history.back()">다시 검색</a>
    <a href="#" class="btn_close" onclick="window.close()">닫기</a>
  </p>
<?php }; ?>
</body>
</html>