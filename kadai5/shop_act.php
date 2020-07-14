<?php
//1. POSTデータ取得
$text   = $_POST["text"];

//2. DB接続します
require "funcs.php";
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_kadai5_table(text2)VALUES(:text2)");
$stmt->bindValue(':text', $text, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("chat.php");
}
?>