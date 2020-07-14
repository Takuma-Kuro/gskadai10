<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LOGIN</title>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
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
                
                <li><a href="new.php">New</a></li>
                
              </ul>
            </div>
          </li>
          
          <li><a href="#">Help</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        </div>
    </header>
<h2>Login Form</h2>
<!-- login_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
<div class="log">
Email:<input type="text" name="email" />
</div>
<div class="log2">
Pass:<input type="password" name="lpw" />
</div>
<div class="log3">
<input type="submit" value="Login" />
</div>
</form>


</body>
</html>