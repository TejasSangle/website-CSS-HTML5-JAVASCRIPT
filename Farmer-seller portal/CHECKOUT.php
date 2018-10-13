<HTML>
<HEAD>

<TITLE>
hi

</TITLE>

<link rel="stylesheet" type="text/css" href="../style/CHECKSTYLE.CSS" />
</HEAD>
<body>
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
$sql = "DELETE FROM cart";

$result = mysqli_query($conn, $sql);
}


mysqli_close($conn);

?>

<div class="main_wrapper">

<div class="header_wrapper">
 <img src="../images/logo.png" alt="logo">
</div>
<div class="menubar">
<div class="tab">
<a href="slider1.php"><button>Home</button></a>
  <a href="gallery.php"><button>Our products</button></a>
   <a href="helpline.php"><button>Farmer Helpline</button></a>
  <a href="About_us.php"><button>about</button></a>
  <a href="contact1.php"><button>contact</button></a>
  <button class="tablinks" onclick="openLogout(event, 'Logout')">Logout</button>
 </div>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="alexis texas">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
        <input type="email" name="email" class="form-control" id="email" autocomplete="off">
		<span id="emailids" class="text-danger font-weight-bold" ></span>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="bandra">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="maharashtra">
			<div class="form-group">
		
	</div>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="MH">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="400987">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Pay now" class="btn">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>Cart 
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i> 
          <b>
		        <?php include 'test2.php';?>

		  </b>
        </span>
      </h4>
      <?php include 'test1.php';?>
  <form action="" method="post">

<input type="submit" value="clear cart" name="submit" >
</form>
  </div>
  </div>
</div><script type="text/javascript">
	function validation(){
		
		var emails = document.getElementById('emails').value;
		if (emails=="") {	
			document.getElementById('emailids').innerHTML="**please fill the Email ID feild";
			return false;
		}
		
		if (emails.indexOf('@')<=0) {
			document.getElementById('emailids').innerHTML="**Invalid Email ID";
			return false;
		}

		if ((emails.charAt(email.length-4)!='.') && (emails.charAt(emails.length-3)!='.')) {
			document.getElementById('emailids').innerHTML="**Invalid Email ID";
			return false;
		}
  </script>
</HTML>