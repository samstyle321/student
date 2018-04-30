<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../asset/stylesheets/add.css">
</head>
<body>
	<center>
	<div class="main">
	<h1>Add Student</h1>
	<form name="myform" action="add.php" method="post">
		<center><label>Roll-no</label>
		<input type="number" name="rollno"><br><br>
		<label>Name</label>
		<input type="text" name="name"><br><br>
		<input type="submit" name="add" value="Add" id="upd"></center>
		
	</form>
</div>
</center>
	<?php
   if(isset($_POST['add']))
   {
   	$hostname = "localhost";
   	$username = "root";
   	$password = "";
   	$databaseName = "majorp";

   	$connect = mysqli_connect($hostname,$username,$password,$databaseName);

   	$rollno = $_POST['rollno'];
   	$name = $_POST['name'];

   	$query = "INSERT INTO `computer`(`rollno`, `name`, `cg`, `oss`, `bom`, `elective`, `major`, `pcs`, `sca`, `total`, `page`) VALUES ('$rollno','$name','0','0','0','0','0','0','0','0','0')";

   	$result = mysqli_query($connect,$query);
   	if($result){
   		echo "<h3>Done</h3>";
   	}
   	else{
   		echo "error";
   	}
   	mysqli_close($connect);

   }

	?>

</body>
</html>