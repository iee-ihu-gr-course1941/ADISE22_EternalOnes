<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($mysqli);


?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['username']; ?>

	<form action="">
		<button>Start</button>
	</form>

</body>
</html>