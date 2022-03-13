<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/header_sub.css">
  <link rel="stylesheet" href="../css/join.css">
  <link rel="stylesheet" href="../css/footer.css">
  <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="../js/gnb_interaction.js"></script>
  <script type="text/javascript" src="../js/join.js"></script>
</head>
<body>
  <header id="header" class="header">
    <div class="top_menu"><!-- top_menu -->
      <h2 class="blind">사용자 메뉴</h2>
        <ul>
          <li class="top_login"><a href="../login/login.php">로그인</a></li>
          <li class="top_join_member"><a href="join.php">회원가입</a></li>
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

  <hr class="uphr">
  <main id="content" class="content"><!-- content -->
  <h2>회원가입
    <form name="join_form" action="insert.php" method="post" onsubmit="return form_check()">
      <fieldset>
        <legend class="blind">회원가입</legend>
          <p>
            <label for="u_name" class="label_txt">이름</label>
            <input type="text" name="u_name" id="u_name">
          </p>
          <p>
            <label for="u_id" class="label_txt">아이디</label>
            <input type="text" name="u_id" id="u_id" readonly>
            <button type="button" class="btn_idcheck" onclick="search_id()">아이디 중복확인</button>
            <br>
            <span class="ex_txt">아이디는 4~12글자만 입력할 수 있습니다.</span>
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
            <input type="tel" name="mobile" id="mobile">
            <br>
            <span class="ex_txt">"-" 없이 숫자만 입력</span>
          </p>
          <p>
            <label for="email_id" class="label_txt">이메일</label>
            <input type="text" name="email_id" id="email_id"> @
            <input type="text" name="email_dns" id="email_dns">
            <select name="email_sel" id="email_sel" onchange="select_email()">
              <option value="">직접 입력</option>
              <option value="naver.com">네이버</option>
              <option value="daum.net">다음</option>
              <option value="gmail.com">구글</option>
            </select>
          </p>
          <p>
            <label for="birth" class="label_txt">생년월일</label>
            <input type="datetime" name="birth" id="birth">
            <br>
            <span class="ex_txt">ex) 20210608</span>
          </p>
          <p>
            <label for="postalCode" class="label_txt">주소</label>
            <input type="text" name="postalCode" id="postalCode" readonly>
            <button type="button" class="btn_addr" onclick="search_addr()">주소검색</button>
            <br>
            <label for="addr1" class="label_txt">기본주소</label>
            <input type="text" name="addr1" id="addr1">
            <br>
            <label for="addr2" class="label_txt">상세주소</label>
            <input type="text" name="addr2" id="addr2">
          </p>

          <p class="personal_info">
            개인정보 제공에 동의하시겠습니까?
            <input type="checkbox" value="Y" name="agree" id="agree">
            <label for="agree" class="label_txt">동의</label>
          </p>

          <p>
            <button type="submit" class="btn_submit">가입하기</button>
            <button type="button" class="btn_back" onclick="history.back()">돌아가기</button>
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