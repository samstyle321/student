<!DOCTYPE html>

<html>
  <head>
    <title> PHP UPDATE DATA </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="asset/stylesheets/comp.css">
    <style type="text/css">
      form{
            width: 60%;
          }
      #upd{
            margin: 4% 0;
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

    <form name="myform" action="updatemechanical.php" method="post">
      <center>
      <label name="rollno" >Roll-No.</label>
      <input type="number" name="rollno" value="" required><br><br>
      <?php 
        echo ' <label>BOM</label>';
        echo ' <input type="number" name="bom" id = "cg" onkeyup="add()"/><br><br>';
        echo ' <label >R&AC</label>';
        echo '<input type="number" name="rac" id="oss" onkeyup="add()"/><br><br>';
         echo ' <label  >M&T</label>';
        echo '<input type="number" name="mt" id="bom" onkeyup="add()"/><br><br>';
         echo ' <label  >CNC</label>';
        echo '<input type="number" name="cnc" id="elective" onkeyup="add()"/><br><br>';
         echo ' <label  >CAD</label>';
        echo '<input type="number" name="cad" id="elective" onkeyup="add()"/><br><br>';
         echo ' <label >PW</label>';
        echo '<input type="number" name="pw" id="major" onkeyup="add()"/><br><br>';
         echo ' <label >PCS</label>';
        echo '<input type="number" name="pcs" id="pcs" onkeyup="add()"/><br><br>';
         echo ' <label>SCA</label>';
        echo '<input type="number" name="sca" id="sca" onkeyup="add()"/><br><br>';
         echo ' <label >Total</label>';
        echo '<input type="number" name="total" id="total" ><br><br>';
         echo ' <label >%age</label>';
        echo '<input type="text" name="page" >';
      ?>
      <br></center>
      <center><input type="submit" name="update" value="Update Data" id="upd"></center>
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
   $bom = $_POST['bom'];
   $rac = $_POST['rac'];
   $mt = $_POST['mt'];
   $cnc = $_POST['cnc'];
   $cad = $_POST['cad'];
   $pw = $_POST['pw'];
   $pcs = $_POST['pcs'];
   $sca = $_POST['sca'];
   $total = $_POST['total'];
   $page = $_POST['page'];
           
   // mysql query to Update data
   $query = "UPDATE `mechanical` SET `bom`='".$bom."',`rac`='".$rac."',`mt`='".$mt."',`cnc`='".$cnc."',`cad`='".$cad."',`pw`='".$pw."',`pcs`='".$pcs."',`sca`='".$sca."',`total`='".$total."',`page`= $page WHERE `rollno` = $rollno";
   
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
<script type="text/javascript">
    function add(){  
var bom =   document.myform.bom;
var rac =  document.myform.rac;
var mt = document.myform.mt;
var cnc = document.myform.cnc;
var cad = document.myform.cad;
var pw = document.myform.pw;
var pcs = document.myform.pcs;
var sca = document.myform.sca;
total = eval(Number(bom.value) + Number(rac.value) + Number(mt.value) + Number(cnc.value) + Number(cad.value) + Number(pw.value) + Number(pcs.value) + Number(sca.value));
document.myform.total.value = total;
cal = eval((Number(total) * 100) / 425);
document.myform.page.value = cal;
        }

    </script>
  </body>
  </html>