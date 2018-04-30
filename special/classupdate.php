<?php
include('../config.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Class</title>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../asset/stylesheets/add.css">
     <style type="text/css">
     	.main{
     		margin-top: 0;
     	}
     </style>
</head>
<body>
	<center>
  <div class="main">
  <h1>Updation</h1>

<form name="myform" action="classupdate.php" method="post">
	<center><label>Roll-no</label>
    <input type="number" name="rollno" autocomplete="off" value="<?php if(isset($_POST['rollno'])){echo $_POST['rollno'];}?>"/><br><br>
    <input type="submit" name="" value="cal" id="upd" onclick="add()"><br><br>
	

		<?php
		if(isset($_POST['rollno']))
{
		$rollno = $_POST['rollno'];

			$sql = "SELECT `cg`,`oss`,`bom`,`elective`,`major`,`pcs`,`sca`,`total`,`page` FROM computer WHERE `rollno` = $rollno;";
			$result = mysqli_query($db,$sql);
			$resultCheck = mysqli_num_rows($result);
	
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					echo "<label>CG</label>";
					echo "<input name='cg' type='number' value='".$row['cg']."' ><br><br>" ;
					echo "<label>OSS</label>";
					echo "<input name='oss' type='number' value='".$row['oss']."' ><br><br>" ;
					echo "<label>BOM</label>";
					echo "<input name='bom' type='number' value='".$row['bom']."' ><br><br>" ;
					echo "<label>Elective</label>";
					echo "<input name='elective' type='number' value='".$row['elective']."' ><br><br>" ;
					echo "<label>Major</label>";
					echo "<input name='major' type='number' value='".$row['major']."' ><br><br>" ;
					echo "<label>PCS</label>";
					echo "<input name='pcs' type='number' value='".$row['pcs']."' ><br><br>" ;
					echo "<label>SCA</label>";
					echo "<input name='sca' type='number' value='".$row['sca']."' ><br><br>" ;
					echo "<label>Total</label>";
					echo "<input name='total' type='number' value='".$_POST['total']."' ><br><br>" ;
					echo "<label>%age</label>";
					echo "<input name='page' type='number' value='".$_POST['page']."' ><br><br>" ;
				}
			}
		}
		?>
		<input type="submit" name="update" value="Update" id="upd"></center>
</form>
</div>
</center>

<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
   //$hostname = "localhost";
   //$username = "root";
   //$password = "";
   //$databaseName = "majorp";
   
   //$connect = mysqli_connect($hostname, $username, $password, $databaseName);
   

  
   // get values form input text and number
   
   $rollno = $_POST['rollno'];
   $cg = $_POST['cg'];
   $oss = $_POST['oss'];
   $bom = $_POST['bom'];
   $elective = $_POST['elective'];
   $major = $_POST['major'];
   $pcs = $_POST['pcs'];
   $sca = $_POST['sca'];
   $total = $_POST['total'];
   $page = $_POST['page'];
           
   // mysql query to Update data
   $query = "UPDATE `computer` SET `cg`='".$cg."',`oss`='".$oss."',`bom`='".$bom."',`elective`='".$elective."',`major`='".$major."',`pcs`='".$pcs."',`sca`='".$sca."',`total`='".$total."',`page`= $page WHERE `rollno` = $rollno";
   
   $result = mysqli_query($db, $query);
   
   if($result)
   {
       //echo 'Roll-No .$rollno. Updated';
    echo "<h3> Roll-No  " . $rollno .  "  Updated </h3>";
   }else{
       echo 'Data Not Updated';
   }
   //mysqli_close($connect);
   mysqli_close($db);
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
document.myform.page.value = Math.round(cal);
        }

    </script>
</body>
</html>