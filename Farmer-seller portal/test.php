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


