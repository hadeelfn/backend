<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT id, title, body FROM blogs";
$result = $conn->query($sql);
echo'hhhhh';
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>title</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["title"]." ".$row["body"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($conn);

?>

