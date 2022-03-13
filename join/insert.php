<meta charset="utf-8">
<?php
$u_name = $_POST["u_name"]; //u_name은 input 태그의 name값
$u_id = $_POST["u_id"];
$u_pwd = $_POST["u_pwd"];
$re_pwd = $_POST["re_pwd"];
$mobile = $_POST["mobile"];
$email = $_POST["email_id"]."@".$_POST["email_dns"];
$birth = $_POST["birth"];
$postalCode = $_POST["postalCode"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$agree = $_POST["agree"];
$reg_date = date("Y-m-d H:i");

include "../dbcon.php";
$sql = "insert into members(user_name, user_id, user_pwd, user_mobile, user_email, user_birth, user_postalCode, user_addr1, user_addr2, reg_date) values('$u_name', '$u_id', '$u_pwd', '$mobile', '$email', '$birth', '$postalCode', '$addr1', '$addr2', '$reg_date');";
mysqli_query($dbcon, $sql);
echo "
  <script type=\"text/javascript\">
  alert(\"가입이 완료되었습니다.\");
  location.href=\"../index.php\";
  </script>
";
?>