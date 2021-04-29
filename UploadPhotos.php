<?php session_start(); 
if(!isset($_SESSION["userName"])){
	header('Location:login.php');
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="uploadStyle.css">
</head>

<body>
<div id="content">
	<form method="post" action="UploadPhotos.php" enctype="multipart/form-data">
		<div>
			<textarea name="text" cols="50" rows="4" placeholder="Upload your status..." required></textarea>
		</div>
        <br>
		<div>
			<input type="file" name="image" required>
			<input type="submit" name="upload" value="UPLOAD">
		  
			<?php 

			if(isset($_POST['upload'])){
		
				$target = "Uploads/".basename($_FILES['image']['name']);
				
				$con = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb");
				$image = $_FILES['image']['name'];
				$text = $_POST['text'];
						
				$un =$_SESSION['userName'];
					
				$fname = $_SESSION['Fname'];
				$lname = $_SESSION['Lname'];
			
				$sql = "INSERT INTO newsfeed (image, text, user_name, first_name, last_name ) VALUES ('".$image."', '".$text."', '".$un."', '".$fname."','".$lname."' )";//('".$title."', )
					
				mysqli_query($con, $sql);
						
				if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
					echo "<p>Image File is uploaded successfully</p>";
				}
				else{
					echo "Oops something went wrong,please try again";
				}
				header('Location:UploadPhotos.php');
			}
			?>					
			</div>
	</form>
	<div id="phptag">
	<?php 
	$con = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb");
	$sql = "select * from newsfeed";
	$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_array($result)){
		echo "<div id = 'img_div'>";
		echo "<img src='Uploads/".$row['image']."'>";
		echo "<br>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "<strong>".$row['first_name']."</strong>"." "."<strong>".$row['last_name']."</strong>";
		echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['text']."</p>";
		echo "</div>";
		echo "<hr>";
	}
	?>
	</div>
	
</div>
</body>
</html>