<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABSE', 'majorp');
$db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABSE);
session_start();
$error="";

if($_SERVER['REQUEST_METHOD'] =='POST'){
	 $myusername = mysqli_real_escape_string($db, $_POST['username']);
	  $mypassword = mysqli_real_escape_string($db, $_POST['password']);

	  $sql = "SELECT * fROM pcslogin WHERE username = '$myusername' and password = '$mypassword'";
	  $result = mysqli_query($db, $sql);
	  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	  $count = mysqli_num_rows($result);

	  if($count==1)
	  {
	  			$_SESSION['login_user'] = $myusername;
	  			header("location: pcscomputer.php");
	  }
	  else
	  {
	  	$error = "Wrong Username and password";
	  }
}

?>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <script src="https://use.fontawesome.com/cac72cc81c.js"></script>
	 <link rel="stylesheet" type="text/css" href="../asset/stylesheets/bootstrap.css">
	 <link rel="stylesheet" type="text/css" href="../asset/stylesheets/main.css">
	 <link rel="stylesheet" type="text/css" href="../asset/stylesheets/comp.css">
</head>
<body>
	<div class="wrap">
			<!--<header>
				<h1>Teacher log in</h1>
			</header>-->
		<div class="main">
			<center>
				<div><br>
		  		<img src="../asset/images/login.png" class="img-responsive">
		  		<h2>LOGIN</h2>
					<form  method="post" class="form-responsive"><br>
						<div class="data">
							<input type="text" name="username" placeholder="Username" autocomplete="off">
						</div>
						<div class="data">
		   				<input type="password" name="password" placeholder="Password">
		   			</div>
		    		<input type="submit" id="btn" value="Login">
		    		<div><?php echo $error;?></div>
		   		</form><br>
				</div>
			</center>
		</div>
	</div>

	<!--<div class="footer">
	   &copy; Copyright <strong></strong>. All Rights Reserved
		<br>
		GP Kangra
	</div>-->
 </body>
</html>
