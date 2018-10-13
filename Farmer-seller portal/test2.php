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

$sql = "select aid,name,price,quantity FROM cart,available where aid=cid";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["aid"]. " - Name: " . $row["name"]. "--price " . $row["price"]."--quantity " .$row["quantity"]. "<br>";
    }
} else {
    echo "0 results";
}



mysqli_close($conn);

?>
