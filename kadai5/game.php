    <!DOCTYPE html>
    <html lang="ja">
    <!-- 最初の設定は終わっています　必要な方は触ってください -->

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>一人による一人のための旅サイト</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src='js/main.js'></script>
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
            
            <li><a href="help.php">Help</a></li>
            </ul>
            </div>
        </header>
        <!-- /#header -->
        
        <h2>
        勝手に目的地を選んでくれます
        </h2>
        <div class="kokunai1">
        国内編
        </div>
        <div class="kokunai2">
            <input type="button" value="Click!!">
        </div>
        
        <div class="kokugai1">
        海外編
        </div>
        <div class="kokugai2">
            <input type="button" value="Click!!">
        </div>
        <div class="kokugai3">&nbsp</div>
        あなたの行くのはここだ！！
        <div class="kokunai3">&nbsp</div>
        <div class="">
        航空券はコチラから
        <a href="https://www.skyscanner.jp/">skyscanner</a>
        </div>
    
    </body>

    </html>