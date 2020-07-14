<!--ユーザー登録画面-->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
<style>div{padding: 10px;font-size:16px;}</style>
<title>新規登録</title>
</head>
<body>

<header id="header">
      <div class="cp_navi">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="mypage.php">MyPage</a></li>
          <li>
            <a href="#">Products <span class="caret"></span></a>
            <div>
              <ul>
                <li><a href="">chat</a></li>
                <li><a href="#game">game</a></li>
                <li><a href="#About">About</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="login.php">Login <span class="caret"></span></a>
            <div>
              <ul>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="new.php">New</a></li>
                
              </ul>
            </div>
          </li>
          
          <li><a href="#">Help</a></li>
        </ul>
        </div>
    </header>
<h2>Entry Form</h2>

<form name="form1" action="new_act.php" method="post">
<div class="new1">
Name:<input type="text" name="name">
</div>
<div class="new2">
Email:<input type="text" name="email">
</div>
<div class="new3">
Pass:<input type="password" name="lpw" >
</div>
<div class="new4">
Area:<input type="text" name="area" >
</div>
<input type="submit" value="Entry" >
</form>


</body>
</html>