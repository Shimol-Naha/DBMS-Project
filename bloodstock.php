
<!DOCTYPE html>
<html>
<head>
<title>Blood Stock List</title>
<style>
body{
	margin:0;
}
table,td,th{
	border:1px solid black;
	text-align: center;	
}
th{
	background-color: #a52a2a;
	color:white;
}
td{
	background-color: #f0f8ff;
	color:black;
}
table{
	
	width:40%;
	
}
ul{
	list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
	background-color:black;
}
li{
	display:inline-block;float: left;	
}

li a{
	color:#fff;display: block;
	text-decoration: none;
	padding:10px 25px;
	font-family:poppins;
	font-size:20px;text-align: center;
}
li a:hover{
	background:orange;
	color:#333;
}
</style>
</head>
<body bgcolor="orange">
<ul>
<li><a href="http://localhost/bloodbank/donor.php">Donor Registration Form</a></li>
<li><a href="http://localhost/bloodbank/donorlist.php">Blood Donor List</a></li>
<li><a href="http://localhost/bloodbank/bloodstock.php">Stock Blood List</a></li>
<li><a href="http://localhost/bloodbank/bloodrequest.php">Blood Request</a></li>
<li style="float:right"><a href="http://localhost/bloodbank/admin.php">Logout</a></li>
<li style="float:right"><a href="http://localhost/bloodbank/contact.php">Contact</a></li>
<li style="float:right"><a href="http://localhost/bloodbank/home.php">Home</a></li>
</ul>

<h1><marquee behavior="alternate" bgcolor="pink" direction="left" scrollamount="10">Blood Stock List</marquee></h1>
<br><center>
<table>
<tr>
<th><center><b>Blood Group</b></center></th>
<th><center><b>Stock</b></center></th>
</tr>
<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","adminlogin") or die("Connection Failed");
$sql="SELECT count(id) AS total FROM donor_registration WHERE bgroup='A+'";
$result=mysqli_query($connect,$sql);
$val=mysqli_fetch_assoc($result);
$row=$val['total'];
echo "<tr>
<td>A+</td>
<td>$row</td>
</tr>";
$sql="SELECT count(id) AS total FROM donor_registration WHERE bgroup='B+'";
$result=mysqli_query($connect,$sql);
$val=mysqli_fetch_assoc($result);
$row=$val['total'];
echo "<tr>
<td>B+</td>
<td>$row</td>
</tr>";
$sql="SELECT count(id) AS total FROM donor_registration WHERE bgroup='O+'";
$result=mysqli_query($connect,$sql);
$val=mysqli_fetch_assoc($result);
$row=$val['total'];
echo "<tr>
<td>O+</td>
<td>$row</td>
</tr>";
$sql="SELECT count(id) AS total FROM donor_registration WHERE bgroup='AB+'";
$result=mysqli_query($connect,$sql);
$val=mysqli_fetch_assoc($result);
$row=$val['total'];
echo "<tr>
<td>AB+</td>
<td>$row</td>
</tr>";
$sql="SELECT count(id) AS total FROM donor_registration WHERE bgroup='A-'";
$result=mysqli_query($connect,$sql);
$val=mysqli_fetch_assoc($result);
$row=$val['total'];
echo "<tr>
<td>A-</td>
<td>$row</td>
</tr>";
$sql="SELECT count(id) AS total FROM donor_registration WHERE bgroup='B-'";
$result=mysqli_query($connect,$sql);
$val=mysqli_fetch_assoc($result);
$row=$val['total'];
echo "<tr>
<td>B-</td>
<td>$row</td>
</tr>";
$sql="SELECT count(id) AS total FROM donor_registration WHERE bgroup='O-'";
$result=mysqli_query($connect,$sql);
$val=mysqli_fetch_assoc($result);
$row=$val['total'];
echo "<tr>
<td>O-</td>
<td>$row</td>
</tr>";
$sql="SELECT count(id) AS total FROM donor_registration WHERE bgroup='AB-'";
$result=mysqli_query($connect,$sql);
$val=mysqli_fetch_assoc($result);
$row=$val['total'];
echo "<tr>
<td>AB-</td>
<td>$row</td>
</tr>";
?>
</center></table>
</br></br>
</br></br>
<div class="dd" id="footer"><h4 align="center">Donate Blood Because You Never Know How Helpful It Might Be To Someone.</h4></div>
</div>
</div>
</body>
</html>