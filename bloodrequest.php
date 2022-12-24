<!DOCTYPE html>
<html>
<title>Blood Request</title>
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

<h1><marquee behavior="alternate" bgcolor="pink" direction="left" scrollamount="10">Blood Request Form</marquee></h1><br>
<h2><b><center>"Select your city & your needed blood group"</center></b></h2></br>
<form action="" method="post">
<center>
<table>
<tr>
<td></td>
</tr>
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
<td></td>
<td><input type="submit" value="Confirm" name="sub"/>
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
if(isset($_POST['city']) && isset($_POST['bgroup']))
{
 $inCity=$_POST["city"];
 $inBg=$_POST["bgroup"];
 if(!empty($inCity) && !empty($inBg)){
	$query="select id from donor_registration where city='$inCity' && bgroup='$inBg'";
	$sql_result=mysqli_query($connect,$query);
	$s_count=mysqli_num_rows($sql_result);
	if($s_count>0)
	{
		echo "<center>Your order has been confirmed!</center>";
	}
	else echo "<center>Insufficient  Stock!</center>";
	}
}
?>
</br>

</body>
</html>