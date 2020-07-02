
<?php
//1.  DB接続
 require "functions.php";
 $pdo = connectDB();

//２．データ取得SQL作成 
$stmt = $pdo->prepare("SELECT * FROM question_main_table");
//全体反映ならuser紐付けいらないかも。
$status = $stmt->execute();

//３．データ表示
if($status==false) {
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  // .=は、上書きしないという処理。ドットがないと最後のデータのみしか表示されない
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){      
    $ad0_1 = $result["ad0_1"];
    $ad0_2 = $result["ad0_2"];

    $ad1_1 = $result["ad1_1"];
    $ad1_2 = $result["ad1_2"];
    $ad1_3 = $result["ad1_3"];
    $ad1_4 = $result["ad1_4"];

    $ad2_1 = $result["ad2_1"];
    $ad2_2 = $result["ad2_2"];
    $ad2_3 = $result["ad2_3"];
    $ad2_4 = $result["ad2_4"];

    $ad3_1 = $result["ad3_1"];
    $ad3_2=  $result["ad3_2"];
    $ad3_3 = $result["ad3_3"];
    $ad3_4 = $result["ad3_4"];

    $ad4_1 = $result["ad4_1"];
    $ad4_2=  $result["ad4_2"];
    $ad4_3 = $result["ad4_3"];
    $ad4_4 = $result["ad4_4"];

    $ad5_1 = $result["ad5_1"];
   //  $ad5_2=  $result["ad5_2"];

    $ad6_1 = $result["ad6_1"];
   //  $ad6_2=  $result["ad6_2"];

 }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>question_user</title>
    <style>
    body{background-color:black;}
    #form{font-family:'mincho'; font-size:15px;}
    h{font-size:20px;font-weight:bold;margin:30px 30px;line-height:2em;}
    p{font-size:15px;font-weight:bold;margin:30px 30px;line-height:2em;}
    a{font-size:10px;font-weight:bold;line-height:2em;margin:0px 30px;}

    .container0{
        background-image: url("img/0.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    .container1{
        background-image: url("img/1.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    .container2{
        background-image: url("img/2.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    .container3{
        background-image: url("img/3.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    .container4{
        background-image: url("img/4.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    .container5{
        background-image: url("img/5.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    .container6{
        background-image: url("img/6.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    </style>
     <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<section class="body">

<form id="form" method="post" action="insert.php">

    <div class="container">
    <h>あなたが向き合う<?=$ad0_1?>について教えてください
    </h></br></br>
    <p><?=$ad0_2?>
    </p>
    <!--  -->
    <a href="page.php">ending_life_noteについて</a>

    </p>
        <table class="table">
            <tbody>
                <tr>
                <td><th scope="row">1</th>
                <th><?=$ad1_1?>       
                </th></td>
                <td>
                <th style="width:50%";>
                    <input type="checkbox" name="a1" value="質問１"><?=$ad1_2?> <br>
                    <input type="checkbox" name="a1" value="質問２"><?=$ad1_3?><br>
                    <input type="checkbox" name="a1" value="質問３"><?=$ad1_4?><br>
                </th></td>
                </tr>

                <tr>
                <td><th scope="row">2</th>
                <th><?=$ad2_1?>       
                </th></td>
                <td>
                <th style="width:50%";>
                    <input type="checkbox" name="a2" value="質問１"><?=$ad2_2?> <br>
                    <input type="checkbox" name="a2" value="質問２"><?=$ad2_3?><br>
                    <input type="checkbox" name="a2" value="質問３"><?=$ad2_4?><br>
                </th></td>
                </tr>

                <tr>
                <td><th scope="row">3</th>
                <th><?=$ad3_1?>       
                </th></td>
                <td>
                <th style="width:50%";>
                    <input type="checkbox" name="a3" value="質問１"><?=$ad3_2?> <br>
                    <input type="checkbox" name="a3" value="質問２"><?=$ad3_3?><br>
                    <input type="checkbox" name="a3" value="質問３"><?=$ad3_4?><br>
                </th></td>
                </tr>

                <tr>
                <td><th scope="row">4</th>
                <th><?=$ad4_1?>       
                </th></td>
                <td>
                <th style="width:50%";>
                    <input type="checkbox" name="a3" value="質問１"><?=$ad4_2?> <br>
                    <input type="checkbox" name="a3" value="質問２"><?=$ad4_3?><br>
                    <input type="checkbox" name="a3" value="質問３"><?=$ad4_4?><br>
                </th></td>
                </tr>

<!--定性アンケート-->
                <tr>
                <td><th scope="row">5</th>
                <th><?=$ad5_1?>       
                </th></td>
                <td>
                <th style="width:50%";>
                   <textarea name="a5" style="display: inline-block;width:100%;height:50px;"></textarea></th></td>
                </tr>

                <tr>
                <td><th scope="row">6</th>
                <th><?=$ad6_1?>       
                </th></td>
                <td>
                <th style="width:50%";>
                   <textarea name="a6" style="display: inline-block;width:100%;height:50px;"></textarea></th></td>
                </tr>

                <tr>
                <td><th scope="row">7</th>
                <th>ありがとうございました！またアンケートをご協力いただけるようですと、ご連絡先も教えてください！
                </th></td>
                <td>
                <th style="width:50%";>
                   <textarea name="a7" style="display: inline-block;width:100%;height:50px;"></textarea></th></td>
                </tr>

            </tbody>
    </div>
</section>
<table>
<input class="btn btn-default" type="submit" value="送信！" style="margin:0 45%; color:red;"></table>
</form>

<!--bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
window.onload = function () {
    var random = Math.floor(Math.random() * 6); 
    $('.container').attr('class','container'+random)
};

    </script>
</body>
</html>