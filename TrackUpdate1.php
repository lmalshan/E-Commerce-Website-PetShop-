<?php error_reporting(0) ?> 

<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  grid-area: header;
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 25px;
}

/* The grid container */
.grid-container {
  display: grid;
  grid-template-areas: 
  
    'left left middle middle  middle  middle' 
    'footer footer footer footer footer footer';
  /* grid-column-gap: 10px; - if you want gap between the columns */
} 

.left,
.middle,
 {
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Style the left column */
.left {
  grid-area: left;
}

/* Style the middle column */
.middle {
  grid-area: middle;
}




/* Style the footer */
.footer {
  grid-area: footer;
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .grid-container  {
    grid-template-areas: 
     
       
	  
	
     'left left left ' 
	 'middle middle ' 
      'footer footer footer footer footer footer';
  }
}
</style>
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
                <br>                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                      <tr>  
                               <th>Pet Name</th>
                               <th>Age</th>  
                               <th>Recommended vaccination</th>  
                                <th>Next Vaccination</th> 
                      </tr>  
                      <?php  
						 if(mysqli_num_rows($result) > 0){  
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
                        </table>
  				</div>
  
 </div>
  
    <div class="footer">
  <p><strong>Immunization may differ based on your pet’s health condition</strong></p>
  <p>meet your personal veterinarian regulary to exam your pets.</p>
  </div>



 
 

</body>
</html>
