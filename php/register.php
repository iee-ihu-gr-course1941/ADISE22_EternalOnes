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

		$sname = mysqli_query($con, "SELECT * FROM users WHERE username = '". $_POST['user_name']."'");
			
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

			mysqli_query($con,$query);

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
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">

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
<div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0" style="left: 0px; top: 0px">
 <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                                                                           
                <a href="" class="auto-style3">
                    <h1>&nbsp;&nbsp;&nbsp;<a href="" class="auto-style3"><img alt="" height="74" src="Καταγραφή.JPG" width="272"></a>&nbsp;&nbsp;
					</a>&nbsp;&nbsp;&nbsp; </h1>
                    
                </a>
                                                                           
                        </div>
                        
                </div>
            </nav>
			<div class="container-xxl py-5 bg-dark closedcenter-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">

						<div class="login-form">
              <a href="index.html">
                <span class="auto-style2" style="width: 88px; height: 21px; right: 265px">GO TO HOME</span></a>
              
  						  <form>
    						  <h1 class="auto-style4">Register</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="Username" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Confirm Password" autocomplete="new-password">
      </div>

    </div>
    <div class="action">
      <input type="button" value="Register">
      
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
