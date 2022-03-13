<meta charset="utf-8">
<?php
session_start();

$u_id = $_POST["u_id"];
$u_pwd = $_POST["u_pwd"];

include "../dbcon.php";

$sql = "select idx, user_name, user_id, user_pwd from members where user_id='$u_id';";
$result = mysqli_query($dbcon, $sql);

$num = mysqli_num_rows($result);

if(!$num){
  echo "
    <script type=\"text/javascript\">
      alert(\"일치하는 아이디가 없습니다.\");
      history.back();
    </script>
  ";
  exit;
} else{
$array = mysqli_fetch_array($result);
if($u_pwd != $array["user_pwd"]){
  echo "
    <script type=\"text/javascript\">
      alert(\"비밀번호가 일치하지 않습니다.\");
      history.back();
    </script>
  ";
  exit;
};

$_SESSION["s_idx"] = $array["idx"];
$_SESSION["s_name"] = $array["user_name"];
$_SESSION["s_id"] = $array["user_id"];

mysqli_close($dbcon);

echo "
  <script type=\"text/javascript\">
    location.href=\"../index.php\";
  </script>
";
};

?>