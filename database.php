<?php
$servername = "localhost";
$username = "ThisIsNotTheUserName";
$password = "ThisIsNotThePassWord";
$database = "spendRaiWebsites";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM websites ORDER BY category ASC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {  	
        echo "<tr><td><a href='" . $row["websitelink"] . "'> " . $row["name"] . " </a></td><td>" .$row["category"] . "</td></tr>";
    }
} else {
    echo "<p>error</p>";
}

mysqli_close($conn);
?>
