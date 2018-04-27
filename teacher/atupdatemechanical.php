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
      #my,#myform{
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

    <form name="myfor" action="atupdatemechanical.php" method="post" id="myfor">
      <center>
        <div id="myform">
          <center><h4>Theory</h4></center>
      <label name="rollno" >Roll-No.</label>
      <input type="number" name="rollno" value="" autocomplete="off" required><br><br>
      <?php 
        echo ' <label>BOM</label>';
        echo ' <input type="number" name="bomt" id = "cgt" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>R&AC</label>';
        echo '<input type="number" name="ract" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label>M&T</label>';
        echo '<input type="number" name="mtt" id="bom" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label>CNC</label>';
        echo '<input type="number" name="cnct" id="elective" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>Total</label>';
        echo '<input type="number" name="totalt" id="total" autocomplete="off" ><br><br>';
         echo ' <label>%age</label>';
        echo '<input type="text" name="paget" >';
        
      ?>
       <br></div>
       <div id="my">
        <h4>Practical</h4>
      <?php 
        echo ' <label >R&AC</label>';
        echo ' <input type="number" name="racp" id = "cg" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>M&T</label>';
        echo '<input type="number" name="mtp" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>CAD</label>';
        echo '<input type="number" name="cadp" id="elective" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>CNC</label>';
        echo '<input type="number" name="cncp" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>PW</label>';
        echo '<input type="number" name="pwp" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label>PCS</label>';
        echo '<input type="number" name="pcsp" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>SCA</label>';
        echo '<input type="number" name="scap" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>Total</label>';
        echo '<input type="number" name="totalp" id="total" autocomplete="off" ><br><br>';
         echo ' <label>%age</label>';
        echo '<input type="text" name="pagep" >';
        
      ?>
      <br></div></center>
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
   $bomt = $_POST['bomt'];
   $ract = $_POST['ract'];
   $mtt = $_POST['mtt'];
   $cnct = $_POST['cnct'];
   $totalt = $_POST['totalt'];
   $paget = $_POST['paget'];
   $racp = $_POST['racp'];
   $mtp = $_POST['mtp'];
   $cadp = $_POST['cadp'];
   $cncp = $_POST['cncp'];
   $pwp = $_POST['pwp'];
   $pcsp = $_POST['pcsp'];
   $scap = $_POST['scap'];
   $totalp = $_POST['totalp'];
   $pagep = $_POST['pagep'];
   
           
   // mysql query to Update data
   $query = "UPDATE `mechanicalat` SET `bomt`='".$bomt."',`ract`='".$ract."',`mtt`='".$mtt."',`cnct`='".$cnct."',`totalt`='".$totalt."',`paget`='".$paget."',`racp`='".$racp."',`mtp`='".$mtp."',`cadp`='".$cadp."',`cncp`='".$cncp."',`pwp`='".$pwp."',`pcsp`='".$pcsp."',`scap`='".$scap."',`totalp`='".$totalp."',`pagep`= $pagep WHERE `rollno` = $rollno";
   
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
var bomt =   document.myfor.bomt;
var ract =  document.myfor.ract;
var mtt = document.myfor.mtt;
var cnct = document.myfor.cnct;
var racp =   document.myfor.racp;
var mtp =  document.myfor.mtp;
var cadp = document.myfor.cadp;
var cncp = document.myfor.cncp;
var pwp = document.myfor.pwp;
var pcsp = document.myfor.pcsp;
var scap = document.myfor.scap;
total = eval(Number(bomt.value) + Number(ract.value) + Number(mtt.value) + Number(cnct.value));
document.myfor.totalt.value = total;
cal = eval((Number(total) * 100) / 160);
document.myfor.paget.value = cal;
totalp = eval(Number(racp.value) + Number(mtp.value) + Number(cadp.value) + Number(cncp.value) + Number(pwp.value)  + Number(pcsp.value) + Number(scap.value));
document.myfor.totalp.value = totalp;
cal = eval((Number(totalp) * 100) / 350);
document.myfor.pagep.value = cal;
        }

    </script>
  </body>
</html>s