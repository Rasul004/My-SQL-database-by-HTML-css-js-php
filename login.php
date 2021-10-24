<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "<script type='text/JavaScript'>
alert ('wrong username or password!')</script>";
		}else
		{
			echo "<script type='text/JavaScript'>
alert ('wrong username or password!')</script>";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bangladesh Hacker Center BHC Login Form</title>
  
  <!-- HTML -->
  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
  
</head>

<body>
  <!-- Project -->
  <div class="wrapper">
  <div class="form">
    <h2><!--<img src="logo1.png" class="Logo" alt="Logo" />--><font color="red">L</font><font color="#00ff00">O</font><font color="blue">G</font> <font color="yellow">I</font><font color="#fff">N</font></h2>
   <form action="" class="" method="POST">
       <span class="label">Username</span>
  <div class="username">
  <input type="text" name="user_name" id="username" autocomplete="off" value="" />
    <img class="photo" src="mane.png" alt="icon" />
            </div>
 <span class="label">Password</span>

  <div class="password">
  <input type="password" name="password" id="password" value="" />
 <span id="show_btn" onclick="showPass()"><img src="visibility.png" alt="Show" /></span>
   </div><br />
   <div class="submit">
 <button type="submit">Log in</button>
     </div><br />
      <a href="Forgot.html" class="forgot">Forgot Password?</a>
   <footer>
     <p>
      if you do not have an existing account?<br /></p>
    <div class="fff">
      <a href="signup.php" class="reg">Register Now</a>
   </div>
   </footer>
       
     </form>
     </form>
    </div>
</div>
  <script src="main.js"></script>
</body>
</html>