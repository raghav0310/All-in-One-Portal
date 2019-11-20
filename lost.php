<html>
<head>
	<title>JECRC ALL IN ONE PORTAL</title>
	<link rel="stylesheet" type="text/css" href="event.css">
</head>
<body>

	<header>
		<div class="main">
			<ul>
				<li><a href="home.php"> Home </a></li>
				<li><a href="#"> About Us </a></li>
				<li><a href="clean.php"> Cleanliness </a></li>
				<li><a href="lost.php"> Lost/Found </a></li>
				<li><a href="event.html"> Event Notices </a></li>
				<li><a href="canteen.php"> canteen order </a></li>
				<li><a href="#"> Contact Us </a></li>
			</ul>
		</div>
	</header>
	<br>
	<br>

	<div class="lost">
	<form method="post" id="lost" action="">
		<h2> Lost / Found Form</h2>
		<label>Product name :</label><br>
		<input type="text" name="pname" placeholder="Enter product name" id="name"><br><br>
		<label>Product model :</label><br>
		<input type="text" name="pmodel" placeholder="Enter product model" id="name"><br><br>
		<label>Product color :</label><br>
		<input type="text" name="pcolor" placeholder="Enter product color" id="name"><br><br>
		<label>Student name :</label><br>
		<input type="text" name="sname" placeholder="Enter student name" id="name"><br><br>
		<label>Student Id :</label><br>
		<input type="text" name="sid" placeholder="Enter student Id" id="name"><br><br>
		<label>Student Phone no. :</label><br>
		<select id="ph" >
			<option>+91</option>
			<option>+92</option>
			<option>+93</option>
			<option>+94</option>
		</select>
		<input type="number" name="smobile" placeholder="Enter mobile number" id="num"><br><br>
		<label>Product Description :</label><br>
		<textarea rows="10" cols="75" name=pdesc style="border-radius: 5px;" placeholder="Enter the extra details here to identify the product properly"></textarea><br><br>
		<label>Product Found OR Lost :</label><br>
		<input type="radio" name="lost" value="1" id="lost"><span id="lost"> &nbsp; Lost </span>&nbsp;&nbsp;
		<input type="radio" name="lost"  value="0" id="found"><span id="found"> &nbsp; Found </span>&nbsp;&nbsp;<br><br>
		<input type="submit" name="box" id="sub" >
	</form>
</div>

<?php
	FUNCTION CLICK()
{
	$A=$_POST["pname"];
	$B=$_POST["pmodel"];
	$C=$_POST["pcolor"];
	$D=$_POST["sname"];
	$E=$_POST["sid"];
	$F=$_POST["smobile"];
	$G=$_POST["pdesc"];
	$H=$_POST["lost"];
	$servername="localhost";
	$user="root";
	$psw="";
	$dbname="test";
	$conn=mysqli_connect($servername,$user,$psw,$dbname);
	if(!$conn)
	{
		die("connection failed:".mysqli_connect_error());
	}
	$sql="insert into adminlost values('$A','$B','$C','$D','$E','$F','$G','$H')";
	$result=mysqli_query($conn,$sql);
	$r="select * from adminlost";
	$c=mysqli_query($conn,$r);
	if(mysqli_num_rows($c)>0)
	{
		//echo "NEW RECORD CREATED successful";
	}
	else
	{
		//echo "error inserting record: ".$conn->error;
	}
	$conn->close();
	}
	IF(ISSET($_POST["box"]))
	{
		CLICK();
	}

?>
</body>
</html>