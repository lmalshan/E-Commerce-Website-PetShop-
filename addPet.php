<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add a Pet</title>
<link href="addPet.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="body-content">
  <div class="module">
    <h1>My Pet</h1>
    <form class="form" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      	<input type="text" placeholder="Pet's Name" name="petname" required /><br>
      	<input type="radio" name="type" value="dog"  required/> Dog<br>
     	<input type="radio" name="type" value="cat"> Cat<br>
      	<input type="text" placeholder="Breed" name="breed" required /><br>
      	<input type="date" placeholder="Birthday" name="bday"><br>
      	<input type="text" placeholder="Weight (lbs)" name="weight" ><br>
      	<input type="text" placeholder="Height (cm)" name="height" ><br>
      	<input type="radio" name="gender" value="male" required/> Male<br>
      	<input type="radio" name="gender" value="female"> Female<br>
      	<input type="text" placeholder="Color" name="color"><br>
      	<div class="avatar"><label>Select your pet: </label><br><input type="file" name="petimage" accept="image/*" >
      </div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      
	  <?php 
		$_uID = $_SESSION['ID'];
		$_uName = $_SESSION['userName'];
 
		$msg = ""; 
		if(isset($_POST['register'])){
			$target = "images/".basename($_FILES['petimage']['name']);
		
			$con = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb");
			
			$image = $_FILES['petimage']['name'];
			$PetName=$_POST['petname'];
            $Type=$_POST['type'];
            $Breed=$_POST['breed'];
            $DOB=$_POST['bday'];
            $Weight=$_POST['weight'];
            $Height=$_POST['height'];
            $Gender=$_POST['gender'];
            $Color=$_POST['color'];
		
		$sql = "INSERT INTO `pettable` (`OwnerID`, `Name`, `Type`, `Breed`, `BDay`, `Weight`, `Height`, `Gender`, `Color`,  `Pet_img`) VALUES ('".$_uID."','".$PetName."','".$Type."','".$Breed."','".$DOB."','".$Weight."','".$Height."','".$Gender."','".$Color."','".$image."')";//('".$title."', )
		
		if((move_uploaded_file($_FILES['petimage']['tmp_name'],$target)) && (mysqli_query($con, $sql))){
			$message = "You have successfully added a new Pet";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else{
			$message1 = "Oops something went wrong!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}
	}

?>
      
    </form>
  </div>
</div>
</body>
</html>
