<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($mysqli);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blokus</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="./../bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="./../css/myblockus.css" rel="stylesheet">
    <script src="./../bootstrap/jquery-3.2.1.min.js"></script>
    <script src="./../bootstrap/bootstrap.min.js"></script>
    <script src="./../css/myblockus.css"></script>
    <script src="./../js/myblockus.js"></script>
</head>

<body>
        
	<a href="logout.php">Logout</a>
		<h1>This is the index page</h1>

		<br>
		Hello, <?php echo $user_data['username']; ?>
		
	<div id="blokus_board">

        </div>

        <div id="red">

        <img src="./../img/I1.png"> &nbsp; 

        <img src="./../img/I2.png"> &nbsp; 

        <img src="./../img/I3.png"> &nbsp; 

        <img src="./../img/4 (1).png"> &nbsp; 

        <img src="./../img/5.png"> &nbsp; 

        <img src="./../img/6.png"> &nbsp; 

        <img src="./../img/7.png"> &nbsp; 

        <img src="./../img/8.png"> &nbsp; 

        <img src="./../img/9.png"> &nbsp; 

        <img src="./../img/10.png"> &nbsp; 

        <img src="./../img/11.png"> &nbsp; 

        <img src="./../img/12.png"> &nbsp; 

        <img src="./../img/13.png"> &nbsp; 

        <img src="./../img/14.png"> &nbsp; 

        <img src="./../img/15.png"> &nbsp; 

        <img src="./../img/16.png"> &nbsp; 

        <img src="./../img/17.png"> &nbsp; 

        <img src="./../img/18.png"> &nbsp; 

        <img src="./../img/19.png"> &nbsp; 

        <img src="./../img/20.png"> &nbsp; 

        <img src="./../img/21.png"> &nbsp; 
 
        </div>

        <div id="blue">

        <img src="./../img/1b.png"> &nbsp; 

        <img src="./../img/2b.png"> &nbsp; 

        <img src="./../img/3b.png"> &nbsp; 

        <img src="./../img/4b.png"> &nbsp; 

        <img src="./../img/5b.png"> &nbsp; 

        <img src="./../img/6b.png">&nbsp; 

        <img src="./../img/7b.png">&nbsp; 

        <img src="./../img/8b.png">&nbsp; 

        <img src="./../img/9b.png">&nbsp; 

        <img src="./../img/10b.png">&nbsp; 

        <img src="./../img/11b.png">&nbsp; 

        <img src="./../img/12b.png">&nbsp; 

        <img src="./../img/13b.png">&nbsp; 

        <img src="./../img/14b.png">&nbsp; 

        <img src="./../img/15b.png">&nbsp; 

        <img src="./../img/16b.png">&nbsp; 

        <img src="./../img/17b.png">&nbsp; 

        <img src="./../img/18b.png">&nbsp; 

        <img src="./../img/19b.png">&nbsp; 

        <img src="./../img/20b.png">&nbsp; 

        <img src="./../img/21b.png">&nbsp; 

        </div>

        <div id="yellow">

        <img src="./../img/1y.png">&nbsp; 

        <img src="./../img/2y.png">&nbsp; 

        <img src="./../img/3y.png">&nbsp; 

        <img src="./../img/4y.png">&nbsp; 

        <img src="./../img/5y.png">&nbsp; 
 
        <img src="./../img/6y.png">&nbsp; 

        <img src="./../img/7y.png">&nbsp; 

        <img src="./../img/8y.png">&nbsp; 

        <img src="./../img/9y.png">&nbsp; 

        <img src="./../img/10y.png">&nbsp; 

        <img src="./../img/11y.png">&nbsp; 

        <img src="./../img/12y.png">&nbsp; 

        <img src="./../img/13y.png">&nbsp; 

        <img src="./../img/14y.png">&nbsp; 

        <img src="./../img/15y.png">&nbsp; 

        <img src="./../img/16y.png">&nbsp; 

        <img src="./../img/17y.png">&nbsp; 

        <img src="./../img/18y.png">&nbsp; 

        <img src="./../img/19y.png">&nbsp; 

        <img src="./../img/20y.png">&nbsp; 

        <img src="./../img/21y.png">&nbsp; 

        </div>

        <div id="green">

        <img src="./../img/1g.png">&nbsp; 

        <img src="./../img/2g.png">&nbsp; 

        <img src="./../img/3g.png">&nbsp; 

        <img src="./../img/4g.png">&nbsp; 

        <img src="./../img/5g.png">&nbsp; 

        <img src="./../img/6g.png">&nbsp; 

        <img src="./../img/7g.png">&nbsp; 

        <img src="./../img/8g.png">&nbsp; 

        <img src="./../img/9g.png">&nbsp; 

        <img src="./../img/10g.png">&nbsp; 

        <img src="./../img/11g.png">&nbsp; 

        <img src="./../img/12g.png">&nbsp; 

        <img src="./../img/13g.png">&nbsp; 

        <img src="./../img/14g.png">&nbsp; 

        <img src="./../img/15g.png">&nbsp; 

        <img src="./../img/16g.png">&nbsp; 

        <img src="./../img/17g.png">&nbsp; 

        <img src="./../img/18g.png">&nbsp; 

        <img src="./../img/19g.png">&nbsp; 

        <img src="./../img/20g.png">&nbsp; 

        <img src="./../img/21g.png">&nbsp; 

    </div>

    
</body>

</html>



<!--  -->
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