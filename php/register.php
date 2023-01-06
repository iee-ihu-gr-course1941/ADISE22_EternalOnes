<?php 
session_start();
	include("connection.php");
	include("functions.php");
    $Error = "";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$con_pass = $_POST['confirm_password'];

		$sname = mysqli_query($mysqli, "SELECT * FROM users WHERE username = '". $_POST['user_name']."'");
			
		if(mysqli_num_rows($sname)) {
			$Error = "This username already exists";
		}
		
		elseif($con_pass !== $password) {
			$Error = "Password and confirm Password are not the same!";
		}

		elseif(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//save to database
			//$password = password_hash($password, PASSWORD_DEFAULT); for pass hashing
			$query = "insert into users(username,password) values('$user_name','$password')";

			mysqli_query($mysqli,$query);

			header("Location: login.php");
			die;
		} else
		{
			$Error = "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="../register/style.css">

  <style type="text/css">
.auto-style3 {
	text-decoration: none;
}
.auto-style4 {
	color: #000000;
	font-weight: normal;
	font-family: Rubik;
}
</style>

</head>
<body>
<!-- <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0" style="left: 0px; top: 0px">
    <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                                                                           
                <a href="" class="auto-style3">
                    <h1>&nbsp;&nbsp;&nbsp;<a href="" class="auto-style3"><img alt="" height="74" src="../register/Καταγραφή.JPG" width="272"></a>&nbsp;&nbsp;
					</a>&nbsp;&nbsp;&nbsp; </h1>
                    
                </a>
                                                                           
                </div>
                        
    </div>
            </nav>
			<div class="container-xxl py-5 bg-dark closedcenter-header mb-5">
            <div class="container my-5 py-5">
            <div class="row align-items-center g-5"> -->

			<div class="login-form">
  			    <form class="" method="post">
                    <h1 class="auto-style4">Register</h1>
                    <span style="font-size: 12px;color:red;">
                    <?php 
                            if(isset($Error) && $Error != "")
                            {
                                echo $Error;
                            }
                    ?>
                    </span>
                    <br>
                    <div class="content">
                    <div class="input-field">
                        <input type="text" placeholder="Username" autocomplete="nope" name="user_name">
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Password" autocomplete="new-password" name="password">
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Confirm Password" autocomplete="new-password" name="confirm_password">
                    </div>

                    </div>
                    <div class="action">
                    <input type="submit" value="Signup">
                    
                    </div>
                </form>
            </div>
            <!-- </div>
            </div>
            </div>
</div> -->
<!-- partial -->
  <script  src="../register/script.js"></script>

</body>
</html>