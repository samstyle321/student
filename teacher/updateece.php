
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
    <center><div class="wrap">
    <header >
      <h1>Updation</h1>
    </header>
  </div></center>



    <form name="myform" action="updateece.php" method="post">
      <center><label name="rollno" >Roll-No.</label>
      
      <input type="number" name="rollno" value="" autocomplete="off" required><br><br>

      <?php
        echo ' <label >BOM</label>'; 
        echo '<input type="number" name="bom" id = "bom" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>OFC</label>';
        echo '<input type="number" name="ofc" id="ofc" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>WMC</label>';
        echo '<input type="number" name="wmc" id="wmc" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>IPLC</label>';
        echo '<input type="number" name="iplc" id="iplc" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>CN</label>';
        echo '<input type="number" name="cn" id="cn" autocomplete="off"  onkeyup="add()"/><br><br>';
        echo ' <label>Major</label>';
        echo '<input type="number" name="major" id="major" autocomplete="off" onkeyup="add()"/><br><br>';
        echo ' <label>SCA</label>';
        echo '<input type="number" name="sca" id="sca" autocomplete="off"  onkeyup="add()"/><br><br>';
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
   $ofc = $_POST['ofc'];
   $wmc = $_POST['wmc'];
   $iplc = $_POST['iplc'];
   $cn = $_POST['cn'];
   $major = $_POST['major'];
   $sca = $_POST['sca'];
   $total = $_POST['total'];
   $page = $_POST['page'];
           
   // mysql query to Update data
   $query = "UPDATE `electronics` SET `bom`='".$bom."',`ofc`='".$ofc."',`wmc`='".$wmc."',`iplc`='".$iplc."',`cn`='".$cn."',`major`='".$major."',`sca`='".$sca."',`total`='".$total."',`page`= $page WHERE `rollno` = $rollno";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       //echo 'Roll-No .$rollno. Updated';
    echo " Roll-No  " . $rollno .  "  Updated";
   }else{
       echo 'Data Not Updated';
   }
   //mysqli_close($connect);
   // mysqli_close($connect);
}

?>
    <script type="text/javascript">
    function add(){  
var bom =   document.myform.bom;
var ofc =  document.myform.ofc;
var wmc = document.myform.wmc;
var iplc = document.myform.iplc;
var cn = document.myform.cn;
var major = document.myform.major;
var sca = document.myform.sca;
total = eval(Number(bom.value) + Number(ofc.value) + Number(wmc.value) + Number(iplc.value) + Number(cn.value) + Number(major.value) + Number(sca.value));
document.myform.total.value = total;
cal = eval((Number(total) * 100) / 425);
document.myform.page.value = cal;
        
    }

    </script>
  </body>
</html>