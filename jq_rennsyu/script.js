// jQuery (function() {

// })
// //HTML と CSS を読み込んで jQuery を読み込む

// $("h1").css("color","red");
// //<h1>のフォントの色を赤にする

// $("body").css("color","gray");
// //<body>内のフォントの色を灰色にする

// $(function() {
//   $("h2").text("おやすみ");
// });
//h2タグのテキストをおやすみに変更する

//イベントとは
//「・・・をした時」に「○○の処理をする」

$(function(){
  $("h1").click(function(){
    $("p").fadeOut();
  });
});
//h1内のフォントをクリックするとｐタグ内のフォントがフェードアウトしていく

$(function(){
  $(".total").click(function(){
    $("p").text("20");
  });
});
//.totalタグをクリックしたとき、ｐタグのテキストを２０に変更する

//ホバーイベント
// $(function(){
//   $("p").hover(
//     function(){
//       $("img").fadeIn();
//     },
//     function(){
//       $("img").fadeOut();
//     });
// });
//ｐをホバーしたら、フェードインさせて、ホバーを外したらフェードアウトさせる

$(function(){
  $("img").hover(
    function(){
      $(this).animate({width:"220px"});
    },
    function(){
      $(this).animate({width:"200px"});
    });
});