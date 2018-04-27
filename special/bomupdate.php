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
    <form name="myform" action="bomupdate.php" method="post">
      <center>
      <label name="rollno" >Roll-No.</label>
      <input type="number" name="rollno" value="" autocomplete="off" required><br><br>
      <?php 
        
         echo ' <label>BOM</label>';
        echo '<input type="number" name="bom" id="bom" autocomplete="off" /><br><br>';
       
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
   $bom = $_POST['bom'];
  
           
   // mysql query to Update data
   $query = "UPDATE `computer` SET `bom`=$bom WHERE `rollno` = $rollno";
   
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