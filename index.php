<?php
include 'config.php';
if(isset($_POST['submit'])){
	$movie = mysqli_real_escape_string($conn, $_POST['movie']);
	$actor = mysqli_real_escape_string($conn, $_POST['actor']);
	$actress = mysqli_real_escape_string($conn, $_POST['actress']);
	$year = mysqli_real_escape_string($conn, $_POST['year']);
	$director = mysqli_real_escape_string($conn, $_POST['director']);

	$stmt = $conn->prepare("insert into movies(movie, actor, actress, year, director) values (?, ?, ?, ?, ?)");
	$stmt->bind_param('sssis', $movie, $actor, $actress, $year, $director);
	$stmt->execute();
	$stmt->close();
	$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body id="register">
	
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="registeruser" name="myform">
		Movie Name<input type="text" placeholder="Enter movie name" name="movie"><br>
		Actor Name<input type="text" placeholder="Enter actor name" name="actor"><br>
		Actress Name<input type="text" placeholder="Enter actress name" name="actress"><br>
		Year<input type="text" placeholder="Enter the year of release" name="year"><br>
		Director Name<input type="text" placeholder="Enter director name" name="director"><br>
		<br><br><br>
		<button type="submit" name="submit" id="submit">Submit</button><br>
		<button class="show" type="submit"><a href="display.php">Display Table</a></button><br>
		<button class="show" type="submit"><a href="record.php">Display Table by actor name</a></button>
	</form>  

</body>

</html>