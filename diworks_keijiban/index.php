<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charaset="UTF-8">
    <title>diworksblog掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

  <?php

mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","");
$stmt=$pdo->query('select * from diworks_keijiban');

?>

  <header>
  <div class="logo"><img src="diblog_logo.jpg" alt="sitelogo"></div>
  <ul>
    <li>トップ</li>
    <li>プロフィール</li>
    <li>D.I.Blogについて</li>
    <li>登録フォーム</li>
    <li>問い合わせ</li>
    <li>その他</li>
  </ul>
</header>

  <div class="main-container">
  <div class="left">
    <h1>プログラミングに役立つ掲示板</h1>
    <form method="post" action="insert.php">  

   <h2>入力フォーム</h2>
        <div>
          <label for="handlename">ハンドルネーム</label><br>
          <input type="text" id="handlename" size="35" name="handlename" >
        </div>

        <div>
          <label for="title">タイトル</label><br>
          <input type="text" id="title" size="35" name="title" >
        </div>

        <div>
          <label for="comments">コメント</label><br>
          <textarea name="comments" id="comments" rows="7" cols="35" value="<?php if( !empty($_POST['comments']) ){ echo $_POST['comments']; } ?>"></textarea>
        </div>

        <div>
          <input type="submit" id="submit" value="投稿する">
        </div>

    </form>

<?php

while ($row = $stmt->fetch()) {

echo "<div class='kiji'>";
  echo "<h3>" .$row['title']."</h3>"; //.は何なのか//
  echo "<div class='comments'>";
    echo $row['comments'];  
    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
  echo "</div>";
echo "</div>";

}
?>

  </div>   <!-- leftのdiv -->


  <div class="right">
    <h3>人気の記事</h3>
      <ul>
      <li>PHPおすすめ本</li>
      <li>PHP MyAdminの使い方</li>
      <li>今人気のエディタTops</li>
      <li>HTMLの基礎</li>
      </ul>

    <h3>オススメリンク</h3>
      <ul>
      <li>ディーアイワークス株式会社</li>
      <li>XAMPPのダウンロード</li>
      <li>Eclipseのダウンロード</li>
      <li>Braketsのダウンロード
      </li>
      </ul>

    <h3>カテゴリ</h3>
    <ul>
      <li>HTML</li>
      <li>PHP</li>
      <li>MySQL</li>
      <li>JavaScript</li>
    </ul>
  </div>  

  </div> <!-- //mainのdiv// -->


<footer>
  Copyright D.I.blog is the one which provides A to Z about programing
</footer>
