<!DOCTYPE html>

<html>
  <head>
    <title> PHP UPDATE DATA </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../asset/stylesheets/comp.css">
     <link rel="stylesheet" type="text/css" href="../asset/stylesheets/update.css">
    <style type="text/css">
      #myform{
            width: 30%;
          }
      #my{
        width: 30%;
      }
      #mybl{
        width: 15%;
      }
      #upd{
            margin: 4% 0;
          }
      #myform input, button {
        vertical-align:middle;
        float: right;
          }
      #my input, button {
        vertical-align:middle;
        float: right;
          }
      @media(max-width: 400px)
          {
            #myform label,input{
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
      #my,#myform,#mybl{
        display: inline-block;
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
       

    <form name="myfor" action="atossup.php" method="post" id="myfor">
      <div class="roll"><h3>Roll-No.</h3>
          <input type="number" name="rollno" value="" autocomplete="off" required><br><br></div>
      <center>

      <div id="myform">
          <center><h2 class="th">Theory</h2></center>
      
      
      <?php 
        echo ' <label>OSS</label>';
        echo ' <input type="number" name="osst" id = "osst" autocomplete="off" onkeyup="add()"/><br><br>';
        
      ?>
       <br></div><div id="mybl" >
       </div>

       <div id="my">
        <h2 class="pr">Practical</h2>
      <?php 
        echo ' <label >OSS</label>';
        echo ' <input type="number" name="ossp" id = "oss" autocomplete="off" onkeyup="add()"/><br><br>';
        
      ?>
      <br></div><div id="mybl"></div></center>
      <center><input type="submit" name="update" value="UPDATE" id="upd"></center>
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
   $osst = $_POST['osst'];
   $ossp = $_POST['ossp'];
   
           
   // mysql query to Update data
   $query = "UPDATE `computerat` SET `osst`='".$osst."',`ossp`=$ossp WHERE `rollno` = $rollno";
   
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