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

    <form name="myfor" action="atupdateinstru.php" method="post" id="myfor">
      <center>
        <div id="myform">
          <center><h4>Theory</h4></center>
      <label name="rollno" >Roll-No.</label>
      <input type="number" name="rollno" value="" autocomplete="off" required><br><br>
      <?php 
        echo ' <label>BOM</label>';
        echo ' <input type="number" name="bomt" id = "cgt" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>ABI</label>';
        echo '<input type="number" name="abit" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label>ACS</label>';
        echo '<input type="number" name="acst" id="bom" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label>PCC</label>';
        echo '<input type="number" name="pcct" id="elective" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label>IE</label>';
        echo '<input type="number" name="iet" id="bom" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label>MTS</label>';
        echo '<input type="number" name="mtst" id="bom" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>Total</label>';
        echo '<input type="number" name="totalt" id="total" autocomplete="off" ><br><br>';
         echo ' <label>%age</label>';
        echo '<input type="text" name="paget" >';
        
      ?>
       <br></div>
       <div id="my">
        <h4>Practical</h4>
      <?php 
        echo ' <label >ABI</label>';
        echo ' <input type="number" name="abip" id = "cg" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>ACS</label>';
        echo '<input type="number" name="acsp" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>PCC</label>';
        echo '<input type="number" name="pccp" id="elective" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>IE</label>';
        echo '<input type="number" name="iep" id="oss autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>MTS</label>';
        echo '<input type="number" name="mtsp" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>Major</label>';
        echo '<input type="number" name="majorp" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
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
   $abit = $_POST['abit'];
   $acst = $_POST['acst'];
   $pcct = $_POST['pcct'];
   $iet = $_POST['iet'];
   $mtst = $_POST['mtst'];
   $totalt = $_POST['totalt'];
   $paget = $_POST['paget'];
   $abip = $_POST['abip'];
   $acsp = $_POST['acsp'];
   $pccp = $_POST['pccp'];
   $iep = $_POST['iep'];
   $mtsp = $_POST['mtsp'];
   $majorp = $_POST['majorp'];
   $scap = $_POST['scap'];
   $totalp = $_POST['totalp'];
   $pagep = $_POST['pagep'];
   
           
   // mysql query to Update data
   $query = "UPDATE `instrumentat` SET `bomt`='".$bomt."',`abit`='".$abit."',`acst`='".$acst."',`pcct`='".$pcct."',`iet`='".$iet."',`mtst`='".$mtst."',`totalt`='".$totalt."',`paget`='".$paget."',`abip`='".$abip."',`acsp`='".$acsp."',`pccp`='".$pccp."',`iep`='".$iep."',`mtsp`='".$mtsp."',`majorp`='".$majorp."',`scap`='".$scap."',`totalp`='".$totalp."',`pagep`= $pagep WHERE `rollno` = $rollno";
   
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
var abit =  document.myfor.abit;
var acst = document.myfor.acst;
var pcct = document.myfor.pcct;
var iet=   document.myfor.iet;
var mtst =   document.myfor.mtst;
var abip =  document.myfor.abip;
var acsp = document.myfor.acsp;
var pccp =   document.myfor.pccp;
var iep =   document.myfor.iep;
var mtsp =   document.myfor.mtsp;
var majorp = document.myfor.majorp;
var scap = document.myfor.scap;
total = eval(Number(bomt.value) + Number(abit.value) + Number(acst.value) + Number(pcct.value) + Number(iet.value) + Number(mtst.value));
document.myfor.totalt.value = total;
cal = eval((Number(total) * 100) / 240);
document.myfor.paget.value = cal;
totalp = eval(Number(abip.value) + Number(acsp.value) + Number(pccp.value) + Number(iep.value) + Number(mtsp.value) + Number(majorp.value)+ Number(scap.value));
document.myfor.totalp.value = totalp;
cal = eval((Number(totalp) * 100) / 350);
document.myfor.pagep.value = Math.round(cal);


    </script>
  </body>
</html>