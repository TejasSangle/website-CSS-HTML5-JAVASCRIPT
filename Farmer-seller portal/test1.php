
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

/* $sql = "SELECT aid,cid,price,quantity FROM cart CROSS JOIN available";*/
$sql = "SELECT SUM(price * quantity) AS Value FROM cart, available where aid=cid ";

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
    echo "Sum :".$row['Value']."<br>";
} 
}
else{
	echo "0 results";
}


mysqli_close($conn);

?>




