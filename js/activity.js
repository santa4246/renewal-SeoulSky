/* activity_tab */
$(document).ready(function(){
  $(".activity>ul>li").click(function(){
    var idx = $(this).index();
    $(".tab_content div").not($(".tab_content div").eq(idx)).hide();
    $(".tab_content div").eq(idx).show();
  });
});

/* attr_tab */
$(document).ready(function(){
  $(".attr_list>li").click(function(){
    var idx = $(this).index();
    $(".attr_cont li").not($(".attr_cont li").eq(idx)).hide();
    $(".attr_cont li").eq(idx).show();
  });
});

/* tour_tab */
$(document).ready(function(){
  $(".tour_list>li").click(function(){
    var idx = $(this).index();
    $(".tour_cont li").not($(".tour_cont li").eq(idx)).hide();
    $(".tour_cont li").eq(idx).show();
  });
});

/* sky_br_tab */
$(document).ready(function(){
  $(".sb_list>li").click(function(){
    var idx = $(this).index();
    $(".sb_cont li").not($(".sb_cont li").eq(idx)).hide();
    $(".sb_cont li").eq(idx).show();
  });
});