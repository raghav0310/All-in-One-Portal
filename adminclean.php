<!DOCTYPE html>
<html>
<head>
	<title>JECRC ALL IN ONE PORTAL</title>
	<link rel="stylesheet" type="text/css" href="adminhome.css">
</head>
<body >

	<header>
		<div class="main">
			<ul>
				<li><a href="adminhome.php"> Home </a></li>
				<li><a href="adminclean.php"> Cleanliness </a></li>
				<li><a href="adminlost.php"> Lost/Found </a></li>
				<li><a href="event.html"> Event Notices </a></li>
				<li><a href="#"> canteen order </a></li>
			</ul>
		</div>
	</header>
	<br>
	<br>

	<h2>Area Required To Clean</h2>
	<?php

		$servername="localhost";
		$user="root";
		$psw="";
		$dbname="test";
		$conn=mysqli_connect($servername,$user,$psw,$dbname);
		if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
		try{
			$sql="SELECT * FROM ADMINCLEAN";
			$result=$conn->query($sql);
			echo "<table border='1' cellpadding='5' width='95%' ALIGN='CENTER'>";
			echo "<tr>";
				echo "<th>Student Name</th>";
				echo "<th>Student Id</th>";
				echo "<th>Student Mobile</th>";
				echo "<th>Area</th>";
			echo "</tr>";
			while($row=$result->fetch_assoc())
			{
				echo "<tr>";
					echo "<td>".$row["s_name"]."</td>";
					echo "<td>".$row["s_id"]."</td>";
					echo "<td>".$row["s_mob"]."</td>";
					echo "<td>".$row["area"]."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
		$conn=null;
?>
</body>
</html>