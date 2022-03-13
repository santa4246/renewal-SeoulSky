/* main_banner */
$(document).ready(function(){
  $('.slider').bxSlider({
    auto:true,
    speed:500,
    pause:4000,
    mode:'fade'
  });
});

/* gnb_interaction */
$(function(){
  $(".gnb > ul > li").mouseenter(function(){
    $(".gnb ul ul, .gnb_bg").stop().slideDown("fast");
  });
  $(".gnb").mouseleave(function(){
    $(".gnb ul ul, .gnb_bg").stop().slideUp("fast");
  });
});

/* activity_tab */
$(document).ready(function(){
  $(".activity>ul>li").click(function(){
    var idx = $(this).index();
    $(".tab_content div").not($(".tab_content div").eq(idx)).hide();
    $(".tab_content div").eq(idx).show();
  });
});

/* activity_img_change */
function changeImage(img_src){
  var big_img = document.getElementById("big_img");
  big_img.src = img_src;
};

$(document).ready(function(){
  $(".attr_sub_images>li").click(function(){
    var idx = $(this).index();
    $(".attr_content>li").not($(".attr_content>li").eq(idx)).hide();
    $(".attr_content>li").eq(idx).show();
  });
});

$(document).ready(function(){
  $(".tour_sub_images>li").click(function(){
    var idx = $(this).index();
    $(".tour_content>li").not($(".tour_content>li").eq(idx)).hide();
    $(".tour_content>li").eq(idx).show();
  });
});

/* gallery */
$(document).ready(function(){
  $(".gallery img").hover(function(){
      $(this).animate({width:235, height:270, left:-10, top:-10});
  }, function(){
      $(this).animate({width:216, height:251, left:0, top:0});
  });
});