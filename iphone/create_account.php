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

 <div data-role="page" id="create" data-theme="b" > 
  <div data-role="main" class="ui-content">
    <h1 id="create-header">Create an account</h1>
    <div style="text-align: center">
    <img src="images/logo.png" alt="London Craft Beer Logo">
	</div>
   <br>
   	
   
   	<form action="/iphone/php/create_account_handle.php" method="post" data-ajax="false">
    <label for="txt-username-create" id="txt-username-lbl">Username</label>
    <input type="text" name="username" id="txt-username-create" value="">
    <label for="txt-email" id="txt-email-lbl">E-mail Address</label>
    <input type="email" name="email" id="txt-email-create" value="">
    <input type="submit" id="btn-submit" class="ui-btn ui-btn-b" value="Create Account"/>
	  </form>
	  <?php 
	  if (isset($_GET['duplicate'])){
		  echo '<p id="login-txt" style="color:red;">Email Already Exists! <a href="index.php">Log In Here</a></p>';
	  } else{
		  echo '<p id="login-txt">Already have an account? <a href="index.php">Log In Here</a>';
	  }
	  ?>
	  
    </p>
  </div>
</div>

</body>
</html>