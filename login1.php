<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>LoginPage</title>
  
<link rel="stylesheet" href="style.css">

</head>
	
<body>
	
		<form class="modal-content animate" method="post" action="login1.php">
			
			<div class="imgcontainer">
				<img src="1aa.png" alt="Avatar" class="avatar">
			</div>
			
			<div class="container">
			  <label for="uname"><strong>Username</strong></label>
			  <input type="text" placeholder="Enter Username" name="uname" required>
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
				<label>
					<input class="rember" type="checkbox" checked="check" name="remember"> Remember me
				</label>
				<p>
				<?php
					if(isset($_POST["btnsubmit"])){
						$un = $_POST["uname"];
						$pw = $_POST["psw"];
					
						$valid = false;
						
						$con = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb");
						if(!$con)
						{
							die("Cannot connect to DB server");
						}
						
						$sql ="SELECT * FROM  `users` WHERE  `user_name` =  '".$un."' AND `password` =  '".$pw."'";
						
						$result = mysqli_query($con,$sql);
						
						if(mysqli_num_rows($result) >0)
						{
							$valid = true;
					
							$_SESSION["userName"] = $un;
						}
						
						else{	$valid = false;		}
						
						mysqli_close($con);
						
						if($valid){
							header('Location:home.php');
						}
						
						else{
							echo '<script>alert("Invalid Username or Password"); location.replace(document.referrer);</script>';
							
							
						}
					}
					?>

				</p>
				
			  <button class="submit" type="submit" name="btnsubmit" onClick="valicdate()">LOGIN</button>
			  <div class="frgPW"><a href="#forgot">Forgot Password?</a>
			  </div>
				
				<div class="hr"></div>
				
				<div class="createnew">
					<a href="Register.php">CREATE A NEW ACCOUNT</a>
				</div>
			</div>
	  </form>
	
</body>
</html>