<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <title>London Craft Beer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="custom_javascript/database.js"></script>
    <script src="custom_javascript/homepage.js"></script>
    <script src="custom_javascript/menu.js"></script>
    <script src="custom_javascript/poimap.js"></script>
    <script src="custom_javascript/poiquestions.js"></script>
    <link rel="stylesheet" href="css/themes/MainTheme.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
</head>

<body>

<div data-role="page" id="login" data-theme="b" > 
  <div data-role="main" class="ui-content">
    <h1 id="login-header">Log in</h1>
    <div style="text-align: center">
    <img src="images/logo.png" alt="London Craft Beer Logo">
	</div>
   <br>
   <form action="/iphone/php/login_handle.php" method="post" data-ajax="false">
    <label for="txt-email-login" id="txt-email-lbl">E-mail Address</label>
    <input type="email" name="email" id="txt-email-login" value="">
    <input type="submit" id="btn-submit" class="ui-btn ui-btn-b" value="Go"/>
	</form>
   
   <?php 
	  if (isset($_GET['registered'])){
		  echo "<p id='login-txt' style='color:red;'>Account Doesn't Exist! <a href='create_account.php'>Create One Here</a></p>";
	  } else{
		  echo "<p id='login-txt'>Don't Have An Account? <a href='create_account.php'>Create One Here</a></p>";
	  }
	  ?>
    
  </div>
</div>

</body>
</html>