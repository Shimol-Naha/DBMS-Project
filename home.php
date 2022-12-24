<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<style>
body{
	margin:0;
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
div.gallery {
  margin: 20px;
  border: 1px solid white;
  float: left;
  width: 295px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body bgcolor="orange";>
<ul>
<li><a href="http://localhost/bloodbank/donor.php">Donor Registration Form</a></li>
<li><a href="http://localhost/bloodbank/donorlist.php">Blood Donor List</a></li>
<li><a href="http://localhost/bloodbank/bloodstock.php">Stock Blood List</a></li>
<li><a href="http://localhost/bloodbank/bloodrequest.php">Blood Request</a></li>
<li style="float:right"><a href="http://localhost/bloodbank/admin.php">Logout</a></li>
<li style="float:right"><a href="http://localhost/bloodbank/contact.php">Contact</a></li>
<li style="float:right"><a href="http://localhost/bloodbank/home.php">Home</a></li>
</ul>
<h1><marquee behavior="alternate" bgcolor="pink" direction="left" scrollamount="10">Blood Bank Management System</marquee></h1>

<div class="gallery">
  <a href="http://localhost/bloodbank/donor.php">
    <img src="11.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Donor’s age must be between 18-60 years old, and their weight should be more than 45 kgs to be able to donate blood. The average adult has about 10 pints of blood in his body. Roughly one pint is given during a donation. A healthy donor may donate blood every 56 days or 8 weeks. If you want, you can register.</div>
</div>

<div class="gallery">
  <a href="http://localhost/bloodbank/donorlist.php">
    <img src="22.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Every blood donor is a lifesaver. A single pint can save three lives, a single gesture can create a million smiles. Because of the constant need for blood donations, blood collecting organizations all over the world are trying to reach as many possible donors as they can. Here you can see all types of blood donors list.</div>
</div>

<div class="gallery">
  <a href="http://localhost/bloodbank/bloodstock.php">
    <img src="55.webp" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Donate blood because you never know how helpful it might be to someone. The blood you donate gives someone another chance at life. One day that someone may be a close relative, a friend, a loved one or even you. So, help the desperate for the sake of their happiness. Here you can see the list of all blood groups.</div>
</div>
<div class="gallery">
  <a href="http://localhost/bloodbank/bloodrequest.php">
    <img src="44.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Few drops of blood can give someone a new life; just like, two Polio drops can give a Polio free life. Don’t waste it because we cannot give God in return of this precious life, but we can Thank Him by helping others through blood donation. Here you can order blood of any group if available.</div>
</div>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<div class="dd" id="footer"><h4 align="center">@Don't forget something that makes you HAPPY.</h4></div>
</div>
</body>
</html>