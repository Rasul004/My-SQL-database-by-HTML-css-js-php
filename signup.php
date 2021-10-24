<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
$email = $_POST['email'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(6);
			$query = "insert into users (user_id,user_name,password,email) values ('$user_id','$user_name','$password','$email')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter a valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bangladesh Hacker Center BHC Sign Up Form</title>
  
  <!-- HTML -->
  <!-- Custom Styles -->
  <link rel="stylesheet" href="Registration.css">
  
</head>

<body>
  <!-- Project -->
  <div class="wrapper">
  <div class="form">
    <h2><!--<img src="logo1.png" class="Logo" alt="Logo" />--><font color="red">S</font><font color="#00ff00">I</font><font color="blue">G</font><font color="yellow">N</font> <font color="#fff">U</font><font color="#07EFBF">P</font></h2>
   <form action="" method="POST">
       <span class="label">Username</span>
  <div class="username">
  <input type="text" name="user_name" id="username" autocomplete="off" value="" />
   <img class="photo" src="mane.png" alt="icon" />
         </div>
         <span class="label">E-mail Address</span>
  <div class="email">
  <input type="email" name="email" id="email" autocomplete="off" value="" />
   <img class="photo" src="email1.png" alt="icon" />
  </div>
 <span class="label">Password</span>
  <div class="password">
  <input type="password" name="password" id="password" value="" />
 <span id="show_btn" onclick="showPass()"><img src="visibility.png" alt="Show" /></span>
   </div><br />
   <div class="submit">
   <button type="submit">Sign Up</button>
     </div>
   <footer>
     <p>Already on Admission Assistant ?<br /></p>
    <div class="fff">
      <a href="login.php" class="reg">Login Now</a>
   </div>
   </footer>
       
     </form>
     </form>
    </div>
</div>
  <script src="main.js"></script>
</body>
</html>
