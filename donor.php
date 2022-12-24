<!DOCTYPE html>
<html>
<title>Donor Registration</title>
<style>
body{
	margin:0;
}
.dd{
	color:black;
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
<h1><marquee behavior="alternate" bgcolor="pink" direction="left" scrollamount="10">Donor Registration Form</marquee></h1>
<form action="" method="POST" >
<center>
<table>
<tr>
<td></td>
</tr>
<tr>
<td><font size="6">Name:</font></td>
<td><input type="text" name="name" required></input></td>
</tr>
<tr>
<td><font size="6" >Email:</font></td>
<td><input type="email" name="email" required></input></td>
</tr>
<tr>
<td><font size="6" >Age:</font></td>
<td><input type="text" name="age" required></input></td>
</tr>
<tr>
<td><font size="6">Mobile:</font></td>
<td><input type="text" name="phn" required pattern="{11}"/></td>
</tr>
<tr>
<td><font size="6">Gender:</font></td>
<td><select name="gender">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select></td>
</tr>
<tr>
<td><font size="6">City:</font></td>
<td><select name="city">
<option value="Dhaka">Dhaka</option>
<option value="Cumilla">Cumilla</option>
<option value="Sylhet">Sylhet</option>
<option value="Chattogram">Chattogram</option>
<option value="Rajshahi">Rajshahi</option>
<option value="Khulna">Khulna</option>
<option value="Sylhet">Barisal</option>
<option value="Chattogram">Rangpur</option>
<option value="Rajshahi">Mymensingh</option>
</select></td>
</tr>
<tr>
<td><font size="6">Blood Group:</font></td>
<td><select name="bgroup">
<option>O+</option>
<option>A+</option>
<option>B+</option>
<option>AB+</option>
<option>O-</option>
<option>A-</option>
<option>B-</option>
<option>AB-</option>
</select></td>
</tr>
<tr>
<td><font size="6">Upload Photo:</font></td>
<td><input type="file" name="image"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Submit" name="sub"/>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
</table>
</center>
</form>

<?php
$connect=mysqli_connect("127.0.0.1:3307","root","","adminlogin") or die("Connection Failed");
if($_SERVER['REQUEST_METHOD']=='POST')
{
 $inName=$_POST["name"];
 $inEmail=$_POST["email"];
 $inAge=$_POST["age"];
 $inMob=$_POST["phn"];
 $ingn=$_POST["gender"];
 $inCity=$_POST["city"];
 $inBg=$_POST["bgroup"];
 $inimg=$_POST["image"];
 $sql="insert into donor_registration(name,email,age,mobile,gender,city,bgroup,file) values('".$inName."','".$inEmail."','".$inAge."','".$inMob."','".$ingn."','".$inCity."','".$inBg."','".$inimg."')";
if(mysqli_query($connect,$sql))
{
echo "<center>Record Saved</center>";
}
else
{	
	echo"<center>Error in inserting data</center>";
}
}

?><br>

<div class="dd" id="footer"><h4 align="center">Donate Blood Because You Never Know How Helpful It Might Be To Someone.</h4></div>
</div>
</body>
</html>
