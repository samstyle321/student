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
	<h4>Internal</h4></center>
	<table border = '3' class="table-responsive">
		<tr>
			<th>Roll-No.</th>
			<th>Name</th>
			<th>BOM</th>
			<th>ABI</th>
			<th>ACS</th>
			<th>PCE</th>
			<th>Elective</th>
			<th>Major</th>
			<th>SCA</th>
			<th>Total</th>
			<th>%age</th>
		</tr>
		
	
		<?php

			$sql = "SELECT * FROM instrument;";
			$result = mysqli_query($db,$sql);
			$resultCheck = mysqli_num_rows($result);
	
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" .$row['rollno']  ."</td>";
					echo "<td>" .$row['name']  ."</td>";
					echo "<td>" .$row['bom']  ."</td>";
					echo "<td>" .$row['abi']  ."</td>";
					echo "<td>" .$row['acs']  ."</td>";
					echo "<td>" .$row['pce']  ."</td>";
					echo "<td>" .$row['elective']  ."</td>";
					echo "<td>" .$row['major']  ."</td>";
					echo "<td>" .$row['sca']  ."</td>";
					echo "<td>" .$row['total']  ."</td>";
					echo "<td>" .$row['page']  ."</td>";
					echo "</tr>";
				}
			}
		?>
	</table>
</body>
</html>