/* main_banner */
$(document).ready(function(){
  $('.slider').bxSlider();
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
/* 수정해야함 여기까지만햇음 */


$('.multiple_slider').bxSlider();