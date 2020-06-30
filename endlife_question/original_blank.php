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
        background-image: url("img/.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    .container1{
        background-image: url("img/.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    .container2{
        background-image: url("img/.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    .container3{
        background-image: url("img/.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    .container4{
        background-image: url("img/.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    .container5{
        background-image: url("img/.jpg");
        background-size: cover;
        background-position: center 60%;
    }
    .container6{
        background-image: url("img/.jpg");
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
    <h>text</h>
    <p>text</p>
    <!-- <a href="page.php"> について</a> -->

    </p>
        <table class="table">
            <tbody>
                <tr>
                <th scope="row">1</th>
                <th>question1</th>
                     <td>
                    <input type="checkbox" name="a1" value="質問１"> 質問１
                    <input type="checkbox" name="a1" value="質問２"> 質問２
                    <input type="checkbox" name="a1" value="質問３"> 質問３
                     </td>
                </tr>

                <tr>
                <th scope="row">2</th>
                <th>question2</th>
                    <td>
                    <input type="checkbox" name="a2" value="質問１"> 質問１
                    <input type="checkbox" name="a2" value="質問２"> 質問２
                    <input type="checkbox" name="a2" value="質問３"> 質問３
                    </td>
                </tr>

                <tr>
                <th scope="row">3</th>
                <th>question3</th>
                    <td>
                    <input type="checkbox" name="a3" value="質問１"> 質問１
                    <input type="checkbox" name="a3" value="質問２"> 質問２
                    <input type="checkbox" name="a3" value="質問３"> 質問３
                    </td>
                </tr>

                <tr>
                <th scope="row">4</th>
                <th>question4</th>
                    <td>
                    <input type="checkbox" name="a4" value="質問１"> 質問１
                    <input type="checkbox" name="a4" value="質問２"> 質問２
                    <input type="checkbox" name="a4" value="質問３"> 質問３
                    </td>
                </tr>

<!--定性アンケート-->
                <tr>
                <th scope="row">5</th>
                <th>question5</th>
                   <td><textarea name="a5" style="display: inline-block;width:100%;height:50px;"></textarea></td>
                </tr>

                <tr>
                <th scope="row">6</th>
                <th>question6</th>
                   <td><textarea name="a6" style="display: inline-block;width:100%;height:50px;"></textarea></td>
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