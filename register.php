<!DOCTYPE html>
<html>
<head>
	<title>Javascript Form Validation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- Creating the id with the name of wrapper  -->
	<div id="wrapper">
		<form method="POST" action="index.php" onsubmit="return Validation()" name="vform">
			<div id="username_div">
   	  <label>Username</label> <br>
   	  <input type="text" name="username" class="textInput">
   	  <div id="name_error"></div>
   	</div>
   	<div id="email_div">
   	  <label>Email</label> <br>
   	  <input type="email" name="email" class="textInput">
   	  <div id="email_error"></div>
   	</div>
   	<div id="password_div">
   	  <label>Password</label> <br>
   	  <input type="password" name="password" class="textInput">
   	</div>
   	<div id="pass_confirm_div">
   	   <label>Password confirm</label> <br>
   	   <input type="password" name="password_confirm" class="textInput">
   	   <div id="password_error"></div>
   	</div>
		</form>
		<div>
   	<input type="submit" name="register" value="Register" class="btn">
   	</div>
	</div>
</body>
</html>
<script type="scripts.js"></script>
