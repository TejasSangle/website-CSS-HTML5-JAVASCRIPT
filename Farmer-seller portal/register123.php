<?php
	session_start();
	$conn=mysqli_connect ("localhost", "root", "") or die ("unable to connect");
    mysqli_select_db ($conn,'samplelogindb');
?>





<!DOCTYPE html>
<html>
<head>
<title>AGRI TECH</title>
<link rel="stylesheet" type="text/css" href="style3.css">
<body>
<div class="wrapper">
	<img src="logo.png" class="logo1">
	<h2 class="agri1">AGRI TECH</h2>

	<header>
	<div class="tab">
<a href="slider1.php"><button>Home</button></a>
  <a href="gallery.php"><button>Our products</button></a>
   <a href="helpline.php"><button>Farmer Helpline</button></a>
  <a href="About_us.php"><button>about</button></a>
  <a href="contact1.php"><button>contact</button></a>
  <button class="tablinks" onclick="openLogout(event, 'Logout')">Logout</button>
 </div>
	</header>

	<section>
           <div class="registration-back"> 
            <div class="registration">
                <form action="register123.php" method="POST">
                <h1>Registration</h1>
                <label><b>FIRST NAME :</b></label>
                <input type="text" placeholder="Enter First name" name="firstname" required id="justforfont" >  
                
                <br>
                <label><b>LAST NAME : </b></label>
                <input type="text" placeholder="Enter Last name" name="lastname" required id="justforfont">  
				
				

<h3>city:</h3>

				<form action=""> 
 <input type="text" id="txt1" onkeyup="showHint(this.value)">
 <p>Suggestions: <span id="txtHint"></span></p> 
</form>



<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "info.php?q="+str, true);
  xhttp.send();   
}
                
 </script>            

<form>
			   <br>
                <label><b>EMAIL ID : </b></label>
                <input type="text" placeholder="Enter Email" name="email" required id="justforfont">
                
                
                <br>
                <label><b>USERNAME : </b></label>
                <input type="text" placeholder="Enter Username" name="username" required id="justforfont">
                
                <br>
                <label><b>PASSWORD : </b></label>
                <input type="password" placeholder="Enter Password" name="password" required id="justforfont">
                
                <br>
                <label><b>REPEAT PASSWORD : </b></label>
                <input type="password" placeholder="Enter Password again" name="cpassword" required id="justforfont">
                
                <br>
                <input name="register" type="submit" value="register">  
                
                </form>
				</section>
				 <?php
				 
				 
			if(isset($_POST['register']))
			{
				$firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $email=$_POST['email'];
                $username=$_POST['username'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from userinfodb WHERE username='$username'";
					//echo $query;
                    
				    $query_run = mysqli_query($conn,$query);
                    
				    //echo mysql_num_rows($query_run);
                   
				    if(mysqli_num_rows($query_run)>0)
				    {
				        echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
				    }
				    else
				    {
				        $query = "INSERT INTO userinfodb (firstname,lastname,email,username,password)values('$firstname','$lastname','$email','$username','$password')";
                            
                        $query_run = mysqli_query($conn,$query);
                            
				        if($query_run)
				        {
				            echo '<script type="text/javascript">alert("User Registered.. Go to Login Page to Login")</script>';
				        }
				        else
				        {
				            echo '<script type="text/javascript">alert("Error ")</script>';
				        }
                    }
                }
                else
                {
                    echo '<script type="text/javascript">alert("password and confirm password do not match")</script>';
                }
            }
			
		?>
	

</div>
</body>
</head>
</html>
