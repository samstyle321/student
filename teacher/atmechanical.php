<?php
include('../config.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	</style>
</head>
<body>
	<center><h4>Mechanical 6th Sem </h4>
	<h4>Attendence</h4></center>
	<table border = '3' class="table-responsive">
		<tr>
			<th rowspan="2">Roll-No.</th>
			<th rowspan="2">Name</th>
			<th colspan="6">Theory</th>
			<th colspan="9">Practical</th>
		</tr>
		<tr>
			<th>BOM</th>
			<th>R&AC</th>
			<th>M&T</th>
			<th>CNC</th>
			<th>Total</th>
			<th>%age</th>

			<th>R&AC</th>
			<th>M&T</th>
			<th>CAD</th>
			<th>CNC</th>
			<th>PW</th>
			<th>PCS</th>
			<th>SCA</th>
			<th>Total</th>
			<th>%age</th>
		</tr>
			
		<?php

			$sql = "SELECT * FROM mechanicalat;";
			$result = mysqli_query($db,$sql);
			$resultCheck = mysqli_num_rows($result);
	
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" .$row['rollno']  ."</td>";
					echo "<td>" .$row['name']  ."</td>";
					echo "<td>" .$row['bomt']  ."</td>";
					echo "<td>" .$row['ract']  ."</td>";
					echo "<td>" .$row['mtt']  ."</td>";
					echo "<td>" .$row['cnct']  ."</td>";
					echo "<td>" .$row['totalt']  ."</td>";
					echo "<td>" .$row['paget']  ."</td>";
					echo "<td>" .$row['racp']  ."</td>";
					echo "<td>" .$row['mtp']  ."</td>";
					echo "<td>" .$row['cadp']  ."</td>";
					echo "<td>" .$row['cncp']  ."</td>";
					echo "<td>" .$row['pwp']  ."</td>";
					echo "<td>" .$row['pcsp']  ."</td>";
					echo "<td>" .$row['scap']  ."</td>";
					echo "<td>" .$row['totalp']  ."</td>";
					echo "<td>" .$row['pagep']  ."</td>";
					echo "</tr>";
			

					}
			}
	

			?>
	</table>
	<center><a href="atupdatemechanical.php"><button id="btn">Click Here To Update Records</button></a></center>
</body>
</html>