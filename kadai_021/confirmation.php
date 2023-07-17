<!DOCTYPE html>
<html lang="ja">
  <head>  
    <meta charset='utf-8'>
    <title>php課題021</title>
  </head>

  <body>
   <h2>入力内容の確認</h2>
   <p><?php echo 'お名前 : ' . $_POST['user_name']; ?></p>
   <p><?php echo '性別 : ' . $_POST['user_gender']; ?></p>
   <p><?php echo 'メールアドレス : ' . $_POST['user_email']; ?></p>
  </body>
</html>
