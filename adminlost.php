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
	<h2>View of Lost And Found</h2>
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
			$sql="SELECT * FROM ADMINLOST";
			$result=$conn->query($sql);
			echo "<table border='1' cellpadding='5' width='95%' ALIGN='CENTER'>";
			echo "<tr>";
				echo "<th>Product Name</th>";
				echo "<th>Product Model</th>";
				echo "<th>Product Color</th>";
				echo "<th>Student Name</th>";
				echo "<th>Student Id</th>";
				echo "<th>Student Mobile</th>";
				echo "<th>Product Description</th>";
				echo "<th>Lost / Found </th>";
			echo "</tr>";
			while($row=$result->fetch_assoc())
			{
				echo "<tr>";
					echo "<td>".$row["p_name"]."</td>";
					echo "<td>".$row["p_model"]."</td>";
					echo "<td>".$row["p_color"]."</td>";
					echo "<td>".$row["s_name"]."</td>";
					echo "<td>".$row["s_id"]."</td>";
					echo "<td>".$row["s_mob"]."</td>";
					echo "<td>".$row["p_desc"]."</td>";
					echo "<td>".$row["lofo"]."</td>";
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