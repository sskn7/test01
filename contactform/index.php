<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>contactform</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>
  <h1>お問い合わせフォーム</h1>
  <div class="wrap">
    <form method="post" action="mail_confirm.php">
      <div>
        <label for="name">名前</label><br>
        <!-- input属性にvalueを追加する(form属性にvalueは使えない) -->
      <input type="text" id="name" size="35" name="name" value="<?php if (!empty($_POST['name'])) {echo $_POST['name'];} ?>">
      </div>

      <div>
        <label for="mail">メールアドレス</label><br>
      <input type="text" id="mail" size="35" name="mail" value="<?php if (!empty($_POST['mail'])) {echo $_POST['mail'];}?>"
      >
      </div>

      <div>
        <label for="dropdown">年齢</label><br>
     <select id="dropdown" name="age">
      <option value="">選択してください</option>
      <!-- JavaScript
      <script>
        for(var i= 18;i <= 65; i++) {
          document.write ("<option value="+ i +">" + i + "歳</option>");
        }
      </script>
       -->

      <!-- ①phpに書き直す -->
      <?php
        for ($i = 18; $i<= 65 ; $i++ ) {
          if (!empty($_POST['age']) && $_POST['age'] == $i) {
            // もし年齢が指定されていて、表示する年齢と同じだったら、、、
            echo "<option value='{$i}' selected> {$i} 歳</option>";
          } else {
            // それ以外は、、、
            echo "<option value='{$i}'> {$i} 歳</option>";
          }
        }

        // for ($i = 18; $i<= 65 ; $i++ ) {
        //   オプションタグのselectedを間に入れたい→入れたいところで分ける
        //   echo "<option value='{$i}'";
        //       if (!empty($_POST['age']) && $_POST['age'] == $i) {
        //     // もし年齢が指定されていて、表示する年齢と同じだったら、、、
        //           echo " selected";
        //   // } else {
        //   //   // それ以外は、、、
        //           echo "";
        //   }
        //   echo "> {$i} 歳</option>";
        // }
      ?>
     </select>
      </div>

      <div>
        <label for="comment">コメント</label><br>
      <textarea name="comments" id="comment" rows="7" cols="35"><?php if( !empty($_POST['comments']) ){ echo $_POST['comments']; } ?></textarea>
      </div>

      <div>
      <input type="submit" id="submit" value="送信する">
      </div>
      
    </form>
  </div>
</body>

</html>

