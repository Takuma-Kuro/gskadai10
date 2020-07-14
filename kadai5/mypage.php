<?php
// セッションスタート
session_start();

require "funcs.php";
loginCheck();


$pdo = db_conn();



$sql = "SELECT * FROM gs_kadai5_user_table WHERE id = $id";
$pdo->query($sql);
foreach ($stmt as $row) {
$row['name']; 
}
$_SESSION["NAME"] = $row['name'];
$view = $_SESSION["name2"]
?> 








<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MYPAGE</title>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Head[Start] -->
<header id="header">
      <div class="cp_navi">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="mypage.php">MyPage</a></li>
          <li>
            <a href="#">Products <span class="caret"></span></a>
            <div>
              <ul>
                <li><a href="chat.php">chat</a></li>
                <li><a href="game.php">game</a></li>
                <li><a href="about.php">About</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="login.php">Login <span class="caret"></span></a>
            <div>
              <ul>
                
                <li><a href="new.php">New</a></li>
                
              </ul>
            </div>
          </li>
          
          <li><a href="help.php">Help</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        </div>
    </header>
<!-- Head[End] -->

<!-- Main[Start] -->
<h2>Welcome!!<?=$view?></h2>


<!-- <form method="POST" action="insert.php" enctype="multipart/form-data" name="form1">
  <div class="jumbotron">
  <fieldset>
    <legend>投稿</legend>

    <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
    <label><input name="file_upload" type="file" name="image"></label>
    <input type="submit" value="送信">
    </fieldset>
  </div>
</form> -->
<!-- Main[End] -->
<!-- <script>

</script> -->

</body>
</html>
