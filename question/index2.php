<?php
//定量アンケート
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>question_index</title>
    <style>
    </style>
     <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<form method="post" action="insert2.php">
  <div class="jumbotron">
    <div class="container">
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

                <input class="btn btn-primary" type="submit" value="Input">
            </tbody>
    </div>
</form>

<!--bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>