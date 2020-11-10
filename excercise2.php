<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="excercise2.php" method ="POST">
		<input type="text" placeholder="Name" name="name">
		<input type ="text" placeholder="Surname" name="surname">
		<input  type="submit" value="Submit" name="submit">
	</form>
	<?php
	if( isset($_POST['submit']))
	{
	if( $_POST["name"] && $_POST["surname"] ) {
		echo "Welcome ". $_POST[ 'name']." ".$_POST['surname'];
	}elseif(!$_POST["name"]){
		echo "Please insert your name";
	}elseif (!$_POST["surname"]) {
		echo "Please insert your surname";
	}
	}
	?>

</body>
</html>