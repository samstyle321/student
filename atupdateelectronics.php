<!DOCTYPE html>

<html>
  <head>
    <title> PHP UPDATE DATA </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="asset/stylesheets/comp.css">
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

    <form name="myfor" action="atupdateelectronics.php" method="post" id="myfor">
      <center>
        <div id="myform">
          <center><h4>Theory</h4></center>
      <label name="rollno" >Roll-No.</label>
      <input type="number" name="rollno" value="" required><br><br>
      <?php 
        echo ' <label>BOM</label>';
        echo ' <input type="number" name="bomt" id = "cgt" onkeyup="add()"/><br><br>';
        echo ' <label>OFC</label>';
        echo '<input type="number" name="ofct" id="oss" onkeyup="add()"/><br><br>';
         echo ' <label>WMC</label>';
        echo '<input type="number" name="wmct" id="bom" onkeyup="add()"/><br><br>';
         echo ' <label>IPLC</label>';
        echo '<input type="number" name="iplct" id="elective" onkeyup="add()"/><br><br>';
         echo ' <label>CN</label>';
        echo '<input type="number" name="cnt" id="bom" onkeyup="add()"/><br><br>';
        echo ' <label>Total</label>';
        echo '<input type="number" name="totalt" id="total" ><br><br>';
         echo ' <label>%age</label>';
        echo '<input type="text" name="paget" >';
        
      ?>
       <br></div>
       <div id="my">
        <h4>Practical</h4>
      <?php 
        echo ' <label >OFC</label>';
        echo ' <input type="number" name="ofcp" id = "cg" onkeyup="add()"/><br><br>';
        echo ' <label>WMC</label>';
        echo '<input type="number" name="wmcp" id="oss" onkeyup="add()"/><br><br>';
        echo ' <label>IPLC</label>';
        echo '<input type="number" name="iplcp" id="elective" onkeyup="add()"/><br><br>';
        echo ' <label>PCS</label>';
        echo '<input type="number" name="pcsp" id="oss" onkeyup="add()"/><br><br>';
        echo ' <label>Major</label>';
        echo '<input type="number" name="majorp" id="oss" onkeyup="add()"/><br><br>';
        echo ' <label>SCA</label>';
        echo '<input type="number" name="scap" id="oss" onkeyup="add()"/><br><br>';
        echo ' <label>Total</label>';
        echo '<input type="number" name="totalp" id="total" ><br><br>';
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
   $ofct = $_POST['ofct'];
   $wmct = $_POST['wmct'];
   $iplct = $_POST['iplct'];
   $cnt = $_POST['cnt'];
   $totalt = $_POST['totalt'];
   $paget = $_POST['paget'];
   $ofcp = $_POST['ofcp'];
   $wmcp = $_POST['wmcp'];
   $iplcp = $_POST['iplcp'];
   $pcsp = $_POST['pcsp'];
   $majorp = $_POST['majorp'];
   $scap = $_POST['scap'];
   $totalp = $_POST['totalp'];
   $pagep = $_POST['pagep'];
   
           
   // mysql query to Update data
   $query = "UPDATE `electronicsat` SET `bomt`='".$bomt."',`ofct`='".$ofct."',`wmct`='".$wmct."',`iplct`='".$iplct."',`cnt`='".$cnt."',`totalt`='".$totalt."',`paget`='".$paget."',`ofcp`='".$ofcp."',`wmcp`='".$wmcp."',`iplcp`='".$iplcp."',`pcsp`='".$pcsp."',`majorp`='".$majorp."',`scap`='".$scap."',`totalp`='".$totalp."',`pagep`= $pagep WHERE `rollno` = $rollno";
   
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
var ofct =  document.myfor.ofct;
var wmct = document.myfor.wmct;
var iplct = document.myfor.iplct;
var cnt=   document.myfor.cnt;
var ofcp =  document.myfor.ofcp;
var wmcp = document.myfor.wmcp;
var iplcp =   document.myfor.iplcp;
var pcsp =   document.myfor.pcsp;
var majorp = document.myfor.majorp;
var scap = document.myfor.scap;
total = eval(Number(bomt.value) + Number(ofct.value) + Number(wmct.value) + Number(iplct.value) + Number(cnt.value));
document.myfor.totalt.value = total;
cal = eval((Number(total) * 100) / 200);
document.myfor.paget.value = cal;
totalp = eval(Number(ofcp.value) + Number(wmcp.value) + Number(iplcp.value) + Number(pcsp.value) + Number(majorp.value)+ Number(scap.value));
document.myfor.totalp.value = totalp;
cal = eval((Number(totalp) * 100) / 300);
document.myfor.pagep.value = cal;
        }

    </script>
  </body>
</html>