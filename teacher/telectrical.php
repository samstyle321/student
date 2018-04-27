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
	<center><h4>Electrical 6th Sem </h4>
	<h4>Internal</h4></center>
	<table border = '3' class="table-responsive">
		<tr>
			<th>Roll-No.</th>
			<th>Name</th>
			<th>BOM</th>
			<th>EM</th>
			<th>UEE</th>
			<th>Elective</th>
			<th>Major</th>
			<th>PCS</th>
			<th>SCA</th>
			<th>Total</th>
			<th>%age</th>
		</tr>
		
	
		<?php

			$sql = "SELECT * FROM electrical;";
			$result = mysqli_query($db,$sql);
			$resultCheck = mysqli_num_rows($result);
	
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" .$row['rollno']  ."</td>";
					echo "<td>" .$row['name']  ."</td>";
					echo "<td>" .$row['bom']  ."</td>";
					echo "<td>" .$row['em']  ."</td>";
					echo "<td>" .$row['uee']  ."</td>";
					echo "<td>" .$row['elective']  ."</td>";
					echo "<td>" .$row['major']  ."</td>";
					echo "<td>" .$row['pcs']  ."</td>";
					echo "<td>" .$row['sca']  ."</td>";
					echo "<td>" .$row['total']  ."</td>";
					echo "<td>" .$row['page']  ."</td>";
					echo "</tr>";
				}
			}
		?>
	</table>
	<center><a href="updateelectr.php"><button id="btn">Click Here To Update Records</button></a></center>
</body>
</html>