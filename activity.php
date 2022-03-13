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
  <title>activity</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/header_sub.css">
  <link rel="stylesheet" href="css/activity.css">
  <link rel="stylesheet" href="css/footer.css">
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/gnb_interaction.js"></script>
  <script type="text/javascript" src="js/activity.js"></script>
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
      <section class="activity"><!-- activity -->
      <h2>ACTIVITY</h2>
      <p class="act_desc">
        500m 상공 위에서 느끼는 아찔하고 스릴넘치는 체험 시설, 한국의 자부심(Pride of Korea)을 주제로 한 다양한 전시 컨텐츠, 구름 위에서 즐기는 커피 한잔의 여유와 타워를 테마로 한
        다양한 기념품이 전망대에서의 경험을 더울 특별하게 만들어줄 것입니다.
      </p>
      <ul class="act">
        <li class="act_attr">어트랙션</li>
        <li class="act_tour">시설소개</li>
        <li class="act_sb">스카이 브릿지</li>
      </ul>

      <div class="tab_content"><!-- tab_content -->
        <div class="attr_wrap"><!-- attr_wrap -->
          <ul class="attr_list">
            <li class="attr_list1">스카이데크</li>
            <li class="attr_list2">스카이테라스</li>
            <li class="attr_list3">스카이셔틀</li>
            <li class="attr_list4">미디어테이블</li>
            <li class="attr_list5">포토존</li>
          </ul>
          <ul class="attr_cont">
            <li class="attr_1">
              118F 스카이데크 : 기네스 월드 레코드에 '가장 높은 유리바닥 전망대'로 오른 스카이데크에서 하늘을 걷는 듯한 기분을 느껴보세요.
            </li>
            <li class="attr_2">
              120F 스카이테라스 : 486m 높이의 120층 야외테라스에서 시원한 외부 공기와 함께 상쾌하면서도 탁 트인 서울의 전망을 만끽해 보세요.
            </li>
            <li class="attr_3">
              스카이 셔틀 : 지하 1층에서 118층까지 단 1분만에 순간이동! 세계 최초로 천장과 벽체 3면에 모니터 화면이 설치되어 있어 VR을 탑승하는 듯한 몰입감을 선사합니다.
            </li>
            <li class="attr_4">
              미디어 테이블 : 전망대에서 바라본 서울의 현재 모습 뿐만 아니라 3D 환경으로 재현된 조선시대의 모습을 확인할 수 있는 디지털 컨텐츠를 제공합니다. 원하는 정보들을 간단히 스크린 터치를 통해 볼 수 있습니다.
            </li>
            <li class="attr_5">
              서울스카이에서의 특별한 기억을 사진으로 간직해 보세요. 찍는곳 : B1F, 117F, 118F, 120F 찾는곳 : 120F, B1F(퇴장로) * 인화시 별도 요금이 발생합니다.
            </li>
          </ul>
        </div><!-- attr_wrap -->
        <div class="tour_wrap"><!-- tour_wrap -->
          <ul class="tour_list">
            <li class="tour_list1">하늘비밀정원</li>
            <li class="tour_list2">스카이 맵핑쇼</li>
            <li class="tour_list3">SKY SHOW(스카이 쇼)</li>
            <li class="tour_list4">SKY PLATFORM(전시존)</li>
            <li class="tour_list5">메인전망대</li>
            <li class="tour_list6">상품점</li>
            <li class="tour_list7">카페&라운지</li>
          </ul>
          <ul class="tour_cont">
            <li class="tour_1">
              117F 하늘비밀정원 : 500M에서 만날 수 있는 하늘 위 정원을 경험해 보세요.
            </li>
            <li class="tour_2">
              121F 스카이 맵핑쇼 : 서울 도심에서 펼쳐지는 신비로운 오로라와 화려한 불꽃쇼로 여러분을 초대합니다.
            </li>
            <li class="tour_3">
              117F 스카이쇼 : 하늘 위에어 펼쳐지는 영상쇼를 볼 수 있는 곳으로서 천상으로의 황금열쇠를 받은 고객들이 롯데월드 타워를 출발해 세계 랜드마크를 돌아오는 환상적인 여행을 함께 할 수 있는 공간입니다.
            </li>
            <li class="tour_4">
              B2F SKY PLATFORM(전시존) : 지하 2층 전시공간은 세계 속의 한국을 보여주고 한국의 자부심을 상징하는 공간으로 다양한 미디어 연출을 제공하고 있습니다. 한글의 조형적 아름다움과 독창성으로 표현된 공간 안에서 다채로운 한국의 유, 무형 유산을 경험할 수 있으며, 나아가 한국적 휴식공간을 제공하고, SEOUL SKY의 건축미를 표현한 작품로 세계에 한국의 건축 기술을 자랑하고 있습니다.
            </li>
            <li class="tour_5">
              118F 스카이 시어터 : 악천후 또는 기상이 좋지 않을 경우를 대비한 컨텐츠로 맑은 날의 풍경을 타임랩스 기법을 통해 다채롭게 관람할 수 있습니다.
            </li>
            <li class="tour_6">
              B1F SEOUL SKY SHOP : 전망대의 마지막 코스, 메인 상품점에서 특별한 오늘을 기념할 상품을 구경 해보세요! SEOUL SKY에서의 아름다운 추억을 상품과 함께 하세요. 전망층에 올라가지 않더라도 전망대를 방문했던 그 날을 추억하기 위해 언제든지 들러서 상품을 구매할 수 있습니다.
            </li>
            <li class="tour_7">
              123F LOUNGE : Taste Of Seoul above the cloud 구름 위에서 잊지 못할 서울을 만나다
              - 높고 웅장한 커튼월을 통한 최고층의 전망과 함께 다양한 메뉴를 즐길 수 있는 프리미엄 라운지
              - 프로포즈 이벤트, 웨딩 피로연, 브랜드 론칭 행사 등 대관이 가능합니다. (02-3213-8019) 
            </li>
          </ul>
        </div><!-- //tour_wrap -->
        <div class="sky_br_wrap"><!-- sky_br_wrap -->
          <ul class="sb_list">
            <li class="sb_tour">스카이 브릿지 투어</li>
          </ul>
          <ul class="sb_cont">
            <li class="sky_br_1">
              스카이테라스 : 서울 하늘을 가장 가까이 즐길 수 있는 541M 높이! 스카이 브릿지를 건너며 짜릿한 추억을 만들어 보세요!
            </li>
          </ul>
        </div><!-- sky_br_wrap -->
      </div><!-- tab_content -->
    </section><!-- activity -->
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