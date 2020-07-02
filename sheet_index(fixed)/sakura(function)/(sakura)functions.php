<?php
// データベースに接続
function connectDB() {

        try {
          //Password:MAMP='root',XAMPP=''
          // return new PDO('mysql:dbname=question_db;charset=utf8;host=localhost','root','root');
          return new PDO('mysql:dbname=stokyo_question_db;charset=utf8;host=mysql57.stokyo.sakura.ne.jp','stokyo','koichi1224s');
          // return new PDO('mysql:dbname=question_db;charset=utf8;host=mysql57.stokyo.sakura.ne.jp','stokyo','koichi1224s');
        } catch (PDOException $e) {
          exit('DBConnectError:'.$e->getMessage());
        }     
      }
?>

