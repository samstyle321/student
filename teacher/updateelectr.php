<!DOCTYPE html>

<html>
  <head>
    <title> PHP UPDATE DATA </title>
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

    <form name="myform" action="updateelectr.php" method="post">
      <center>
      <label name="rollno" >Roll-No.</label>
      <input type="number" name="rollno" value="" autocomplete="off" required><br><br>
      <?php 
        echo ' <label>BOM</label>';
        echo ' <input type="number" name="bom" id = "cg" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label >EM</label>';
        echo '<input type="number" name="em" id="oss" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label  >UEE</label>';
        echo '<input type="number" name="uee" id="bom" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label  >Elective</label>';
        echo '<input type="number" name="elective" id="elective" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label >Major</label>';
        echo '<input type="number" name="major" id="major" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label >PCS</label>';
        echo '<input type="number" name="pcs" id="pcs" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label>SCA</label>';
        echo '<input type="number" name="sca" id="sca" autocomplete="off" onkeyup="add()"/><br><br>';
         echo ' <label >Total</label>';
        echo '<input type="number" name="total" id="total" autocomplete="off" ><br><br>';
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
   $em = $_POST['em'];
   $uee = $_POST['uee'];
   $elective = $_POST['elective'];
   $major = $_POST['major'];
   $pcs = $_POST['pcs'];
   $sca = $_POST['sca'];
   $total = $_POST['total'];
   $page = $_POST['page'];
           
   // mysql query to Update data
   $query = "UPDATE `electrical` SET `bom`='".$bom."',`em`='".$em."',`uee`='".$uee."',`elective`='".$elective."',`major`='".$major."',`pcs`='".$pcs."',`sca`='".$sca."',`total`='".$total."',`page`= $page WHERE `rollno` = $rollno";
   
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