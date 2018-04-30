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
  <form name="myform" action="bomupdate.php" method="post">
    <center><label>Roll-no</label>
    <input type="number" name="rollno" autocomplete="off"><br><br>
    <label>Bom</label>
    <input type="text" name="bom" autocomplete="off"><br><br>
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
   $bom = $_POST['bom'];
  
           
   // mysql query to Update data
   $query = "UPDATE `computer` SET `bom`=$bom WHERE `rollno` = $rollno";
   
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
var cg =   document.myform.cg;
var oss =  document.myform.oss;
var bom = document.myform.bom;
var elective = document.myform.elective;
var major = document.myform.major;
var pcs = document.myform.pcs;
var sca = document.myform.sca;
total = eval(Number(cg.value) + Number(oss.value) + Number(bom.value) + Number(elective.value) + Number(major.value) + Number(pcs.value) + Number(sca.value));
document.myform.total.value = total;
cal = eval((Number(total) * 100) / 375);
document.myform.page.value = cal;
        }

    </script>
  </body>
</html>