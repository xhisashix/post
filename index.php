<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>会員登録</title>
</head>
<body>
  <h1>会員登録画面</h1>
  <div class="form">
    <form action="conf.php" method="post">
      <input type="text" name="name" placeholder="名前">
      <input type="text" name="mail" placeholder="メールアドレス">
      <input type="password" name="pass" placeholder="パスワード">
      <input type="text" name="address" placeholder="住所">
      <select name="job" id="">
        <option value=""></option>
        <option value="会社員">会社員</option>
        <option value="専業主婦">専業主婦</option>
        <option value="学生">学生</option>
        <option value="その他">その他</option>
      </select>
      <div class="radio">
        <label for=""><input type="radio" name="gender">男性</label>
        <label for=""><input type="radio" name="gender">女性</label>
      </div>
      <button>確認</button>
    </form>
  </div>
</body>
</html>
