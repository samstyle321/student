<?php
include('../config.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../asset/stylesheets/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../asset/stylesheets/main.css">
	<link rel="stylesheet" type="text/css" href="../asset/stylesheets/comp.css">
	<style type="text/css">
		#btn{
			background-color: #5d5;
			background-color: #44d;
	color: #fff;
	padding: 1%;
	font-weight: 800;
	margin: 1%;
		}
	div{
		text-align: center;
	}
	table{
		margin-bottom: 1%;
	}
	</style>
</head>
<body>
	<center><h4>Computer 6th Sem </h4>
	<h4>Internal</h4></center>
	<table border = '3' class="table-responsive" name="myform">
		<tr>
			<th>Roll-No.</th>
			<th>Name</th>
			<th>CG</th>
			<th>OSS</th>
			<th>BOM</th>
			<th>Elective</th>
			<th>Major</th>
			<th>PCS</th>
			<th>SCA</th>
			<th>Total</th>
			<th>%age</th>
		</tr>
		
	
		<?php

			$sql = "SELECT * FROM computer;";
			$result = mysqli_query($db,$sql);
			$resultCheck = mysqli_num_rows($result);
	
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td name='rollno'>" .$row['rollno']  ."</td>";
					echo "<td name='name'>" .$row['name']  ."</td>";
					echo "<td name='cg' id='cg'>" .$row['cg']  ."</td>";
					echo "<td name='oss' id='oss'>" .$row['oss']  ."</td>";
					echo "<td name='bom' id='bom'>" .$row['bom']  ."</td>";
					echo "<td name='elective' id='elective'>" .$row['elective']  ."</td>";
					echo "<td name='major' id='major'>" .$row['major']  ."</td>";
					echo "<td name='pcs' id='pcs'>" .$row['pcs']  ."</td>";
					echo "<td name='sca' id='sca'>" .$row['sca']  ."</td>";
					echo "<td name='total' id='total'>" .$row['total']  ."</td>";
					echo "<td name='page' id='page'>" .$row['page']  ."</td>";
					echo "</tr>";
				}
			}
		?>
	</table>
	<div class="col-md-4 col-sm-12"><a href="add.php"><button id="btn">Add Student</button></a></div>
	<div class="col-md-4 col-sm-12"><a href="classupdate.php"><button id="btn">Click Here To Update Records</button></a></div>
	<div class="col-md-4 col-sm-12"><a href="del.php"><button id="btn">Delete Student</button></a></div>
	<script type="text/javascript">
    function add(){  
    	for (var i = 1; i >= 58; i++) {
var cg[i] =   document.getElementById("cg");
var oss[i] =  document.getElementById("oss");
var bom[i] = document.getElementById("bom");
var elective[i] = document.getElementById("elective");
var major[i] = document.getElementById("major");
var pcs[i] = document.getElementById("pcs");
var sca[i] = document.getElementById("sca");
total[i] = eval(Number(cg[i].innerHTML) + Number(oss[i].innerHTML) + Number(bom[i].innerHTML) + Number(elective[i].innerHTML) + Number(major[i].innerHTML) + Number(pcs[i].innerHTML) + Number(sca[i].innerHTML));
document.getElementById("total").innerHTML = total[i];
//cal = eval((Number(total) * 100) / 375);
//document.myform.page.value = cal;
}
        }

    </script>
	 


</body>
</html>