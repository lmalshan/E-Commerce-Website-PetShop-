<?php session_start();

if(!isset($_SESSION["userName"]))
{
	header('Location:login.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ViewUploads</title>
<link rel="stylesheet" type="text/css" href="ViewUploadStyle.css" />
</head>

<body>

<div id="content">
	<form method="post" action="ViewUpload.php" enctype="multipart/form-data">
    <h1> My Pets </h1>

    <div class="container">
      <table width="531">
      <tr>
        <td width="506">
        <?php
		
		 $con = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb");
		if(!$con)
		{	
			die("Cannot connect to DB server");		
		}
		$sql ="SELECT * FROM  `pettable` WHERE  `OwnerID` =  '".$_SESSION["ID"]."'";	

					
		$result = mysqli_query($con,$sql);
			
		if(mysqli_num_rows($result)> 0)
	{
			while($row = mysqli_fetch_assoc($result))
			{
      echo   " <div class='image'> <img src='pet_images/".$row['Pet_img']."'width='161' height='164''/>
	  <p>".$row["Name"]."</p><p>"."Age : ".$row["Age"]."</p>
            <p>
	  	<a href=' deleteContent.php?id=".$row['PetID']."'>Delete </a>
		&nbsp;|&nbsp;
	  	<a href='Comment.php?id=".$row['PetID']."&image=".$row["Pet_img"]."'>View </a>
		</p>
	  
	  
	  </div></div>
	  
	  ";
				
			}
	}
	?> 
    
     
    </td> 
        </tr>
      </table>
    </div>

</body>
</html>