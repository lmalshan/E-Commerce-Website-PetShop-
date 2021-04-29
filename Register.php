<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<link href="Register.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">

function validateFirstName()
{
	var name = document.getElementById("txtFirstName").value;
	if((name == "")||(name == null))
	{
		alert("Please enter your first name");
		return false;
	}
	return true;
}

function validateLastName()
{
	var name = document.getElementById("txtLastName").value;
	if((name == "")||(name == null))
	{
		alert("Please enter your last name");
		return false;
	}
	return true;
}



function validateEmail()
{
	var email = document.getElementById("txtEmail4").value;
	var at = email.indexOf("@");
	var dt = email.lastIndexOf(".");
	var len = email.length;
	
	if((at < 2)||(dt-at < 2)||(len-dt < 2))
	{
		alert("Please enter a valid email address");
		return false;
	}
	return true;
}

function validatePassword()
{
	var pwd = document.getElementById("txtPassword").value;
	var cpwd = document.getElementById("txtConfirmPassword").value;
	if((pwd.length < 5)||( pwd != cpwd))
	{
		alert("Please enter a correct Password and enter to the Confirm password");
		return false;
	}
return true;
}

function Validate()
{
	if(validateFirstName()&& validateLastName()&& validateEmail() && validatePassword())
	{
		alert("Registration is completed");
	}
	else
	{
		event.preventDefault();
	}
}

</script>

</head>

<body>


<div class="body-content">
  <div class="module">
    <h1>Register</h1>
    <form class="form" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      	<input type="text" placeholder="first Name" name="fname" id="txtFirstName" required /><br>
      	<input type="text" placeholder="last name" name="lname" id="txtLastName" required /><br>
        <input type="text" placeholder="user name" name="uname" id="txtusername"required /><br>
      	<input type="text" placeholder="email" name="mail" id="txtEmail4" required /><br>
        <input type="password" placeholder="password" name="password" id="txtPassword"required /><br>
      	<input type="password" placeholder="confirm password" name="c_password" id="txtConfirmPassword" required /><br>
      	
      	<div class="avatar"><label>Select your pet: </label><br><input type="file" name="petimage" accept="image/*" >
      </div>
      <input type="submit" value="Register" name="register" onClick="Validate()" class="btn btn-block btn-primary" />
      
	  <?php 

		$msg = ""; 
		if(isset($_POST['register'])){
		$target = "images/".basename($_FILES['petimage']['name']);
		
		$con = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb");
		
		$fname=$_POST['fname'];
		$lname = $_POST["lname"];
		$uname = $_POST["uname"];
		$mail  = $_POST["mail"];
		$password = $_POST["password"];
		$image = $_FILES['petimage']['name'];
		
            
		
		$sql = "INSERT INTO `users`(`first_name`, `last_name`,`user_name`,`email`,`password`, `profile_img`) VALUES ('".$fname."', '".$lname."', '".$uname."', '".$mail."', '".$password."', '$image')";
		mysqli_query($con, $sql);
		
		
		
				
		if(move_uploaded_file($_FILES['petimage']['tmp_name'],$target)){
			echo "<p>Image File is uploaded successfully</p>";
		}
		else{
			echo "Oops something went wrong,please try again";
		}
	}

?>
      
    </form>
  </div>
</div>
</body>
</html>
