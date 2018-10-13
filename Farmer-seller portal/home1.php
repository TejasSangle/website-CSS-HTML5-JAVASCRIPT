

<!DOCTYPE html>
<html>
<head>
<title>AGRI TECH</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<body>
<div class="wrapper">
	<img src="logo.png" class="logo1">
	<h2 class="agri1">AGRI TECH</h2>
	<div class="tab">
<a href="slider1.php"><button>Home</button></a>
 <a href="register123.php"><button>register</button></a>
  <a href="gallery.php"><button>Our products</button></a>
   <a href="helpline.php"><button>Farmer Helpline</button></a>
  <a href="About_us.php"><button>about</button></a>
  <a href="contact1.php"><button>contact</button></a>
  <button class="tablinks" onclick="openLogout(event, 'Logout')">Logout</button>
 </div>
	<div class="loginbox">
	<img src="back2.jpg" class="avatar">
		<h1>Login</h1>
		<form action="process2.php" method="POST">
			<p>Username</p>
			<input type="text" name="uname" placeholder="Enter Username" /required> 
			<p>Password</p>
			<input type="password" name="pass" placeholder="Enter password" /required> 
			<input type="submit" name="login" value="login" class="loginBtn">
			
			<a href="register123.php">Create a new account</a>
		</form>
	</div>
</div>
</body>    
</head>
</html>
