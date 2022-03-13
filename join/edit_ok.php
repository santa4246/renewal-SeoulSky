<meta charset="utf-8">
<?php
session_start();
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";

$pwd = $_POST["u_pwd"];
$mobile = $_POST["mobile"];
$email = $_POST["email_id"]."@".$_POST["email_dns"];
$birth = $_POST["birth"];
$postalCode = $_POST["postalCode"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];


// DB 연결
include "../dbcon.php";


// 조건처리 & 쿼리 작성
// update members set 필드명=값, 필드명=값, 필드명=값, ....
if($pwd){ // 비밀번호를 입력한 경우
    $sql = "update members set
            user_pwd='$pwd',
            user_mobile='$mobile',
            user_email='$email',
            user_birth='$birth',
            user_postalCode='$[postalCode]',
            user_addr1='$addr1',
            user_addr2='$addr2'
            where idx=$s_idx;";
} else{ // 비밀변호를 입력하지 않은 경우
    $sql = "update members set
            user_mobile='$mobile',
            user_email='$email',
            user_birth='$birth',
            user_postalCode='$postalCode',
            user_addr1='$addr1',
            user_addr2='$addr2'
            where idx=$s_idx;";
};
// echo $sql;


// 쿼리 전송
mysqli_query($dbcon, $sql); // 쿼리가 select가 아니기때문에 변수 사용 x


// DB 종료
mysqli_close($dbcon);


// 페이지 이동
echo "
  <script type=\"text/javascript\">
    alert(\"회원정보가 수정되었습니다.\");
    location.href=\"../index.php\";
  </script>
";
?>