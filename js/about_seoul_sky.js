$(document).ready(function(){
  $(".cont_about_seoul_sky").click(function(){
  $(".about_seoul_sky_main").show();
  $(".road_main").hide();
  $(".adv_main").hide();

  var h = $(".about_seoul_sky_main").height();
  // var h = $("첫번째 내용박스").height()+여백; // 필요하면 여백값
  $(".tab_content").height(h);
  // $("탭 콘텐트 전체박스").height(h)+필요하면 여백값;
  });

  $(".cont_road").click(function(){
  $(".about_seoul_sky_main").hide();
  $(".road_main").show();
  $(".adv_main").hide();

  var h = $(".road_main").height();
  // var h = $("첫번째 내용박스").height()+여백; // 필요하면 여백값
  $(".tab_content").height(h);
  // $("탭 콘텐트 전체박스").height(h)+필요하면 여백값;
  });

  $(".cont_adv").click(function(){
  $(".about_seoul_sky_main").hide();
  $(".road_main").hide();
  $(".adv_main").show();

  var h = $(".adv_main").height();
  // var h = $("첫번째 내용박스").height()+여백; // 필요하면 여백값
  $(".tab_content").height(h);
  // $("탭 콘텐트 전체박스").height(h)+필요하면 여백값;
  });
});