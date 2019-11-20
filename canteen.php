<!DOCTYPE html>
<html>
<head>
	<title>JECRC ALL IN ONE PORTAL</title>
	<link rel="stylesheet" type="text/css" href="canteen.css">
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

	<form name=f1>
<table border=3  CELLPADDING=5>
<tr>
<td COLSPAN=6><FONT SIZE=7 COLOR=GREEN>SPECIAL COMBO 1</FONT><BR>
<FONT SIZE=4>(MASALA DOSA + SOFT DRINK(200ML) + PAV BHAJI @89)
</td>
</tr>
<tr>
<td COLSPAN=6><FONT SIZE=7 COLOR=GREEN>SPECIAL COMBO 2</FONT><BR>
<FONT SIZE=4>(FRIED IDLY + ICE TEA  @69)
</td>
</tr>
<tr>
<td COLSPAN=6><FONT SIZE=7 COLOR=GREEN>SPECIAL COMBO 3</FONT><BR>
<FONT SIZE=4>(MASALA DOSA + SOFT DRINK(200ML) + ITALIAN DOSA @120)
</td>
</tr>

<tr>
<th>item</th>
<th>rate</th>
<th></th>
<th>item</th>
<th>rate</th>
<th></th>
</tr>
<tr>
<td>tea </td>
<td>6</td>
<td><input type=checkbox name=A value=6></td>
<th>south indian</th>
<td></td>
<td></td>
</tr>
<tr>
<td>coffee </td>
<td>10</td>
<td><input type=checkbox name=B value=10 ></td>
<td>masala dosa</td>
<td>50</td>
<td><input type=checkbox name=C value=50></td>
</tr>
<tr>
<td>cold coffee </td>
<td>30</td>
<td><input type=checkbox name=D value=30> </td>
<td>paneer dosa</td>
<td>60</td>
<td><input type=checkbox name=E value=60></td>
</tr>
<tr>
<td>juices(tetra pack) </td>
<td>20</td>
<td><input type=checkbox name=F value=20></td>
<td>cheese dosa</td>
<td>60</td>
<td><input type=checkbox name=G value=60></td>
</tr>
<tr>
<td>mineral water</td>
<td>20</td>
<td><input type=checkbox name=H value=20></td>
<td>itlian dosa</td>
<td>60</td>
<td><input type=checkbox name=I value=60> </td>
</tr>
<tr>
<td>pastry </td>
<td>6</td>
<td><input type=checkbox name=J value=6></td>
<td>fried idly</td>
<td>50</td>
<td><input type=checkbox name=K value=50></td>
</tr>
<tr>
<td>lassi </td>
<td>20</td>
<td><input type=checkbox name=L value=20></td>
<td>idly sambhar</td>
<td>40</td>
<td><input type=checkbox name=M value=40></td>
</tr>
<tr>
<td>ice tea</td>
<td>30</td>
<td><input type=checkbox name=N value=30></td>
<td>pav bhaji</td>
<td>40</td>
<td><input type=checkbox name=O value=40></td>
</tr>
<tr>
<td COLSPAN=3>SPECIAL COMBO</td>
<td COLSPAN=2>1</td>
<td><input type=checkbox name=P value=89></td>
</tr>
<tr>
<td COLSPAN=3>SPECIAL COMBO</td>
<td COLSPAN=2>2</td>
<td><input type=checkbox name=Q value=69></td>
</tr>
<tr>
<td COLSPAN=3>SPECIAL COMBO</td>
<td COLSPAN=2>3</td>
<td><input type=checkbox name=R value=120></td>
</tr>
<tr>
<td COLSPAN=2>NAME</td>
<td COLSPAN=4><INPUT TYPE=TEXT NAME="NAME" PLACEHOLDER="Enter your name" size=40></td>
</tr>
<tr>
<td COLSPAN=2>LOGIN ID</td>
<td COLSPAN=4><INPUT TYPE=TEXT NAME="ID" PLACEHOLDER="Enter your login id" size=40></td>
</tr>
<tr>
<td COLSPAN=2>BLOCK Where You Want The Order</td>
<tH><INPUT TYPE=radio NAME="r1">A</tH>
<tH><INPUT TYPE=radio NAME="r1">B</tH>
<tH><INPUT TYPE=radio NAME="r1">C</tH>
<tH><INPUT TYPE=radio NAME="r1">D</tH>
</tr>
<tr>
<td COLSPAN=2>BILL TOTAL</td>
<td COLSPAN=3><INPUT TYPE=TEXT NAME="TOTAL" size=40></td>
<td><INPUT TYPE=SUBMIT VALUE="TOTAL" NAME=TTL onClick=SS()></TD>
</tr>
<tr>
<td COLSPAN=2>CONFIRM</td>
<td COLSPAN=4><INPUT TYPE=SUBMIT NAME="BOX" PLACEHOLDER="SUBMIT" size=40 ><td>
</tr>

</table>