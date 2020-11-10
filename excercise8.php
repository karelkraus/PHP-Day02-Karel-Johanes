<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	$host = "localhost";
	$username = "root";
	$pw = "";
	$db = "example";

	$conn = mysqli_connect($host, $username, $pw, $db);

	if(!$conn) {
		echo "error";
	}

	$sql = "SELECT user_id, lastname, firstname FROM people";
	$result = mysqli_query($conn, $sql);

	// fetch the next row (as long as there are any) into $row
	while($row = mysqli_fetch_assoc($result)) {
	       printf("ID=%s %s (%s)<br>",
	                     $row[ "user_id"], $row["lastname"],$row["firstname"]);
	}
	echo  "Fetched data successfully\n";
	// Free result set
	mysqli_free_result($result);
	// Close connection
	mysqli_close($conn);


	 ?>


</body>
</html>