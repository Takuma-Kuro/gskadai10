<!DOCTYPE html>
    <html lang="ja">
    <!-- 最初の設定は終わっています　必要な方は触ってください -->

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>一人による一人のための旅サイト</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
    <!-- 最初の設定は終わっています　必要な方は触ってください -->

    <body> 
    <!-- この中に記述していく -->
    <!-- ここから下にコードを書く -->
    

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
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="new.php">New</a></li>
                    
                </ul>
                </div>
            </li>
            
            <li><a href="#">Help</a></li>
            </ul>
            </div>
        </header>
        <!-- /#header -->
        
        <div class="hyodai">
        ここは一人旅に使えるグッズや一人で入り易い店をみんな語らいする場
        </div>
        <form name="form1" action="tool_act.php" method="post">
        <div class="texttool">
        道具編
        <textarea name="" id="" cols="30" rows="3"></textarea>
        <input type="submit" value="Send">
        </div>
        </form>
        <form name="form1" action="shop_act.php" method="post">
        <div class="textshop">
        飲食店編
        <textarea name="" id="" cols="30" rows="3"></textarea>
        <input type="submit" value="Send">
        </div>
        </form>
    
    
    </body>

    </html>