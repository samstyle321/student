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

    <form name="myfor" action="atupdatecomp.php" method="post" id="myfor">
      <center>
        
                <div id="myform">
          <center><h2 class="th">Theory</h2></center>
      <label name="rollno" >Roll-No.</label>
      <input type="number" name="rollno" value="" autocomplete="off" required><br><br>
      <?php 
        echo ' <label>CG</label>';
        echo ' <input type="number" name="cgt" id = "cgt" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>OSS</label>';
        echo '<input type="number" name="osst" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label>BOM</label>';
        echo '<input type="number" name="bomt" id="bom" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label>Elective</label>';
        echo '<input type="number" name="electivet" id="elective" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>Total</label>';
        echo '<input type="number" name="totalt" id="total" autocomplete="off" ><br><br>';
         echo ' <label>%age</label>';
        echo '<input type="text" name="paget" >';
        
      ?>
       <br></div><div id="mybl" ></div>

       <div id="my">
        <h2 class="pr">Practical</h2>
      <?php 
        echo ' <label >CG</label>';
        echo ' <input type="number" name="cgp" id = "cg" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>OSS</label>';
        echo '<input type="number" name="ossp" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>Elective</label>';
        echo '<input type="number" name="electivep" id="elective" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>Major</label>';
        echo '<input type="number" name="majorp" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>PCS</label>';
        echo '<input type="number" name="pcsp" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>SCA</label>';
        echo '<input type="number" name="scap" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>Total</label>';
        echo '<input type="number" name="totalp" id="total" autocomplete="off" ><br><br>';
         echo ' <label>%age</label>';
        echo '<input type="text" name="pagep" >';
        
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
   $cgt = $_POST['cgt'];
   $osst = $_POST['osst'];
   $bomt = $_POST['bomt'];
   $electivet = $_POST['electivet'];
   $totalt = $_POST['totalt'];
   $paget = $_POST['paget'];
   $cgp = $_POST['cgp'];
   $ossp = $_POST['ossp'];
   $electivep = $_POST['electivep'];
   $majorp = $_POST['majorp'];
   $pcsp = $_POST['pcsp'];
   $scap = $_POST['scap'];
   $totalp = $_POST['totalp'];
   $pagep = $_POST['pagep'];
   
           
   // mysql query to Update data
   $query = "UPDATE `computerat` SET `cgt`='".$cgt."',`osst`='".$osst."',`bomt`='".$bomt."',`electivet`='".$electivet."',`totalt`='".$totalt."',`paget`='".$paget."',`cgp`='".$cgp."',`ossp`='".$ossp."',`electivep`='".$electivep."',`majorp`='".$majorp."',`pcsp`='".$pcsp."',`scap`='".$scap."',`totalp`='".$totalp."',`pagep`= $pagep WHERE `rollno` = $rollno";
   
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