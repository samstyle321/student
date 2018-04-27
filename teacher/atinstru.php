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
	<center><h4>Instrumentation 6th Sem </h4>
	<h4>Attendence</h4></center>
	<table border = '3' class="table-responsive">
		<tr>
			<th rowspan="2">Roll-No.</th>
			<th rowspan="2">Name</th>
			<th colspan="8">Theory</th>
			<th colspan="9">Practical</th>
		</tr>
		<tr>
			<th>BOM</th>
			<th>ABI</th>
			<th>ACS</th>
			<th>PCC</th>
			<th>IE</th>
			<th>MTS</th>
			<th>Total</th>
			<th>%age</th>

			<th>ABI</th>
			<th>ACS</th>
			<th>PCC</th>
			<th>IE</th>
			<th>MTS</th>
			<th>Major</th>
			<th>SCA</th>
			<th>Total</th>
			<th>%age</th>
		</tr>
			
		<?php

			$sql = "SELECT * FROM instrumentat;";
			$result = mysqli_query($db,$sql);
			$resultCheck = mysqli_num_rows($result);
	
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" .$row['rollno']  ."</td>";
					echo "<td>" .$row['name']  ."</td>";
					echo "<td>" .$row['bomt']  ."</td>";
					echo "<td>" .$row['abit']  ."</td>";
					echo "<td>" .$row['acst']  ."</td>";
					echo "<td>" .$row['pcct']  ."</td>";
					echo "<td>" .$row['iet']  ."</td>";
					echo "<td>" .$row['mtst']  ."</td>";
					echo "<td>" .$row['totalt']  ."</td>";
					echo "<td>" .$row['paget']  ."</td>";
					echo "<td>" .$row['abip']  ."</td>";
					echo "<td>" .$row['acsp']  ."</td>";
					echo "<td>" .$row['pccp']  ."</td>";
					echo "<td>" .$row['iep']  ."</td>";
					echo "<td>" .$row['mtsp']  ."</td>";
					echo "<td>" .$row['majorp']  ."</td>";
					echo "<td>" .$row['scap']  ."</td>";
					echo "<td>" .$row['totalp']  ."</td>";
					echo "<td>" .$row['pagep']  ."</td>";
					echo "</tr>";
			

					}
			}
	

			?>
	</table>
	<center><a href="atupdateinstru.php"><button id="btn">Click Here To Update Records</button></a></center>
</body>
</html>