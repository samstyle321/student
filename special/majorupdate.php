<!DOCTYPE html>

<html>
  <head>
    <title> PHP UPDATE DATA  </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../asset/stylesheets/comp.css">
     <link rel="stylesheet" type="text/css" href="../asset/stylesheets/update.css">
    <style type="text/css">
      form{
            width: 65%;
          }
      #upd{
            margin: 4% -35% 0 0;
            width: 70%;

          }
      form input, button {
        vertical-align:middle;
        float: right;
          }
      @media(max-width: 400px)
          {
            form label,input{
              width: 80%;
            }
          }
      label{
            margin-right: -40%;
          }
      @media(max-width: 400px){
            form label{
              margin-right: 0;
            }
          }
      @media(max-width: 400px){
        #upd{
          margin-right: 0;
        }
      }
    </style>
  </head>
  <body>
    <center>
      <div class="wrap">
        <header >
          <h1>Updation</h1>
        </header>
      </div>
    </center>
    <form name="myform" action="majorupdate.php" method="post">
      <center>
      <label name="rollno" >Roll-No.</label>
      <input type="number" name="rollno" value="" autocomplete="off" required><br><br>
      <?php 
        
         echo ' <label>Major</label>';
        echo '<input type="number" name="major" id="major" autocomplete="off" /><br><br>';
       
      ?>
      <br>
      <input type="submit" name="update" value="Update" id="upd"></center>
    </form>
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
   $major = $_POST['major'];
  
           
   // mysql query to Update data
   $query = "UPDATE `computer` SET `major`=$major WHERE `rollno` = $rollno";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       //echo 'Roll-No .$rollno. Updated';
    echo " Roll-No  " . $rollno .  "  Updated";
   }else{
       echo 'Data Not Updated';
   }
   //mysqli_close($connect);
   mysqli_close($connect);
}

?>
</body>
</html>