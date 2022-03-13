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
  <title>서울스카이</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/header_index.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script src="js/jquuery.bxslider.js"></script>
  <script src="js/index.js"></script>
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
  <header id="header" class="header">
    <h1><a href="index.php">SEOUL SKY</a></h1> <!-- logo -->

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
        <div class="gnb_bg"></div>
      </nav><!-- //gnb -->
  </header><!-- header -->


  <main id="content" class="content"><!-- content -->
    <div class="slider">
      <h2 class="main_news"><a href="#">주요 소식</a></h2><!-- main banner -->
      <h2 class="main_news2"><a href="#">주요 소식</a></h2>
      <h2 class="main_news3"><a href="#">주요 소식</a></h2>
      <h2 class="main_news4"><a href="#">주요 소식</a></h2>
    </div>
    <div class="short_cut_bg"><!-- short_cut_bg -->
      <section class="short_cut">
          <a href="about_seoul_sky.php">
            <dl class="info">
              <dt>이용정보 안내</dt>
              <dd>SEOUL SKY에 방문부터 이용 안내까지<br> 상세하게 알려드립니다.</dd>
            </dl>
          </a>
          <a href="reserve.php">
            <dl class="ticket">
              <dt>SEOUL SKY TICKET</dt>
              <dd>지금 바로 예매하고 서울의 최고 높이에서<br> 최상의 하늘을 만끽하세요.</dd>
            </dl>
          </a>
          <a href="content.html">
            <dl class="event">
              <dt>NEW EVENT</dt>
              <dd>다양한 이벤트 놓치지 말고<br> 두 배로 즐겨보세요.</dd>
            </dl>
          </a>
      </section><!-- //short_cut -->
    </div><!-- //short_cut_bg -->
    
    <div class="a_sky_bg">
      <section class="a_sky"><!-- About seoul sky -->

        <h2>ABOUT SEOUL SKY</h2>
          <img src="images/abt_s_sky_1.jpg" alt="롯데타워 중심의 석양">
          <img src="images/abt_s_sky_2.jpg" alt="석촌호수와 롯데타워">
          <p>
            세계 5위, 국내 최고 높이 123층, 555m 높이의 롯데월드 타워 가장 높은 곳에
            위치한 서울스카이 전망대(세계 4위, 550M)는 국내에서 가장 높은 곳으로서
            대한민국의 가장 찬란한 역사와 역동적인 현대문화를 함축하고 있는 수도
            서울을 360도 뷰를 통해 한눈에 담을 수 있는 곳입니다.
          </p>
      </section><!-- //About seoul sky -->
    </div>

    <div class="activity_bg"><!-- activity_bg -->
      <section class="activity"><!-- activity -->
        <h2>ACTIVITY</h2>
        <p class="act_desc">
          500m 상공 위에서 느끼는 아찔하고 스릴넘치는 체험 시설, 한국의 자부심(Pride of Korea)을 주제로 한 다양한 전시 컨텐츠, 구름 위에서 즐기는 커피 한잔의 여유와 타워를 테마로 한
          다양한 기념품이 전망대에서의 경험을 더울 특별하게 만들어줄 것입니다.
        </p>
        <ul>
          <li class="attr"><a href="#none">어트랙션</a></li>
          <li class="tour"><a href="#none">시설소개</a></li>
          <li class="sky_br"><a href="#none">스카이 브릿지</a></li>
        </ul>
        <div class="tab_content"><!-- tab_content -->
          <div class="attr_wrap"><!-- attr_wrap -->
            <ul class="attr_content">
              <li class="attr_1">
                <img src="images/sky_deck.jpg" alt="스카이데크" class="sky_deck" id="big_img">
                <p class="floor_118">118F</p>
                <p class="sky_deck_imp">스카이데크</p>
                <p class="sky_deck_desc">기네스 월드 레코드에 '가장 높은 유리바닥 전망대'로 오른
                스카이데크에서 하늘을 걷는 듯한 기분을 느껴보세요.</p>
              </li>
              <li class="attr_2">
                <p class="sky_terrace">스카이테라스</p>
                <p class="floor_120">120F</p>
                <p class="sky_terrace_imp">스카이테라스</p>
                <p class="sky_terrace_nor">486 높이의 120층 야외테라스에서 시원한 외부 공기와 
                함께 상쾌하면서도 탁 트인 서울의 전망을 만끽해 보세요.</p>
              </li>
              <li class="attr_3">
                <p class="sky_shuttle">스카이셔틀</p>
                <p class="sky_shuttle_imp">스카이셔틀</p>
                <p class="sky_shuttle_nor">지하 1층에서 118층까지 단 1분만에 순간이동!
                세계 최초로 천장과 벽체3면에 모니터 화면이 설치되어 있어 VR을 탑승하는 듯한 몰입감을 선사합니다.</p>
              </li>
              <li class="attr_4">
                <p class="media_table">미디어 테이블</p>
                <p class="media_table_imp">미디어 테이블</p>
                <p class="media_table_nor">전망대에서 바라본 서울의 현재 모습 뿐만 아니라 3D 환경으로 재현된 조선시대의 모습을 확인할 수 있는 디지털 컨텐츠를 제공합니다.
                원하는 정보들을 간단히 스크린 터치를 통해 볼 수 있습니다.</p>
              </li>
              <li class="attr_5">
                <p class="pic">포토존</p>
                <p class="pic_imp">서울스카이에서의 특별한 기억을 사진으로 간직해 보세요.</p>
                <p class="pic_nor">찍는곳 : B1F, 117F, 118F, 120F
                찾는곳 : 120F, B1F(퇴장로)
                * 인화시 별도 요금이 발생합니다.</p>
              </li>
            </ul>
            <ul class="attr_sub_images">
              <li><img src="images/sky_deck.jpg" alt="스카이데크 보기" class="sky_deck_sb" onclick="changeImage('images/sky_deck.jpg')"></li>
              <li><img src="images/sky_terrace.jpg" alt="스카이테라스 보기" class="sky_terr_sb" onclick="changeImage('images/sky_terrace.jpg')"></li>
              <li><img src="images/sky_shuttle.jpg" alt="스카이셔틀 보기" class="sky_ptzone_sb" onclick="changeImage('images/sky_shuttle.jpg')"></li>
              <li><img src="images/media_table.jpg" alt="미디어테이블 보기" class="sky_media_table_sb" onclick="changeImage('images/media_table.jpg')"></li>
              <li><img src="images/pic.jpg" alt="포토존 보기" class="sky_photo_sb" onclick="changeImage('images/pic.jpg')"></li>
            </ul>
          </div><!-- attr_wrap -->
          
          <div class="tour_wrap"><!-- tour_wrap -->
            <ul class="tour_content">
              <li class="tour_1">
                <img src="images/sky_garden.jpg" alt="하늘비밀정원" class="sky_garden" id="big_img_tour">
                <p class="floor_117">117F</p>
                <p class="sky_garden_imp">하늘비밀정원</p>
                <p class="sky_garden_nor">500M에서 만날 수 있는 하늘 위 정원을 경험해보세요.</p>
              </li>
              <li class="tour_2">
                <p class="sky_map">스카이 맵핑쇼</p>
                <p class="floor_121">121F</p>
                <p class="sky_map_imp">스카이 맵핑쇼</p>
                <p class="sky_map_nor">서울 도심에서 펼쳐지는 신비로운 오로라와 화려한 불꽃쇼로 여러분을 초대합니다.</p>
              </li>
              <li class="tour_3"> 
                <p class="sky_show">스카이쇼(대기실)</p>
                <p class="floor_117">117F</p>
                <p class="sky_show_imp">스카이쇼(대기실)</p>
                <p class="sky_show_nor">영상미디어관과 현실을 잇는 매개 공간으로서 천상의 세계로 가는 블랙홀 같은 공간입니다.</p>
              </li>
              <li class="tour_4">
                <p class="kor_bir">한국의탄생(대기존)</p>
                <p class="floor_B1">B1F</p>
                <p class="kor_bir_imp">한국의탄생(대기존)</p>
                <p class="kor_bir_nor">지하 1층 대기공간에서는 한국의 탄생과 성장의 역사, 한국의 자부심을 보여주는 다양한 연출들을 만나볼 수 있습니다.
                음과 양의 조화와 순환, 그리고 두 기운이 만나 상생과 번영을 이루는 과정을 그래픽적으로 승화시킨 다양한 미디어 작품들을 통해 한국의 전통미와 자부심을 느낄 수 있는 공간입니다.</p>
              </li>
              <li class="tour_5">
                <p class="sky_theater">스카이 시어터</p>
                <p class="floor_118">118F</p>
                <p class="sky_theater_imp">스카이 시어터</p>
                <p class="sky_theater_nor">악천후 또는 기상이 좋지 않을 경우를 대비한 컨텐츠로 맑은 날의 풍경을 타임랩스 기법을 통해 다채롭게 관람할 수 있습니다.</p>
              </li>
              <li class="tour_6">
                <p class="sky_shop">SEOUL SKY SHOP</p>
                <p class="floor_B1">B1F</p>
                <p class="sky_shop_imp">SEOUL SKY SHOP</p>
                <p class="sky_shop_nor">전망대의 마지막 코스, 메인 상품점에서 특별한 오늘을 기념할 상품을 구경 해보세요!
                SEOUL SKY에서의 아름다운 추억을 상품과 함께 하세요.
                전망층에 올라가지 않더라도 전망대를 방문했던 그 날을 추억하기 위해 언제든지 들러서 상품을 구매할 수 있습니다.</p>
              </li>
              <li class="tour_7">
                <p class="lounge">LOUNGE</p>
                <p class="floor_123">123F</p>
                <p class="lounge_imp">LOUNGE</p>
                <p class="lounge_nor">Taste of Seoul above the cloud 구름 위에서 잊지 못할 서울을 만나다.</p>
              </li>
            </ul>
            <ul class="tour_sub_images">
              <li><img src="images/sky_garden.jpg" alt="하늘비밀정원 보기" class="sky_garden_sb" onclick="changeImage('images/sky_garden.jpg')"></li>
              <li><img src="images/sky_map.jpg" alt="스카이 맵핑쇼 보기" class="sky_map_sb" onclick="changeImage('images/sky_map.jpg')"></li>
              <li><img src="images/sky_show.jpg" alt="스카이쇼 보기" class="sky_show_sb" onclick="changeImage('images/sky_show.jpg')"></li>
              <li><img src="images/kor_bir.jpg" alt="한국의탄생 보기" class="kor_bir_sb" onclick="changeImage('images/kor_bir.jpg')"></li>
              <li><img src="images/sky_theater.jpg" alt="스카이 시어터 보기" class="sky_theater_sb" onclick="changeImage('images/sky_theater.jpg')"></li>
              <li><img src="images/sky_shop.jpg" alt="seoul sky shop 보기" class="sky_shop_sb" onclick="changeImage('images/sky_shop.jpg')"></li>
              <li><img src="images/lounge.jpg" alt="lounge 보기" class="lounge_sb" onclick="changeImage('images/lounge.jpg')"></li>
            </ul>
          </div><!-- //tour_wrap -->
          <div class="sky_br_wrap"><!-- sky_br_wrap -->
            <ul class="sky_br_content">
              <li class="sky_br_1">
                <p class="sky_bridge_tour">스카이 브릿지 투어</p>
                <p class="sky_bridge_tour_imp">스카이 브릿지 투어</p>
                <p class="sky_bridge_tour_nor">서울 하늘을 가장 가까이 즐길 수 있는 541M 높이! 스카이 브릿지를 건너며 짜릿한 추억을 만들어 보세요!</p>
              </li>
            </ul>
          </div><!-- sky_br_wrap -->
        </div><!-- tab_content -->
        <a href="activity.php" class="detail">자세히보기</a><!-- 디자인수정해야함 -->
      </section><!-- activity -->
    </div><!-- activity_bg -->
    </ul>
    <div class="gallery_bg"><!-- gallery_bg -->
      <section class="gallery"><!-- gallery -->
        <h2>GALLERY</h2>
        <p>낮과 밤 그리고 4계절에 따라 다양한 옷을 갈아입는 서울의 모습을 바로 이곳 서울스카이에서 확인해보세요.</p>
        <ul>
          <li class="gallery_1"><img src="images/gallery_1.jpg" alt="갤러리 사진1"></li>
          <li class="gallery_2"><img src="images/gallery_2.jpg" alt="갤러리 사진2"></li>
          <li class="gallery_3"><img src="images/gallery_3.jpg" alt="갤러리 사진3"></li>
          <li class="gallery_4"><img src="images/gallery_4.jpg" alt="갤러리 사진4"></li>
        </ul>
        <a href="#none" class="more">더보기</a>
      </section><!-- //gallery -->
    </div><!-- //gallery_bg -->
  </main><!-- //main -->


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