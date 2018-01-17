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

$sql = "SELECT * FROM physical";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
	$outp = array();
	
	while($row = mysqli_fetch_assoc($result)) {
		$myRow = new stdClass();
		$myRow->name = $row["name"];
		$myRow->category = $row["category"];
		$myRow->longitude = $row["longitude"];
		$myRow->latitude = $row["latitude"];
		array_push($outp, $myRow); 
	}
	echo json_encode($outp);
} else {
	echo "<p>error</p>";
}

mysqli_close($conn);
?>
