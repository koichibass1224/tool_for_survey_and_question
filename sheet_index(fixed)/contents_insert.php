<?php

//1. POSTデータ取得
$ad0_1 = $_POST["ad0_1"];
$ad0_2 = $_POST["ad0_2"];

$ad1_1 = $_POST["ad1_1"];
$ad1_2 = $_POST["ad1_2"];
$ad1_3 = $_POST["ad1_3"];
$ad1_4 = $_POST["ad1_4"];

$ad2_1 = $_POST["ad2_1"];
$ad2_2 = $_POST["ad2_2"];
$ad2_3 = $_POST["ad2_3"];
$ad2_4 = $_POST["ad2_4"];

$ad3_1 = $_POST["ad3_1"];
$ad3_2 = $_POST["ad3_2"];
$ad3_3 = $_POST["ad3_3"];
$ad3_4 = $_POST["ad3_4"];

$ad4_1 = $_POST["ad4_1"];
$ad4_2 = $_POST["ad4_2"];
$ad4_3 = $_POST["ad4_3"];
$ad4_4 = $_POST["ad4_4"];

$ad5_1 = $_POST["ad5_1"];
$ad6_1 = $_POST["ad6_1"];

//2. DB接続
require "functions.php";
$pdo = connectDB();

//３．データ登録SQL作成 
$stmt = $pdo->prepare("INSERT INTO question_main_table(id,
ad0_1,
ad0_2,

ad1_1,
ad1_2,
ad1_3,
ad1_4,

ad2_1,
ad2_2,
ad2_3,
ad2_4,

ad3_1,
ad3_2,
ad3_3,
ad3_4,

ad4_1,
ad4_2,
ad4_3,
ad4_4,

ad5_1,
ad6_1,

indate)VALUES(NULL,
:ad0_1,
:ad0_2,

:ad1_1,
:ad1_2,
:ad1_3,
:ad1_4,

:ad2_1,
:ad2_2,
:ad2_3,
:ad2_4,

:ad3_1,
:ad3_2,
:ad3_3,
:ad3_4,

:ad4_1,
:ad4_2,
:ad4_3,
:ad4_4,

:ad5_1,
:ad6_1,

sysdate())");
$stmt->bindValue(':ad0_1', $ad0_1, PDO::PARAM_STR);
$stmt->bindValue(':ad0_2', $ad0_2, PDO::PARAM_STR);

$stmt->bindValue(':ad1_1', $ad1_1, PDO::PARAM_STR); 
$stmt->bindValue(':ad1_2', $ad1_2, PDO::PARAM_STR); 
$stmt->bindValue(':ad1_3', $ad1_3, PDO::PARAM_STR); 
$stmt->bindValue(':ad1_4', $ad1_4, PDO::PARAM_STR); 

$stmt->bindValue(':ad2_1', $ad2_1, PDO::PARAM_STR); 
$stmt->bindValue(':ad2_2', $ad2_2, PDO::PARAM_STR); 
$stmt->bindValue(':ad2_3', $ad2_3, PDO::PARAM_STR); 
$stmt->bindValue(':ad2_4', $ad2_4, PDO::PARAM_STR); 

$stmt->bindValue(':ad3_1', $ad3_1, PDO::PARAM_STR); 
$stmt->bindValue(':ad3_2', $ad3_2, PDO::PARAM_STR); 
$stmt->bindValue(':ad3_3', $ad3_3, PDO::PARAM_STR); 
$stmt->bindValue(':ad3_4', $ad3_4, PDO::PARAM_STR); 

$stmt->bindValue(':ad4_1', $ad4_1, PDO::PARAM_STR); 
$stmt->bindValue(':ad4_2', $ad4_2, PDO::PARAM_STR); 
$stmt->bindValue(':ad4_3', $ad4_3, PDO::PARAM_STR); 
$stmt->bindValue(':ad4_4', $ad4_4, PDO::PARAM_STR); 

$stmt->bindValue(':ad5_1', $ad5_1, PDO::PARAM_STR); 
$stmt->bindValue(':ad6_1', $ad6_1, PDO::PARAM_STR); 
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMassage:".$error[2]); 
}else{

  //５．リダイレクト
header('Location: contents_user.php');
}
?>
