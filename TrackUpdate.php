<?php error_reporting(0) ?> 

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="TrackUpdate">
</head>
<body>


  <div class="header" style="background-color:#aaa;">
  
  <form id="userid" name="form1" method="post" action="">
                  <label for="txtid">Owner ID</label>
                  <input type="text" id="txtid" name="txtname" />
                  
                </form>
               
                
                <?php  
				 
				  $myv = $_POST['txtname'];
				  
 $connect = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb"); 

 

 
 $sql = "SELECT * FROM dog_table a, pettable b WHERE a.age = b.Age AND OwnerID = $myv order by OwnerID ";
  
 $result = mysqli_query($connect, $sql);  
 ?>  
                <br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                      <tr>  
                               <th>Pet Name</th>
                               <th>Age</th>  
                               <th>Recommended vaccination</th>  
                                <th>Next Vaccination</th> 
                      </tr>  
                     
                     
                     
                    
                     
                          <?php  
						  
                          if(mysqli_num_rows($result) > 0) 
						 
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                          	<td><?php echo $row["Name"];?></td>
                               <td><?php echo $row["Age"];?></td>
                               <td><?php echo $row["recommended_vacci"];?></td>
                               <td><?php echo $row["next_vacci"];?></td>   
                                
                          </tr>  
                          
                          
                         
                          <?php  
                               } 
                          } 
						
                          ?> 
                        <?php 
						
						
						
						if(mysqli_num_rows($result) == 0)
						echo "<font color=red>Invalid Entry</font>" ;
						
						 ?>
  

  
  </div>
  
 </div>
  
    <div class="footer">
  <p><strong>Immunization may differ based on your pet’s health condition</strong></p>
  <p>meet your personal veterinarian regulary to exam your pets.</p>
  </div>



 
 

</body>
</html>
