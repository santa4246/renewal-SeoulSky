<?php
session_start();
$s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"]:"";
$s_name = isset($_SESSION["s_name"])? $_SESSION["s_name"]:"";
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";
include "../dbcon.php";
$sql = "select * from members where idx=$s_idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
mysqli_close($dbcon);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원정보수정</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/header_sub.css">
  <link rel="stylesheet" href="../css/join.css">
  <link rel="stylesheet" href="../css/footer.css">
  <script src="../js/edit.js"></script>
</head>
<body>
<header id="header" class="header">
  <div class="top_menu"><!-- top_menu -->
    <h2 class="blind">사용자 메뉴</h2>
    <?php
    if(!$s_id){
    ?>
      <ul>
        <li class="top_login"><a href="login/login.php">로그인</a></li>
        <li class="top_join_member"><a href="join/join.php">회원가입</a></li>
        <li class="top_site_map"><a href="#">사이트맵</a></li>
      </ul>
    <?php
    } else{
    ?>
      <ul>
        <li class="top_logout"><a href="#" title="로그아웃" onclick="log_out()">로그아웃</a></li>
        <li class="top_edit"><a href="join/edit.php">회원정보수정</a></li>
        <li class="top_site_map"><a href="#">사이트맵</a></li>
      </ul>
    <?php
    };
    ?>
  </div><!-- //top_menu -->

    <h1><a href="../index.php">SEOUL SKY</a></h1>
    <!-- logo -->
    <nav class="gnb"><!-- gnb -->
      <h2 class="blind">주요 메뉴</h2>
          <ul>
            <li class="gnb_1"><a href="../about_seoul_sky.php">소개</a>
              <ul class="intro">
                <li class="gnb_about_seoul_sky"><a href="../about_seoul_sky.php">About Seoulsky</a></li>
                <li class="gnb_road"><a href="../about_seoul_sky.php">오시는 길</a></li>
                <li class="gnb_adv"><a href="../about_seoul_sky.php">광고, 제휴</a></li>
              </ul>
            </li>
            <li class="gnb_2"><a href="../activity.php">시설안내</a>
              <ul class="faci">
                <li class="gnb_attraction"><a href="../activity.php">어트랙션</a></li>
                <li class="gnb_int_tour"><a href="../activity.php">시설소개</a></li>
                <li class="gnb_sky_bridge"><a href="../activity.php">스카이 브릿지 투어</a></li>
              </ul>
            </li>
            <li class="gnb_3"><a href="#">관람안내</a>
              <ul class="exhibition">
                <li class="gnb_use"><a href="#">이용 안내</a></li>
                <li class="gnb_events"><a href="#">이벤트</a></li>
                <li class="gnb_prefer"><a href="#">우대혜택</a></li>
                <li class="gnb_group"><a href="#">단체/기업</a></li>
              </ul>
            </li>
            <li class="gnb_4"><a href="../reserve.php">예매</a>
              <ul class="reservation">
                <li class="gnb_reserve"><a href="../reserve.php">이용권 예매</a></li>
                <li class="gnb_my_page"><a href="../reserve.php">마이 페이지</a></li>
              </ul>
            </li>
            <li class="gnb_5"><a href="#">고객센터</a>
              <ul class="customer_service">
                <li class="gnb_notice"><a href="#">공지사항</a></li>
                <li class="gnb_faq"><a href="#">FAQ</a></li>
                <li class="gnb_customer"><a href="#">고객의 소리함</a></li>
              </ul>
            </li>
          </ul>
        <div class="gnb_bg"></div><!-- gnb_bg -->
      </nav><!-- //gnb -->
    </header><!-- //header -->

  <hr class="uphr">
  <main id="content" class="content"><!-- content -->
    <form name="edit_form" action="edit_ok.php" method="post" onsubmit="return form_check()">
      <fieldset>
        <legend>회원정보 수정</legend>
          <p>
            <label for="u_name" class="label_txt">이름</label>
            <?php echo $array["user_name"]; ?>
          </p>
          <p>
            <label for="u_id" class="label_txt">아이디</label>
            <?= $array["user_id"]; ?>
          </p>
          <p>
            <label for="u_pwd" class="label_txt">비밀번호</label>
            <input type="password" name="u_pwd" id="u_pwd">
            <br>
            <span class="ex_txt">비밀번호는 4~8글자만 입력할 수 있습니다.</span>
          </p>
          <p>
            <label for="re_pwd" class="label_txt">비밀번호 확인</label>
            <input type="password" name="re_pwd" id="re_pwd">
          </p>
          <p>
            <label for="mobile" class="label_txt">전화번호</label>
            <input type="tel" name="mobile" id="mobile" class="mobile" value="<?php echo $array["user_mobile"]; ?>">
            <br>
            <span class="ex_txt">"-" 없이 숫자만 입력</span>
          </p>
          <?php
            $email = $array["user_email"];
            $email = explode("@", $email); // @로 구분해서 첫번째는0 두번째는1...
          ?>
          <p>
            <label for="email_id" class="label_txt">이메일</label>
            <input type="text" name="email_id" id="email_id" class="email_id" value="<?php echo $email[0]; ?>"> @
            <input type="text" name="email_dns" id="email_dns" class="email_dns" value="<?php echo $email[1]; ?>">
            <select name="email_sel" id="email_sel" class="email_sel" onchange="select_email()">
              <option value="">직접 입력</option>
              <option value="naver.com">네이버</option>
              <option value="daum.net">다음</option>
              <option value="gmail.com">구글</option>
            </select>
          </p>

          <?php
            $birth = $array["user_birth"];
            $birth = str_replace("-", "", $birth);
          ?>

          <p>
            <label for="birth" class="label_txt">생년월일</label>
            <input type="datetime" name="birth" id="birth" class="birth" value="<?php echo $array["user_birth"]; ?>">
            <br>
            <span class="ex_txt">ex) 20210608</span>
          </p>
          <p>
            <label for="postalCode" class="label_txt">주소</label>
            <input type="text" name="postalCode" id="postalCode" class="postal_code" value="<?php echo $array["user_postalCode"]; ?>" readonly>
            <button type="button" class="btn_addr" onclick="search_addr()">주소검색</button>
            <br>
            <label for="addr1" class="label_txt">기본주소</label>
            <input type="text" name="addr1" id="addr1" class="addr1" value="<?php echo $array["user_addr1"]; ?>" readonly>
            <br>
            <label for="addr2" class="label_txt">상세주소</label>
            <input type="text" name="addr2" id="addr2" class="addr2" value="<?php echo $array["user_addr2"]; ?>">
          </p>

          <p>
            <button type="button" class="btn_back" onclick="history.back()">돌아가기</button>
            <button type="submit" class="btn_submit">정보수정</button>
            <button type="button" class="btn_back" onclick="del_mem()">회원탈퇴</button>
          </p>
      </fieldset>
    </form>
  </main>
  <hr class="downhr">

  <footer id="footer" class="footer"><!-- footer -->
    <div class="footer_bg">
      <div class="footer_cont">
          <ul>
            <li class="add"><a href="#none">SEOUL SKY 소개</a></li>
            <li class="add"><a href="#none">개인정보처리방침</a></li>
            <li class="add"><a href="#none">이용약관</a></li>
            <li class="add"><a href="#none">영상정보처리 기기운영/관리방침</a></li>
            <li><a href="#none">사이트맵</a></li>
          </ul>
        <div class="footer_bottom">
          <address>서울특별시 송파구 올림픽로 300 롯데월드타워</address>
          <div class="footer_bottom_txt">
            <p class="repre">대표자 : 최종훈</p>
            <p>대표전화 : 1661-2000</p>
          </div>
          <p>전자우편 주소 : HAPPYLOTTEWORLD@LOTTE.NET</p>
          <p>COPYRIGHT 2017 SKY.ALL.RIGHTS RESERVED</p>
        </div>
      </div>
    </div>
  </footer><!-- footer -->
</body>
</html>