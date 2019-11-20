<!DOCTYPE html>
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

<?php
	// get visitors ip

	function get_ip(){
		if(isset($_SERVER['HTTP_CLIENT_IP'])){
			return $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else{
			return(isset($_SERVER['REMOTE_ADDR'])? $_SERVER['REMOTE_ADDR'] :'');
		}
	}
	$IP=GET_IP();
	//GET DATA
	$query=@unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
	if($query && $query['status']=='success'){
		echo "ISP :".$query['isp']."<br/>";
		echo "COUNTRY :".$query['country']."<br/>";
		echo "REGION NAME :".$query['regionName']."<br/>";
		echo "AS :".$query['as']."<br/>";
		echo "ORG :".$query['org']."<br/>";
		echo "ZIP :".$query['zip']."<br/>";
		echo "CIty :".$query['city']."<br/>";
	}
	else
	{
		echo 'No Location Available!!';
	}
?>

<div class="lost">
	<form method="post" id="lost" action="<?PHP $_SERVER['PHP_SELF']?>">
		<h2> Cleanliness Form</h2>
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
		<label>Unhigenic Area :</label><br>
		<input type="text" name="sarea" placeholder="Enter the location of area to be cleaned" id="name"><br><br>
		<!--<input type="submit" id="sub" name="box" value="Get Location">&nbsp;&nbsp;&nbsp;
		<input type="text" name="sloc" placeholder=""><br><br>-->
		<input type="submit" name="box" id="sub" >
	</form>
	<?php
	FUNCTION CLICK()
	{
	$D=$_POST["sname"];
	$E=$_POST["sid"];
	$F=$_POST["smobile"];
	$G=$_POST["sarea"];
	$servername="localhost";
	$user="root";
	$psw="";
	$dbname="test";
	$conn=mysqli_connect($servername,$user,$psw,$dbname);
	if(!$conn)
	{
		die("connection failed:".mysqli_connect_error());
	}
	$sql="insert into adminclean values('$D','$E','$F','$G')";
	$result=mysqli_query($conn,$sql);
	$r="select * from adminclean";
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

</div>
</body>
</html>