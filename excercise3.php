<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="excercise3.php" method ="POST">
		<input type="text" placeholder="First number" name="a">
		<input type ="text" placeholder="Second number" name="b">
		<input  type="submit" value="Submit" name="submit">
	</form>
	<?php
	if( isset($_POST['submit']))
	{
	if( $_POST["a"] && $_POST["b"] ) {
		function divide()
		{
			$result = $_POST["a"] / $_POST["b"];
			echo $result;
		}
		divide();
	}elseif(!$_POST["a"]){
		echo "Please insert first number";
	}elseif (!$_POST["b"]) {
		echo "Please insert second number";
	}
	}
	?>

</body>
</html>