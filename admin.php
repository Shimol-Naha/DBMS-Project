
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<style>
a{
	text-decoration: none;
	text-align: center;
}
echo{text-align: center;
}
</style>
</head>
<body bgcolor="orange">
<div id="full">
<div id="inner_full"></br></br>
<h1><marquee behavior="alternate" bgcolor="pink" direction="left" scrollamount="10">Please Login First</marquee></h1></br></br>
<div id="body">
</br>
<form action="" method="post">
<center>
<table>
<tr>
<td><br></td>
</tr>
<tr>
<td><font size="6">Username:</font></td>
<td><input type="text" name="un" required></input></td>
</tr>
<tr>
<td><font size="6" >Password :</font></td>
<td><input type="password" name="pw" required></input></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Login" name="sub"/>
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
</div>
<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","adminlogin") or die("Connection Failed");
if(isset($_POST['un']) && isset($_POST['pw']))
{
	$username=$_POST['un'];
	$password=$_POST['pw'];
	if(!empty($username) && !empty($password)){
	$query="select id from admin where username='$username' && password='$password'";
	$sql_result=mysqli_query($connect,$query);
	$s_count=mysqli_num_rows($sql_result);
	if($s_count>0)
	{
		header('location:home.php');
	}
	else echo "<center>Login Unsuccessful</center>";
	}
}
?><br>
<div class="a">
<td><b><center>Not a member?<a href="http://localhost/bloodbank/register.php"> Register</a></center></b></td>
</div>
</body>
</html>