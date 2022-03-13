<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/header_sub.css">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/footer.css">
  <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="../js/gnb_interaction.js"></script>
  <script type="text/javascript" src="../js/login.js"></script>
</head>
<body>
<header id="header" class="header">
    <div class="top_menu"><!-- top_menu -->
      <h2 class="blind">사용자 메뉴</h2>
        <ul>
          <li class="top_login"><a href="login.php">로그인</a></li>
          <li class="top_join_member"><a href="../join/join.php">회원가입</a></li>
          <li class="top_site_map"><a href="#">사이트맵</a></li>
        </ul>
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
  <hr class="hr1">
  <main id="content" class="content">
    <form name="login_form" action="login_ok.php" method="post" onsubmit="return form_check()">
      <fieldset>
        <legend>로그인</legend>
          <p class="login_id">
            <label for="u_id" class="u_id">ID</label>
            <input type="text" name="u_id" id="u_id">
          </p>
          <p>
            <label for="u_pwd" class="u_pwd">PW</label>
            <input type="password" name="u_pwd" id="u_pwd">
          </p>
          <p class="login_pwd">
            <button type="submit" class="login_btn">login</button>
          </p>
      </fieldset>
    </form>
  <ul class="login_search">
    <li class="search_id"><a href="#none">아이디 찾기</a></li>
    <li class="search_pwd"><a href="#none">비밀번호 찾기</a></li>
    <li class="login_join_member"><a href="#none">회원가입</a></li>
  </ul>
  <ul class="other_login">
    <li class="naver"><a href="#none">N</a></li>
    <li class="facebook"><a href="#none">f</a></li>
    <li class="kakao"><a href="#none">k</a></li>
  </ul>
</main>
<hr class="hr2">
<div class="login_bg"></div>
  <footer id="footer" class="footer"><!-- footer -->
    <div class="footer_bg"><!-- footer_bg -->
      <div class="footer_cont"><!-- footer_cont -->
        <h2 class="lotte">LOTTE WORLD</h2>
          <ul>
            <li class="add"><a href="#none">SEOUL SKY 소개</a></li>
            <li class="add"><a href="#none">개인정보처리방침</a></li>
            <li class="add"><a href="#none">이용약관</a></li>
            <li class="add"><a href="#none">영상정보처리 기기운영/관리방침</a></li>
            <li><a href="#none">사이트맵</a></li>
          </ul>
        <div class="footer_bottom"><!-- footer_bottom -->
          <address>서울특별시 송파구 올림픽로 300 롯데월드타워</address>
          <div class="footer_bottom_txt">
            <p class="repre">대표자 : 최종훈</p>
            <p>대표전화 : 1661-2000</p>
          </div>
          <p>전자우편 주소 : HAPPYLOTTEWORLD@LOTTE.NET</p>
          <p>COPYRIGHT 2017 SKY.ALL.RIGHTS RESERVED</p>
        </div><!-- //footer_bottom -->
      </div><!-- //footer_cont -->
    </div><!-- //footer_bg -->
  </footer><!-- footer -->
</body>
</html>