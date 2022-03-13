$(document).ready(function(){
  $(".list>ul>li").click(function(){
    var idx = $(this).index();
    $(".tab_content section").not($(".tab_content section").eq(idx)).hide();
    $(".tab_content section").eq(idx).show();
  });
});