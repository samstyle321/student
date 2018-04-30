<!DOCTYPE html>
<html>
<head>
   <title>Delete</title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../asset/stylesheets/add.css">
</head>
<body>
   <center>
   <div class="main">
   <h1>Remove Student</h1>
   <form name="myform" action="del.php" method="post">
      <label>Roll-no</label>
      <input type="number" name="rollno"> <br><br>
      <input type="submit" name="delete" value="Delete" id="upd">
   </form>
   </div>
</center>
<?php
if (isset($_POST['delete'])) {
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "majorp";

   $connect = mysqli_connect($hostname,$username,$password,$databaseName);

   $rollno = $_POST['rollno'];

   $query = "DELETE FROM `computer` WHERE `rollno` = $rollno";

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