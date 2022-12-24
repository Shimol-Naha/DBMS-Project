<!DOCTYPE html>
<html>
<title>DonorList</title>
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
	
	width:70%;
	
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

<h1><marquee behavior="alternate" bgcolor="pink" direction="left" scrollamount="10">Blood Donor List</marquee></h1>
<h2><b><center>"Search your desired blood donor list.."</center></b></h2>
<form action="" method="post">
<center>

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
<td><font size="6">Gender:</font></td>
<td><select name="gender">
<option>Male</option>
<option>Female</option>
</select></td>
</tr>
<tr>
<td><font size="6">Age:</font></td>
<td><input type="text" name="age" required>
</input></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Search" name="sub"/>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
</form>
<table></br></br>
<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","adminlogin") or die("Connection Failed");
if(isset($_POST['city']) && isset($_POST['bgroup']) && isset($_POST['gender']) && isset($_POST['age']))
{
 $inCity=$_POST["city"];
 $inBg=$_POST["bgroup"];
 $gn=$_POST["gender"];
 $age=$_POST["age"];
 if(!empty($inCity) && !empty($inBg) && !empty($gn)){
	$query="select * from donor_registration where city='$inCity' && bgroup='$inBg' && gender='$gn' && age>='$age'";
	$sql_result=mysqli_query($connect,$query);
	$s_count=mysqli_num_rows($sql_result);
	if($s_count>0)
	{
echo"		
<tr>
<th><center><b>Name</b></center></th>
<th><center><b>Email</b></center></th>
<th><center><b>Age</b></center></th>
<th><center><b>Mobile</b></center></th>
<th><center><b>Gender</b></center></th>
<th><center><b>City</b></center></th>
<th><center><b>Blood Group</b></center></th>
</tr>";
		while($val=mysqli_fetch_assoc($sql_result))
		{
			echo "<tr>
			<td>".$val["name"]."</td>
			<td>".$val['email']."</td>
			<td>".$val['age']."</td>
			<td>".$val['mobile']."</td>
			<td>".$val['gender']."</td>
			<td>".$val['city']."</td>
			<td>".$val['bgroup']."</td>
			</tr>";
		}
	}
	else echo "<center>SORRY! Not found any donor.</center>";
	}
}
?>
</center></table></br>

</body>
</html>