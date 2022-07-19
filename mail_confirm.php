<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">      
   <title>お問い合わせフォーム</title>
   <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <h1>お問い合わせ内容確認</h1>

    <div class="confirm">
       <p>
        お問い合わせの内容はこちらでよろしいでしょうか？<br>
        よろしければ「送信する」ボタンを押してください。
       </p>
       <p>名前<br>
        <?php echo $_POST['name']; ?>
       </p>
       <p>メールアドレス<br>
        <?php echo $_POST['mail']; ?>
       </p>
       <p>年齢<br>
        <?php echo $_POST['age']; ?>
       </p>
       <p>コメント<br>
        <?php echo $_POST['comments']; ?>
       </p>
    </div>
    <form action="index.html">
        <button type="submit" value="戻って修正する" class="button1"></button>
    </form>
    <form action="insert.php" method="post">
        <button type="submit" value="送信する" class="button2"></button>
        <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
        <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
        <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
        <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
    </form>

</body>
</html>