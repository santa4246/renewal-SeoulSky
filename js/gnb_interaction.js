/* gnb_interaction */
$(function(){
  $(".gnb > ul > li").mouseenter(function(){
    $(".gnb ul ul, .gnb_bg").stop().slideDown("fast");
  });
  $(".gnb").mouseleave(function(){
    $(".gnb ul ul, .gnb_bg").stop().slideUp("fast");
  });
});