<?php
  session_start();
  $s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"]:"";
  $s_name = isset($_SESSION["s_name"])? $_SESSION["s_name"]:"";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>예약</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/header_sub.css">
  <link rel="stylesheet" href="css/reserve.css">
  <link rel="stylesheet" href="css/footer.css">
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/gnb_interaction.js"></script>
  <script type="text/javascript" src="js/reserve.js"></script>
  <?php
  if($s_id){ ?>
  <script type="text/javascript">
    function log_out(){
      var ck = confirm("로그아웃 하시겠습니까?");
      if(ck == true){
        location.href="login/logout.php";
      };
    };
  </script>
  <?php }; ?>
</head>
<body>
  <div class="sub_gnb_bg">
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

    <h1><a href="index.php">SEOUL SKY</a></h1>
    <!-- logo -->
    <nav class="gnb"><!-- gnb -->
      <h2 class="blind">주요 메뉴</h2>
          <ul>
            <li class="gnb_1"><a href="about_seoul_sky.php">소개</a>
              <ul class="intro">
                <li class="gnb_about_seoul_sky"><a href="about_seoul_sky.php">About Seoulsky</a></li>
                <li class="gnb_road"><a href="about_seoul_sky.php">오시는 길</a></li>
                <li class="gnb_adv"><a href="about_seoul_sky.php">광고, 제휴</a></li>
              </ul>
            </li>
            <li class="gnb_2"><a href="activity.php">시설안내</a>
              <ul class="faci">
                <li class="gnb_attraction"><a href="activity.php">어트랙션</a></li>
                <li class="gnb_int_tour"><a href="activity.php">시설소개</a></li>
                <li class="gnb_sky_bridge"><a href="activity.php">스카이 브릿지 투어</a></li>
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
            <li class="gnb_4"><a href="reserve.php">예매</a>
              <ul class="reservation">
                <li class="gnb_reserve"><a href="reserve.php">이용권 예매</a></li>
                <li class="gnb_my_page"><a href="reserve.php">마이 페이지</a></li>
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
  </div><!-- sub_gnb_bg -->
  
  <main><!-- main -->
    <div class="list"><!-- list -->
      <ul>
        <li class="reser">이용권 예매</li>
        <li class="my_p">마이페이지</li>
      </ul>
    </div><!-- //list -->
    
  <div class="reserve_bg"><!-- reserve_bg -->
  <div class="tab_content"><!-- tab_content -->
  <section>
    <div class="reserve_array"><!-- reserve_array -->
      <h3 class="reserve_main">이용권 예매<h3>
        <div class="first_array"><!-- first_array -->
          <a href="#">
            <dl class="contbox_1">
              <dt>입장권(간편결제)</dt>
                <dd class="payco">페이코 결제 프로모션</dd>
                <dd class="price_1">13,500 ~</dd>
            </dl>
          </a>
          
          <a href="#">
            <dl class="contbox_2">
              <dt>입장권(카드할인))</dt>
                <dd class="lotte_card">롯데카드 제휴카드</dd>
                <dd class="price_2">18,900 ~</dd>
            </dl>
          </a>

          <a href="#">
            <dl class="contbox_3">
              <dt>입장권(온라인 우대)</dt>
                <dd class="online_mobile">온라인/모바일 예약 우대</dd>
                <dd class="price_3">25,500 ~</dd>
            </dl>
          </a>

          <a href="#">
            <dl class="contbox_4">
              <dt>입장권(패키지)</dt>
                <dd class="aqua_package">아쿠아 스카이 패키지</dd>
                <dd class="price_4">39,500 ~</dd>
            </dl>
          </a>
        </div><!-- //first_array -->

        <div class="second_array">
          <a href="#">
            <dl class="contbox_5">
              <dt>입장권(스카이브릿지 투어)</dt>
                <dd>-일반</dd>
            </dl>
          </a>

          <a href="#">
            <dl class="contbox_6">
              <dt>입장권(스카이브릿지 투어)</dt>
                <dd>-스페셜</dd>
            </dl>
          </a>

          <a href="#">
            <dl class="contbox_7">
              <dt>입장권(패키지, 2인)</dt>
                <dd class="lounge_package">123라운지 프리미엄 패키지</dd>
                <dd class="price_5">500,000 ~</dd>
            </dl>
          </a>

          <a href="#">
            <dl class="contbox_8">
              <dt>입장권(패키지, 4인)</dt>
                <dd class="lounge_package2">123라운지 프리미엄 패키지</dd>
                <dd class="price_6">800,000 ~</dd>
            </dl> 
          </a>
        </div><!-- second_array -->
    </div><!-- //reserve_array -->
  </section>
  <section class="cont_mypage">
    <h2>마이페이지</h2>
  </section>
  </div><!-- tab_content -->
  </div><!-- //reserve_bg -->
  </main><!-- //main -->

    </header><!-- //header -->
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
            <div class="footer_bottom_txt"><!-- footer_bottom_txt -->
              <p class="repre">대표자 : 최종훈</p>
              <p>대표전화 : 1661-2000</p>
            </div><!-- //footer_bottom_txt -->
            <p>전자우편 주소 : HAPPYLOTTEWORLD@LOTTE.NET</p>
            <p>COPYRIGHT 2017 SKY.ALL.RIGHTS RESERVED</p>
          </div><!-- //footer_bottom -->
        </div><!-- //footer_cont -->
      </div><!-- //footer_bg -->
    </footer><!-- footer -->
  </body>
  </html>