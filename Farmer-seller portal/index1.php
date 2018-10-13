<!DOCTYPE html>
<html>
<head>
<title>AGRI TECH</title>
<link rel="stylesheet" type="text/css" href="./style3.css">
<body>
<div class="wrapper">
	<img src="logo.png" class="logo1">
	<h2 class="agri1">AGRI TECH</h2>

	<header>
	<div class="tab"> 
	  <button class="tablinks" onclick="openHome(event, 'Home')">Home</button> 
	  <button class="tablinks" onclick="openLogin(event, 'Login')">Login</button> 
	  <li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">List of products</a>
			<div class="dropdown-content">
					<a href="#">Wheat</a>
					<a href="#">Rice</a>
					<a href="#">Corn</a>
					<a href="#">Sugarcane</a>
					<a href="#">Jowar millet</a>
					<a href="#">Cotton</a>
			</div>
	  </li>
	  <button class="tablinks" onclick="openFarmar Helpline(event, 'Farmer Helpline')">Farmer Helpline</button> 
	  <button class="tablinks" onclick="openLogout(event, 'Logout')">Logout</button> 
	  <input type="text" placeholder="Search..">
	 </div>
	</header>

	<section class="login">
	<div class="loginbox">
	<img src="back2.jpg" class="avatar">
		<h1>Register</h1>
		<form>
			
			<form action="response.php" method="GET">
			<p>Name</p>
			<input type="text" placeholder="Enter Name" id="user" name="name" required=""> 

			<div class="form-group">
			<label>CHOOSE STATE: <br></label>
				<select class="form-control" onchange="myfun(this.value)">
					<option>Select state</option>
					<option>Maharashtra</option>
					<option>Gujrat</option>
					<option>Delhi</option>
					<option>Tamilnadu</option>
				</select>
			</div>

 			<div class="form-group">
			<label>CHOOSE CITY: <br></label>
				<select class="form-control" id="city">
					<option>Select City</option>
				</select>
			</div>

			<p>Address</p>
			<input type="text" name="address" placeholder="Enter Address" id="user" required=""> 

			<p>Email Id</p>
			<input type="text" name="emailid" placeholder="Enter Username" id="user" required=""> 

			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username" id="user" required=""> 

			<p>Password</p>
			<input type="password" name="password" placeholder="Enter password" id="pass" name="pass" required=""> 

			<p>Confirm Password</p>
			<input type="password" name="cpassword" placeholder="Renter password" id="pass" required=""> 

			<input type="submit" name="" value="Register" class="loginBtn">
			<a href="#">Already have an account?</a>
		</form>
	</div>
	</section>
</div>

<script type="text/javascript">
function myfun(data)
{
	alert(data);
	var req = new XMLHttpRequest();
	req.open("GET","http://localhost/response.php?datvalues"+data,true); 
	req.send();
	req.onreadystatechange=function()
	{
		if(req.readystate==4 &&  req.status==200)
		{
			document.getElementById('city').innerHTMl = req.responseText;
		}
	}
}
</body>
</head>
</html>
