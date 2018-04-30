<!DOCTYPE html>

<html>
  <head>
    <title> PHP UPDATE DATA  </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../asset/stylesheets/add.css">
  </head>
  <body>
      <center>
  <div class="main">
  <h1>Updation</h1>
  <form name="myform" action="pcsupdate.php" method="post">
    <center><label>Roll-no</label>
    <input type="number" name="rollno" autocomplete="off"><br><br>
    <label>PCS</label>
    <input type="text" name="pcs" autocomplete="off"><br><br>
    <input type="submit" name="update" value="Update" id="upd"></center>
    
  </form>
</div>
</center>
<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "majorp";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   

  
   // get values form input text and number
   
   $rollno = $_POST['rollno'];
   $pcs = $_POST['pcs'];
  
           
   // mysql query to Update data
   $query = "UPDATE `computer` SET `pcs`=$pcs WHERE `rollno` = $rollno";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       //echo 'Roll-No .$rollno. Updated';
    echo "<h3> Roll-No  " . $rollno .  "  Updated</h3>";
   }else{
       echo 'Data Not Updated';
   }
   //mysqli_close($connect);
   mysqli_close($connect);
}

?>
</body>
</html>
