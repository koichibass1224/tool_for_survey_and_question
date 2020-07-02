<?php
session_start();
$lid = $_POST["lid"];
$_SESSION["lid"]= $lid;

//1.  connect DB
include("functions.php");
$pdo = connectDB();

//2. get data SQL
$stmt = $pdo->prepare("SELECT * FROM question_user_table WHERE lid=:lid");//WHERE lid=:lid
$stmt->bindValue(':lid', $lid,PDO::PARAM_STR);
$status = $stmt->execute();

//3. error check
if($status==false){
    sql_error($stmt);
}

//4. get data
$val = $stmt->fetch();//fetch=1レコードだけ抽出する

//5. 該当レコードがあればSESSIONに値を代入
if($val["lid"] !=""){
 //if( password_verify($lpw,$val["lpw"]) ){
  $_SESSION["chk_ssid"]  = session_id();//ユニークの値を取得する
  $_SESSION["kanri_flg"] = 1;
  //$val['kanri_flg'];
  $_SESSION["lid"]  = $val['lid'];
  header("Location:top_admin.php");
}else{
  header("Location:contents_user.php");
}

exit();


