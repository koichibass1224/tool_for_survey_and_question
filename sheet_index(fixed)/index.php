<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>question_sheet</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
  <style>
    body{
      background-color:black;
      background-image: url("img/2.jpg");
      background-size: cover;
      /* background-position: center 60%; */
      background-position: center ;
      background-repeat: no-repeat;
      text-align:center;
    }
    h{font-size:30px;padding-top:50px;}
    #form{font-family:'mincho'; font-size:15px;}

    </style>
</head>
<body>

    <h>アンケートフォーム</h>
    <p>お名前をご記入ください。</p>
  
<div class="login" id="login2"> 
  <!-- style="display:none" -->
            <div>
              <h4>your name</h4>
							<form action="login.php" method="post">

									<div class="">
									  <input type="text" class="" name="lid" >
									  <!-- <label>Username</label> -->
									</div>

									<button type="submit" class="">ENTER</button>
							</form>
            </div>
  </div>

<script>
      $("#login").on("click", function () {
        $("#login2").fadeIn(500);
      });
</script>
</body>
</html>