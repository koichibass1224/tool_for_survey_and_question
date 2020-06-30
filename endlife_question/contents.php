<?php
//定性・定量アンケート
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>question_index</title>
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
<form id="form"method="post" action="insert.php">
    <div class="container">
    <h>あなたが向き合う「死」について教えてください！</h></br></br>
    <p>こんにちは。私たちは亡くなる前に書き残す終活ノートを、アプリ化してデータベースにするending_life_noteのプロジェクトを立ち上げしています。</br>
    死と向き合うことへの課題を探りたいと考え、今回のアンケートをお願いしています。</br>
    質問項目は全部で６個です。基本的には選択なので５分ほどで全回答は終わります。ぜひご協力のほど、お願いいたします！</p>
    <a href="page.php">ending_life_noteについて</a>

    </p>
        <table class="table">
            <tbody>
                <tr>
                <td><th scope="row">1</th>
                <th><p>ご自身の、またご家族の死ついて、考えたことはありますか？<br>（一番当てはまるものを選んでください）</p></th></td>
                <td>
                <th style="width:50%";>
                    <input type="checkbox" name="a1" value="質問１"> 自分の死<br>
                    <input type="checkbox" name="a1" value="質問２"> 家族の死<br>
                    <input type="checkbox" name="a1" value="質問３"> 考えたことはないし気にしていない。
                </th></td>
                </tr>

                <tr>
                <td><th scope="row">2</th>
                <th><p>亡くなる前にメッセージを残してもらうとしたら、誰にお願いしたいですか？<br>（一番当てはまるものを選んでください）</p></th></td>
                <td>
                <th style="width:50%";>
                    <input type="checkbox" name="a2" value="質問１"> 自分<br>
                    <input type="checkbox" name="a2" value="質問２"> ご両親<br>
                    <input type="checkbox" name="a2" value="質問３"> お子さん<br>
                    <input type="checkbox" name="a2" value="質問４"> ご友人<br>
                </th></td>
                </tr>

                <tr>
                <td><th scope="row">3</th>
                <th><p>亡くなる人にメッセージを残してもらうとしたら、一番の理由はなんですか？<br>（一番当てはまるものを選んでください）</p></th></td>
                <td>
                <th style="width:50%";>
                    <input type="checkbox" name="a3" value="質問１"> 確かめたいことがある。<br>
                    <input type="checkbox" name="a3" value="質問２"> いつでも近くに感じたいから。<br>
                    <input type="checkbox" name="a3" value="質問３"> 遺産分与で揉めそうだから。<br>
                    <input type="checkbox" name="a3" value="質問４"> その他<br>
                    <!-- <input type="text" name="a3" placeholder="その他"> <br> -->
                </th></td>
                </tr>

                <tr>
                <td><th scope="row">4</th>
                <th><p>亡くなる人にメッセージを残してもらうとしたら、一番の理由はなんですか？<br>（一番当てはまるものを選んでください）</p></th></td>
                <td>
                <th style="width:50%";>
                    <input type="checkbox" name="a4" value="質問１"> 結婚して子供ができた。<br>
                    <input type="checkbox" name="a4" value="質問２"> 財産が増えた。<br>
                    <input type="checkbox" name="a4" value="質問３"> 父母が介護生活。<br>
                    <input type="checkbox" name="a4" value="質問４"> 思い立った時から。<br>
                    <input type="text" name="a4" placeholder="その他"> <br>
                </th></td>
                </tr>

<!--定性アンケート-->
                <tr>
                <td><th scope="row">5</th>
                <th><p>亡くなった方に対して、後悔したエピソードがあれば、言える範囲で<br>ぜひ教えてください。</p></th></td>
                <td>
                <th style="width:50%";>
                   <textarea name="a5" style="display: inline-block;width:100%;height:50px;"></textarea></th></td>
                </tr>

                <tr>
                <td><th scope="row">6</th>
                <th><p>またアンケートに協力していただけるようですと、<br>ぜひご連絡先を教えてください！</p></th></td>
                <td>
                <th style="width:50%";>
                   <textarea name="a6" style="display: inline-block;width:100%;height:50px;"></textarea></th></td>
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