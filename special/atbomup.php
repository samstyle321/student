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
  <h2>Theory</h2>
  <form name="myform" action="atbomup.php" method="post">
    <center><label>Roll-no</label>
    <input type="number" name="rollno" autocomplete="off"><br><br>
    <label>Bom</label>
    <input type="text" name="bomt" autocomplete="off"><br><br>
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
   $bomt = $_POST['bomt'];
   
           
   // mysql query to Update data
   $query = "UPDATE `computerat` SET `bomt`=$bomt WHERE `rollno` = $rollno";
   
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
<script type="text/javascript">
    function add(){  
var cgt =   document.myfor.cgt;
var osst =  document.myfor.osst;
var bomt = document.myfor.bomt;
var electivet = document.myfor.electivet;
var cgp =   document.myfor.cgp;
var ossp =  document.myfor.ossp;
var electivep = document.myfor.electivep;
var majorp = document.myfor.majorp;
var pcsp = document.myfor.pcsp;
var scap = document.myfor.scap;
total = eval(Number(cgt.value) + Number(osst.value) + Number(bomt.value) + Number(electivet.value));
document.myfor.totalt.value = total;
cal = eval((Number(total) * 100) / 160);
document.myfor.paget.value = cal;
totalp = eval(Number(cgp.value) + Number(ossp.value) + Number(electivep.value) + Number(majorp.value) + Number(pcsp.value) + Number(scap.value));
document.myfor.totalp.value = totalp;
cal = eval((Number(totalp) * 100) / 300);
document.myfor.pagep.value = cal;
        }

    </script>
  </body>
</html>