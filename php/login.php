<?php 

session_start();

	include("connection.php");
	include("functions.php");
	$Error = "";


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password =  $_POST['password'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where username = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['id'] = $user_data['id'];
						header("Location: ./game.php");
						die;
					}
				}
			}
			
			$Error = "wrong username or password!";
		}else
		{
			$Error = "username or password cannot be empty!";
		}
	}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="../login/style.css">

  <style type="text/css">
  .auto-style1 {
	  font-family: Rubik;
	  color: #FF6600;
	  font-weight: normal;
  }
  .auto-style2 {
	margin-right: 0px;
}
  </style>

</head>
<body>
<!-- partial:index.partial.html -->
<p>&nbsp;&nbsp;
<img alt="" height="74" src="../login/logo.JPG" width="272" class="auto-style2"></p>
<div class="login-form">
    <form class="" method="post">
    	<h1 class="auto-style1">Login</h1>
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
    </div>
    <div class="action">
      <input type="button" value="Register" onclick="redirect_reg()">
      <input type="submit" value="Login">
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="../login/script.js"></script>

</body>
</html>