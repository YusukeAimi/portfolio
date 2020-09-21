$(function(){
//テキストアニメーション
$('.effect div, .effect p').css("opacity","0");
  // スクロールのファンクション
  $(window).scroll(function (){
    // それぞれのeffectに反映する
    $(".effect").each(function(){
      // effectの位置
      var Position = $(this).offset().top;
      // スクロールの量
      var scroll = $(window).scrollTop();
      // ウィンドウの高さ
      var windowHeight = $(window).height();
      // スクロールして要素が見える時(必要に応じて変更)
      if (scroll > Position - windowHeight + windowHeight/3){
        // 見えるようにする
        $("p, div",this).css("opacity","1" );
        // 追加のエフェクト(先)
        $("p",this).css({
          "プロパティ名": "プロパティの値",
          "プロパティ名": "プロパティの値"
        });
        // スクロールして要素が見えない時は以下
      } else {
        // 見えないようにする
        $("p, div",this).css("opacity","0" );
        $("p",this).css({
          // 追加のエフェクト(後)
          "プロパティ名": "プロパティの値",
          "プロパティ名": "プロパティの値"
        });
      }
    });
  });
//線をニョーン
  $("hr").css('width', '50%');
//右横トップへ戻る
var appear = false;
  var pagetop = $('#page_top');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {  //100pxスクロールしたら
      if (appear == false) {
        appear = true;
        pagetop.stop().animate({
          'right': '0px' //右から0pxの位置に
        }, 500); //0.5秒かけて現れる
      }
    } else {
      if (appear) {
        appear = false;
        pagetop.stop().animate({
          'right': '-100px' //右から-100pxの位置に
        }, 500); //0.5秒かけて隠れる
      }
    }
  });
  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 800); //0.5秒かけてトップへ戻る
    return false;
  });


});
