<?php

$con = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb");
	if(!$con)
	{	
		die("Cannot connect to DB server");		
	}
$sql = "DELETE FROM `cuddlecaredb`.`pettable` WHERE `pettable`.`PetID` = ".$_GET['PetID']."";


	mysqli_query($con,$sql);

mysqli_close($con);
header('Location:home.php');	

?>