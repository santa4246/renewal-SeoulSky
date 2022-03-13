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
  <title>About Seoul Sky</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/header_sub.css">
  <link rel="stylesheet" type="text/css" href="css/about_seoul_sky.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/gnb_interaction.js"></script>
  <script type="text/javascript" src="js/about_seoul_sky.js"></script>
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


  <main id="content" class="content"><!-- content -->
    <section class="about_s">
      <ul>
        <li class="cont_about_seoul_sky">ABOUT SEOUL SKY</li>
        <li class="cont_road">오시는 길</li>
        <li class="cont_adv">광고/제휴</li>
      </ul>
      <div class="tab_content">
        <div class="about_seoul_sky_main"><!-- about_seoul_sky -->
          <ul>
            <li class="lotte_tower_img">
              lotte tower
            </li>
            <li class="about_s_s">
              <h3>ABOUT SEOUL SKY</h3>
              <p>세계 5위, 국내 최고 높이 123층, 555m 높이의 롯데월드 타워 가장 높은곳에 위치한 서울스카이 전망대 (세계4위, 500M)는 국내에서 가장 높은 곳으로서 대한민국의 가장 찬란한 역사와 역동적인 현대문화를 함축하고 있는 수도 서울을 360도 뷰를 통해 한눈에 담을 수 있는 곳입니다.</p>
            </li>
            <li class="pride">
              <h3>PRIDE OF KOREA</h3>
              <p>500m 상공 위에서 느끼는 아찔하고 스릴넘치는 체험 시설, 한국의 자부심(Pride of Korea)을 주제로 한 다양한 전시 컨텐츠, 구름 위에서 즐기는 커피 한잔의 여유와 타워를 테마로 한 다양한 기념품이 전망대에서의 경험을 더욱 특별하게 만들어줄 것입니다.</p>
            </li>
            <li class="desc">
              낮과 밤 그리고 4계절에 따라 다양한 옷을 갈아입는 서울의 모습을 바로 이곳 서울스카이에서 확인해보세요.
            </li>
            <li class="sub_ill">
              서울스카이
            </li>
          </ul>
        </div><!-- //about_seoul_sky_main -->

        <div class="road_main"><!-- road -->
          <h2 class="road_main_map">오시는 길 지도</h2>
          <dl class="road_place">
            <dt class="by_subway">지하철</dt>
              <p class="line_2">2호선</p><dd class="by_subway_list">2호선 (잠실역 1,2번 통합 출구)</dd>
              <p class="line_8">8호선</p><dd class="by_subway_list2">8호선 (잠실역 10,11번 출구)</dd>
          </dl>
          <dl class="road_place2">
            <dt class="by_bus">버스</dt>
              <div class="bus_height">
                <p class="bus_num1">지선버스</p><dd class="by_bus_list">3217, 3313, 3314, 3315, 3317, 3411, 3414, 4319</dd>
                <p class="bus_num2">간선버스</p><dd class="by_bus_list2">1007-1, 1100, 1700, 2000, 2900, 7007, 8001</dd>
              </div>
              <p class="bus_num3">광역버스</p><dd class="by_bus_list3">301, 341, 360, 362</dd>
              <p class="bus_num4">공항버스</p><dd class="by_bus_list4">6000, 6006, 6705, 6706A</dd>
          </dl>
          <dl class="road_place3">
            <dt class="parking">주차장</dt>
              <dd class="parking_desc">전망대 당일 방문고객 주차 봉사권 지급 : 최대 4시간 4,800원 (1,200원/60분 기준)</dd>
              <dd class="parking_desc2">4시간 이후 정상 주차 요금 적용. 정상 주차요금(10 ~ 20시 : 10분당 500원, 그 외 시간 : 10분당 200원). 출차 시 영수증과 함께 주차 봉사권을 제시하여 주세요.</dd>
          </dl>
        </div><!-- //road -->

        <div class="adv_main"><!-- adv -->
          <h2 class="adv_title">광고/제휴</h2>
          <p class="adv_desc">SEOUL SKY에서는 고화질 영상 및 음향 송출이 가능한 내, 외부 미디어 광고 매체를 운영하고 있습니다.</p>

          <h3 class="adv_enter">SEOUL SKY 입구</h3>
          <p class="adv_enter_img">입구 이미지</p>
          <p class="adv_enter_desc">SEOUL SKY 입구 옆  벽면에 위치. SEOUL SKY 이용객, 쇼핑몰 유동 인구에 노출되는 매체. 55 inch 멀티비전 36기. 음향 송출 가능</p>

          <h3 class="seoulsky_in">SEOUL SKY 내부</h3>
          <div class="b1b2">
            <p class="in_b1f">지하1층 이미지</p>
            <p class="in_b2f">지하2층 이미지</p>
          </div>
          <p class="in_desc">SEOUL SKY 내부 퇴장로에 위치. B1F, B2F 각 1개소. 55 inch 멀티비전 각 16기. 음향 송출 가능</p>

          <h3 class="seoulsky_ev">SEOUL SKY E/V</h3>
          <div class="evimg">
            <p class="ev_img">E/V 이미지</p>
            <p class="ev_content">승강기 검사 합격 증명서</p>
          </div>
          <p class="ev_desc">SEOUL SKY 고객 동선 E/V 내부에 위치. B1F ~ B4F 고객 동선 E/V 2개소, 117F ~ 123F 전망층 E/V 1개소, 55 inch 멀티비전 3기. 음향 송출 불가</p>

          <h3 class="ask_adv">광고문의</h3>
          <p class="ask_desc">기업제휴 신청서 작성(행사 내용, 제안서 첨부)</p>
          <p class="ask_btn">기업제휴 문의하기</p>
        </div><!-- //adv -->
      </div><!-- tab_content -->
    </section>

    <section class="content_sight_tour">
      <h2 class="sight_tour">SIGHT TOUR</h2>
      <p class="tour_desc">최고의 높이에서 최고의 시설을 보유한 SEOUL SKY 시설을 소개해 드립니다.</p>
      <iframe width="1200" height="816" src="https://www.youtube.com/embed/_jYdR0SXaXM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="tour_video"></iframe>
    </section>
    
    <div class="logo_array">
      <h2 class="logo_txt">LOGO</h2>
      <h3 class="logo_image">LOGO image</h3>
        <dl class="naming_array">
          <dt class="naming">NAMING</dt>
            <dd class="naming_seoul">SEOUL + SKY</dd>
            <dd class="naming_desc">초고층 이미지와 서울에 위치한 전망대의 상징성 부각</dd>
        </dl>
        <dl class="bi_array">
          <dt class="bi">B.I</dt>
            <dd class="bi_uplifting">UPLIFTING</dd>
            <dd class="bi_desc">자연의 에너지, 한국 전통문양, 밝은 미래를 상징하는 3개의 원 위에 산의 기운과 같이 장엄하게 솟은 전망대의 형상화</dd>
        </dl>
      </div><!-- logo_array -->
  </main><!-- //content -->

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