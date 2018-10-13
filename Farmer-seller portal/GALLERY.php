<!DOCTYPE HTML>
<HEAD>

<TITLE>
hi

</TITLE>

<link rel="stylesheet" type="text/css" href="style/newGAL.CSS" />
</HEAD>

<body background="images/back.png">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alright";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit']))
{
$cid=$_POST['cid'];
$quantity=$_POST['quantity'];


$query = "INSERT INTO cart (cid,quantity)values('$cid','$quantity')";

$query_run = mysqli_query($conn,$query);


}
mysqli_close($conn);
?>




<div ID="header_wrapper">
 <img src="../images/logo.png" alt="logo">
</div>
<div class="tab">
<a href="slider1.php"><button>Home</button></a>
  <a href="gallery.php"><button>Our products</button></a>
   <a href="helpline.php"><button>Farmer Helpline</button></a>
  <a href="About_us.php"><button>about</button></a>
  <a href="contact1.php"><button>contact</button></a>
  <button class="tablinks" onclick="openLogout(event, 'Logout')">Logout</button>
 </div>
<div id='hi'>
<h1> SEEDS </h1></div>
<div id="Gallery">
  <a href="../images/RICE.jpg">
    <img src="../images/RICE.jpg" alt="Cinque Terre" >
  </a>
<b>  <i>1.RICE- MRP 50</i></b>
  <form action="" method="post">
PRODUCT ID:-<input name="cid">
QUANTITY:-&nbsp;&nbsp;&nbsp;<input name="quantity">
<p><a href="gallery.php"><input type="submit" value="Submit" name="submit" id="submit" ></p></a>
</form>
</div>
<div id="Gallery">
  <a href="../images/WHEAT.jpg">
    <img src="../images/WHEAT.jpg" alt="Cinque Terre" >
  </a>
<b>  <i>2.WHEAT- MRP 60</i></b>
  <form action="" method="post">
PRODUCT ID:-<input name="cid">
QUANTITY:-&nbsp;&nbsp;&nbsp;<input name="quantity">
<p><a href="gallery.php"><input type="submit" value="Submit" name="submit" id="submit"></p></a>
</form>
</div><div id="Gallery">
  <a href="../images/JOWAR.jpg">
    <img src="../images/JOWAR.jpg" alt="Cinque Terre" >
  </a>
<b>  <i>3.JOWAR- MRP 70</i></b>
  <form action="" method="post">
PRODUCT ID:-<input name="cid">
QUANTITY:-&nbsp;&nbsp;&nbsp;<input name="quantity">
<p><a href="gallery.php"><input type="submit" value="Submit" name="submit" id="submit"></p></a>
</form>
</div>
<div id="Gallery">
  <a href="../images/corn.jpg">
    <img src="../images/corn.jpg" alt="Cinque Terre" >
  </a>
<b>  <i>4.CORN- MRP 30</i></b>
  <form action="" method="post">
PRODUCT ID:-<input name="cid">
QUANTITY:-&nbsp;&nbsp;&nbsp;<input name="quantity">
<p><a href="gallery.php"><input type="submit" value="Submit" name="submit" id="submit"></p></a>
</form>
</div>
<div id='hi'>
<h1> FERTILIZERS AND PESTICIDES</h1>
</div>
<div id="Gallery">
  <a href="../images/FERT.jpg">
    <img src="../images/FERT.jpg" alt="Cinque Terre" >
  </a>
<b>  <i>5. NATURAL FERTILIZER- MRP 50</i></b>
  <form action="" method="post">
PRODUCT ID:-<input name="cid">
QUANTITY:-&nbsp;&nbsp;&nbsp;<input name="quantity">
<p><a href="gallery.php"><input type="submit" value="Submit" name="submit" id="submit"></p></a>
</form>
</div><div id="Gallery">
  <a href="../images/FERT1.jpg">
    <img src="../images/FERT1.jpg" alt="Cinque Terre" >
  </a>
<b>  <i>6.LIQUID FERTILIZER- MRP 50</i></b>
  <form action="" method="post">
PRODUCT ID:-<input name="cid">
QUANTITY:-&nbsp;&nbsp;&nbsp;<input name="quantity">
<p><a href="gallery.php"><input type="submit" value="Submit" name="submit" id="submit"></p></a>
	</form>
</div>
<div id="Gallery">
  <a href="../images/INSECT.jpg">
    <img src="../images/INSECT.jpg" alt="Cinque Terre" >
  </a>
<b>  <i>7.INSECTICIDE- MRP 50</i></b>
  <form action="" method="post">
PRODUCT ID:-<input name="cid">
QUANTITY:-&nbsp;&nbsp;&nbsp;<input name="quantity">
<p><a href="gallery.php"><input type="submit" value="Submit" name="submit" id="submit"></p></a>
</form>
</div><div id="Gallery">
  <a href="../images/GERM.jpg">
    <img src="../images/GERM.jpg" alt="Cinque Terre" >
  </a>
<b>  <i>8.GERMICIDE- MRP 50</i></b>
  <form action="" method="post">
PRODUCT ID:-<input name="cid">
QUANTITY:-&nbsp;&nbsp;&nbsp;<input name="quantity">
<p><a href="gallery.php"><input type="submit" value="Submit" name="submit" id="submit"></p></a>

 </form>
 
</div>
 <button id="button"><a href="checkout.php">CONTINUE TO CHECKOUT </a></button>

</body>
</html>
