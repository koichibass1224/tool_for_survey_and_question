<?php
//1. POSTデータ取得
$a1 = $_POST["a1"];
$a2 = $_POST["a2"];
$a3 = $_POST["a3"];
$a4 = $_POST["a4"];


//2. DB接続します
require "functions.php";
$pdo = connectDB();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO question_table(id,a1,a2,a3,a4,indate)VALUES(NULL,:a1,:a2,:a3,:a4,sysdate())");
//:a2→バインド変数
$stmt->bindValue(':a1', $a1, PDO::PARAM_STR);  
$stmt->bindValue(':a2', $a2, PDO::PARAM_STR); 
$stmt->bindValue(':a3', $a3, PDO::PARAM_STR); 
$stmt->bindValue(':a4', $a4, PDO::PARAM_STR); 
$status = $stmt->execute();
//execute：実行

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMassage:".$error[2]);
}else{

  //５．index.phpへリダイレクト
  header("Location: index.php");
}
?>
