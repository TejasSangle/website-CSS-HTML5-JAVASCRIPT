<?php
	session_start();
	$conn=mysqli_connect ("localhost", "root", "","samplelogindb") or die ("unable to connect");
  

    if(isset($_POST['login']))
			{
				$uname=$_POST['uname'];
				$pass=$_POST['pass'];
                
				$query = "select * from userinfodb WHERE uname='$uname' AND pass='$pass'";
                
				//echo $query;
				$query_run = mysqli_query($conn,$query);
                
				//echo mysql_num_rows($query_run);
				if(mysqli_num_rows($query_run)>0)
				{
                    //valid
					$_SESSION['uname']= $uname;
					header('location:slider1.php');
					mysqli_free_result($query_run);
				}
				else
				{
                    //invalid
				    echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
				}
                
            }
		
		?>
