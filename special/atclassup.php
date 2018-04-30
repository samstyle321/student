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

<form name="myform" action="atclassup.php" method="post">
	<center><label>Roll-no</label>
    <input type="number" name="rollno" autocomplete="off" value="<?php if(isset($_POST['rollno'])){echo $_POST['rollno'];}?>"/><br><br>
    <input type="submit" name="" value="cal" id="upd" onclick="add()"><br><br>
<?php
		if(isset($_POST['rollno']))
{
		$rollno = $_POST['rollno'];

			$sql = "SELECT `cgt`,`osst`,`bomt`,`electivet`,`totalt`,`paget`,`cgp`,`ossp`,`electivep`,`majorp`,`pcsp`,`scap`,`totalp`,`pagep` FROM computerat WHERE `rollno` = $rollno;";
			$result = mysqli_query($db,$sql);
			$resultCheck = mysqli_num_rows($result);
	
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					echo "<h2>Theory</h2>";
					echo "<label>CG</label>";
					echo "<input name='cgt' type='number' value='".$row['cgt']."' ><br><br>" ;
					echo "<label>OSS</label>";
					echo "<input name='osst' type='number' value='".$row['osst']."' ><br><br>" ;
					echo "<label>BOM</label>";
					echo "<input name='bomt' type='number' value='".$row['bomt']."' ><br><br>" ;
					echo "<label>Elective</label>";
					echo "<input name='electivet' type='number' value='".$row['electivet']."' ><br><br>" ;
					echo "<label>Total</label>";
					echo "<input name='totalt' type='number' value='".$_POST['totalt']."' ><br><br>" ;
					echo "<label>%age</label>";
					echo "<input name='paget' type='number' value='".$_POST['paget']."' ><br><br>" ;

					echo "<h2>Practical</h2>";
					echo "<label>CG</label>";
					echo "<input name='cgp' type='number' value='".$row['cgp']."' ><br><br>" ;
					echo "<label>OSS</label>";
					echo "<input name='ossp' type='number' value='".$row['ossp']."' ><br><br>" ;
					echo "<label>Elective</label>";
					echo "<input name='electivep' type='number' value='".$row['electivep']."' ><br><br>" ;
					echo "<label>Major</label>";
					echo "<input name='majorp' type='number' value='".$row['majorp']."' ><br><br>" ;
					echo "<label>PCS</label>";
					echo "<input name='pcsp' type='number' value='".$row['pcsp']."' ><br><br>" ;
					echo "<label>SCA</label>";
					echo "<input name='scap' type='number' value='".$row['scap']."' ><br><br>" ;
					echo "<label>Total</label>";
					echo "<input name='totalp' type='number' value='".$_POST['totalp']."' ><br><br>" ;
					echo "<label>%age</label>";
					echo "<input name='pagep' type='number' value='".$_POST['pagep']."' ><br><br>" ;
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
var cgt =   document.myform.cgt;
var osst =  document.myform.osst;
var bomt = document.myform.bomt;
var electivet = document.myform.electivet;
var cgp =   document.myform.cgp;
var ossp =  document.myform.ossp;
var electivep = document.myform.electivep;
var majorp = document.myform.majorp;
var pcsp = document.myform.pcsp;
var scap = document.myform.scap;
total = eval(Number(cgt.value) + Number(osst.value) + Number(bomt.value) + Number(electivet.value));
document.myform.totalt.value = total;
cal = eval((Number(total) * 100) / 160);
document.myform.paget.value = Math.round(cal);
totalp = eval(Number(cgp.value) + Number(ossp.value) + Number(electivep.value) + Number(majorp.value) + Number(pcsp.value) + Number(scap.value));
document.myform.totalp.value = totalp;
cal = eval((Number(totalp) * 100) / 300);
document.myform.pagep.value = Math.round(cal);
}
</script>
</body>
</html>