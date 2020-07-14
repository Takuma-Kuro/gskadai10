<?php
//最初にSESSIONを開始！！ココ大事！！
session_start();

//POST値
$email = $_POST["email"];
$lpw = $_POST["lpw"];



//1.  DB接続します
include("funcs.php");
$pdo = db_conn();

//2. データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_kadai5_user_table WHERE email=:email");
$stmt->bindValue(':email',$email ,PDO::PARAM_STR);
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if($status==false){
    sql_error($stmt);
}

//4. 抽出データ数を取得
$val = $stmt->fetch();         //1レコードだけ取得する方法
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()

//5. 該当レコードがあればSESSIONに値を代入
//* if(password_verify($lpw, $val["lpw"])){
if( password_verify($lpw,$val["lpw"]) ){
  //Login成功時
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"]      = $val['name'];
  header("Location: mypage.php");
}else{
  //Login失敗時(Logout経由)
  $alart = "<script type='text/javascript'>alert('LOGIN ERROR');</script>";
  echo $alart;
  header("Location: login.php");
  
}

exit();

?>

