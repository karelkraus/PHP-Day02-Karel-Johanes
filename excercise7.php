<?php 
	$host = "localhost";
	$username = "root";
	$pw = "";
	$db = "example";

	$conn = mysqli_connect($host, $username, $pw, $db);

	if(!$conn) {
		echo "error";
	}

	$fname = $_POST['name'];
	$lname = $_POST['surname'];

	$sql = "INSERT INTO people (firstname, lastname) VALUES ('$fname','$lname')";

	if(!mysqli_query($conn, $sql)){
		echo "Query error";
	}else {
		echo "Success";
	}

 ?>