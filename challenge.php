<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styleCh.css">
</head>
<body class="bg-white">
	<div class="container-fluid">
		<form class="d-flex justify-content-around mt-2" action="challenge.php" method ="POST">
			<input class="form-control" type="text" placeholder="Name" name="name">
			<input class="form-control" type ="text" placeholder="Model" name="model">
			<input class="form-control" type ="text" placeholder="Year" name="year">
			<input class="form-control" type ="text" placeholder="Price" name="price">
			<input class="form-control" type ="text" placeholder="Location" name="location">
			<input class="form-control" type ="text" placeholder="Available" name="available">
			<input class="btn btn-success" type="submit" value="Add" name="submit">
		</form>
		<form class="d-flex justify-content-center mt-2" action="challenge.php" method ="POST">
			<input class="form-control" type ="text" placeholder="delete ID" name="car_id">
			<input class="btn btn-danger" type="submit" value="Delete" name="delete">
		</form>
	</div>
	<div class="container">

		<h1 class="mb-5 mt-5 text-center text-dark">Rental cars</h1>
		<div class="row justify-content-around myRow">
	<?php 

	$host = "localhost";
	$username = "root";
	$pw = "";
	$db = "cars";

	$conn = mysqli_connect($host, $username, $pw, $db);

	if(!$conn) {
		echo "error";
	}

	if( isset($_POST['submit'])) {
	$data1 = mysqli_real_escape_string($conn,$_POST['name']);
	$data2 = mysqli_real_escape_string($conn,$_POST['model']);
	$data3 = mysqli_real_escape_string($conn,$_POST['year']);
	$data4 = mysqli_real_escape_string($conn,$_POST['price']);
	$data5 = mysqli_real_escape_string($conn,$_POST['location']);
	$data6 = mysqli_real_escape_string($conn,$_POST['available']);

	$sql = "INSERT INTO rent (name, model, year, price, location, available) VALUES ('$data1','$data2','$data3','$data4','$data5','$data6')";
	$something = mysqli_query($conn, $sql);}

	if( isset($_POST['delete'])) {
		$data_delete = mysqli_real_escape_string($conn,$_POST['car_id']);

	$sql = "DELETE FROM rent WHERE car_id=$data_delete";
	$nothing = mysqli_query($conn, $sql);
	}


	$sql = "SELECT * FROM rent";

	$result = mysqli_query($conn, $sql);

	if($result->num_rows==0){
		echo "No result";
	}else{
		$rows = $result->fetch_all(MYSQLI_ASSOC);
	foreach( $rows as $car ) {

		//echo $car['year'] . "<br>";
		echo '<div class="card mb-5 myCard" style="width: 18rem;">';
		echo '<div class="card-body myContent">';
		echo '<h5 class="card-title">'.$car['name'].'</h5>';
		echo '<h6 class="card-subtitle mb-2 text-muted">'.$car['model'].' - '.$car['year'].'</h6>';
		echo "<h6 class='card-subtitle mb-2 ", $car['available'] ? "text-success'>Available</h6>" : "text-danger'>Not available</h6>";
		echo '<p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>';
		echo '<a href="#" class="card-link">'.$car['price'].'&#8364;</a>';
		echo '<a href="#" class="card-link">'.$car['location'].'</a>';
		echo '</div>';
		echo '</div>';
	}
	}

	 ?>
	 
	 	</div>
	 </div>


	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>