<?php
session_start();

include("functions2.php");
loginCheck();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>data kanri</title>
</head>
<body>
<a class="navbar-brand" href="logout.php">ログアウト</a></br>
<a class="navbar-brand" href="contents_detail.php">アンケートフォーム作成</a>

<ul>
  </li>
    <a href="chart/chart_a1.php">a1_graph</a>
  <li>
  </li>
    <a href="chart/chart_a2.php">a2_graph</a>
  <li>
  </li>
    <a href="chart/chart_a3.php">a3_graph</a>
  <li>
  </li>
    <a href="chart/chart_a4.php">a4_graph</a>
  <li>
  </li>
    <a href="chart/chart_a5.php">a5_graph</a>
  <li>
  </li>
    <a href="chart/chart_a6.php">a6_graph</a>
  <li>
</ul>

</body>
</html>