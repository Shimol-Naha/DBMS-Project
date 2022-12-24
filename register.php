
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body bgcolor="orange">
<div id="full">
<div id="inner_full"></br></br>
<h1><marquee behavior="alternate" bgcolor="pink" direction="left" scrollamount="10">Register Here</marquee></h1></br></br>
<div id="body">
</br>
<form action="" method="post">
<center>
<table>
<tr>
<td><br></td>
</tr>
<tr>
<td><font size="6">Full Name:</font></td>
<td><input type="text" name="un" required></input></td>
</tr>
<tr>
<td><font size="6" >Password :</font></td>
<td><input type="password" name="pw" required></input></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Register" name="sub"/>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td><br></td>
</tr>
</table>
</center>
</form>
</br>
</div>
<?php 
$connect=mysqli_connect("127.0.0.1:3307","root","","adminlogin") or die("Connection Failed");
if($_SERVER['REQUEST_METHOD']=='POST')
{
 $Username=$_POST["un"];
 $Password=$_POST["pw"];
 $query="select * from admin where username='$Username'";
 $mysql_result=mysqli_query($connect,$query);
 $s_count=mysqli_num_rows($mysql_result);
 if($s_count==0){
 $sql="insert into admin(username,password) values('".$Username."','".$Password."')";
if(mysqli_query($connect,$sql))
{
header('location:admin.php');
	
}
 }
else
{
?>
	<script type="text/javascript">alert('Registration Failed');</script>
<?php	
	echo"<center>Username already exists. Please enter a different username.".mysqli_error($connect);
}

}
?></br></br>
</body>
</html>