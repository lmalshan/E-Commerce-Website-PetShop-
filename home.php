<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CuddleCare</title>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">



  <!--banner-->
  
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			  </button>
              <a class="navbar-brand" href="#"><img src="img/logo1.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#service">Services</a></li>
                <li class=""><a href="#examine">Examine</a></li>
                <li class="">
                			<div class="dropdown">
  								<button class="dropbtn">My Pet</button>
  								<div class="dropdown-content">
    							<a href="" data-toggle="modal" data-target="#addPet">Add Pet</a>
    							<a href="" data-toggle="modal" data-target="#viewPet">View My Pets</a>
    							</div>
							</div>
                </li>
                <li class=""><a href="" data-toggle="modal" data-target="#track">Track Vaccination</a></li>
                <li class=""><a href="" data-toggle="modal" data-target="#feed">Feed</a></li>
                <li class=""><a href="chatMain.php">Chat</a></li>
                <li class="">
                			<div class="dropdown">
  								<button class="dropbtn">My Account</button>
  								<div class="dropdown-content">
    							<a href="" data-toggle="modal" data-target="#update">Update Profile</a>
    							<a href="index.php">Logout</a>
  								</div>
							</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="img/logo1.png" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Healthcare at your desk!!</h1>
              <p>The first step to become a part of nature..</p>
              
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--/ banner-->
  
  <!--service-->
  
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Our Service</h2>
          <hr class="botm-line">
          <p>Have you ever worried when your pet’s next vaccination is due? Or perhaps you want to meet other pet owners in one place. Maybe you just want to store your pets’ photos and details in one location. Cuddlecare does all of it and more!!</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4>24 Hour Support</h4>
              <p>Your requests are handled directly by our knowledgeable staff ensuring a quick and accurate response.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-comments"></i>
            </div>
            <div class="icon-info">
              <h4>Free Chat System</h4>
              <p>Allows you to chat with other pet lovers.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4>Medical Counseling</h4>
              <p>Automatically track and remind your pet's vaccination schedule.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-share-alt"></i>
            </div>
            <div class="icon-info">
              <h4>Share images</h4>
              <p>Upload and share you pets pictures with others.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--/ service-->
  
  <!--slider-->
  
  <section id="slider" class="section-padding">
    <div class="container">
      <div class="row">
      <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/1.gif" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/2.jpg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/3.jpg" style="width:100%;">
      </div>
      
      <div class="item">
        <img src="img/4.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/5.jpg" style="width:100%;">
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
      </div>
    </div>
  </section>
  
  <!--/slider-->
  
  <!--examine-->
  
  <section id="examine" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">How Can You Tell How Old a Dog Is?</h2>
            <hr class="botm-line">
            <p class="sec-para">Knowing how old your dog is will help you decide what to feed them, what preventative care they might need, and how to provide them with the happiest life possible..</p>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Examine Their Coat.</h3>
                <p>Just like humans, petMD says, most dogs will start to get a little gray when they get older. Between seven and ten years old, your dog is likely to develop some gray or white on their muzzle, chest, or haunches. However, the early appearance of gray fur is not necessarily a sign of aging and can actually be the result of stress or anxiety—just like in humans—according to The Bark.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Look at Their Eyes.</h3>
                <p>The eyes are another place where your dog might show their age. As a dog gets older, their eyes might start to get cloudy or develop some discharge. According to petMD, this is a normal part of the aging process that typically begins to appear when a dog is between six and eight years old, but it’s still a good idea to talk to your vet to make sure the change isn’t affecting your pet’s sight or causing them discomfort. Some dogs will lose their vision entirely or develop cataracts as they get older.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Check Their Teeth.</h3>
                <p>The most reliable way to estimate a dog’s age is to examine their teeth, according to the Humane Society of the United States. If your dog is still a puppy, you can guess their approximate age by checking the growth of their chompers. Puppies up to four weeks old will likely have no teeth at all, while puppies between four and eight weeks will have needle-sharp temporary teeth. Your puppy will start to grow their permanent teeth when they’re around three or four months old, and their permanent teeth will remain clean and bright white until they’re about one year old.<br><br>
                After the first year of life, your dog’s teeth might start to show a bit of wear. At first, you’ll see stains and plaque on the teeth right at the back of their mouth. At around three years old, most dogs’ teeth will be slightly yellowed and have visible plaque. Dogs around five tend to have lots of tartar, teeth that are less pointed or even slightly worn down, and an increased risk of dental diseases. And dogs older than ten will often have loose, cracked, or missing teeth.While you won’t be able to determine your dog’s birthday from their teeth, checking out their pearly whites is a great way to narrow it down.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Pay Attention to Their Hearing.</h3>
                <p>Vision isn’t the only sense that can change as your dog gets older, according to the American Kennel Club. Younger dogs generally have very sharp hearing (especially if you’re opening a bag of snacks!), but you might notice that an older dog has trouble hearing you approach or responding to your call. Your vet can check for hearing loss and help you care for a dog who can no longer hear.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Consider Their Muscles and Build.</h3>
                <p>You might also be able to narrow down your dog’s age by looking at their muscle tone and the shape of their body, says Erin Chu, a veterinary geneticist writing for Embark. Puppies tend to have soft, rounded bodies with little muscle tone. They’re also likely to have paws and ears that appear oversized. Young and middle-aged dogs in good health tend to have some visible muscles and a sleek, defined shape. An older dog might have decreased muscle tone, carry a little extra weight, or start to become a bit bony.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Notice Mobility and Activity Level.</h3>
                <p>If your dog is younger, they’ll likely move with ease and be eager to play or chase. As dogs age, petMD notes, they become less energetic and may start to have difficulty going up or down stairs, jumping, or running. Older dogs might also show less interest in playing and prefer a nap on the couch over a run in the park. Keep an eye on your dog’s activity level and check out their gait to look for signs of stiffness or limited joint mobility.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Don’t Forget Genetics.</h3>
                <p>While these methods might help you estimate your dog’s age, not every dog ages in the same way. Depending on their breed, medical history, diet, and level of activity, your dog might show signs of aging early or stay spritely into their later years. Talk to your vet to find out more about your dog’s physical condition and what you can do to help them age gracefully, and check out our dog years calculator to learn more about your dog’s lifespan.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--/ examine-->
  

  <!-- popupContent-->
  
  <!-- addPet -->
  <div class="modal fade" id="addPet" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Pet</h4>
        </div>
        <div class="modal-body">
          <div class="body-content">
  			<div class="module">
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
			      	<div class="avatar">
                    <label>Select your pet: </label><br><input type="file" name="petimage" accept="image/*" >
      				</div>
      				<input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
                    <?php 
					$_uID = $_SESSION['ID'];
					$msg = ""; 
					if(isset($_POST['register'])){
						$target = "pet_images/".basename($_FILES['petimage']['name']);
					
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
		
						//$sqlAddPet = "INSERT INTO `pettable` (`OwnerID`, `Name`, `Type`, `Breed`, `BDay`, `Weight`, `Height`, `Gender`, `Color`,  `Pet_img`) VALUES ('".$_uID."','".$PetName."','".$Type."','".$Breed."','".$DOB."','".$Weight."','".$Height."','".$Gender."','".$Color."','".$image."')";
						
						$sqlnew = "INSERT INTO `pettable`(`OwnerID`, `PetID`, `Name`, `Type`, `Breed`, `BDay`, `Weight`, `Height`, `Gender`, `Color`,  `Pet_img`,`Age`) VALUES('".$_uID."',NULL , '".$PetName."', '".$Type."', '".$Breed."', '".$DOB."', '".$Weight."', '".$Height."', '".$Gender."', '".$Color."',  '".$image."', 0 )" ;
						
						$go = mysqli_query($con, $sqlnew);
		
						if(move_uploaded_file($_FILES['petimage']['tmp_name'],$target)){
							$message = "You have successfully added a new Pet";
							echo "<script type='text/javascript'>alert('$message');</script>";
						}
						else{
							//$message1 = "Oops something went wrong!";
							//echo "<script type='text/javascript'>alert('$message1');<!--/script>";
						}
					}
					?><br>
                    
                    
			    </form>
  			</div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- / addPet -->
  
  <!-- updateProfile -->
   <div class="modal fade" id="update" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Profile</h4>
        </div>
        <div class="modal-body">
          <div class="body-content">
  			<div class="module">
			    <form class="form" method="post" enctype="multipart/form-data" autocomplete="off">
			      <div class="alert alert-error"></div>
			      	<input type="text" placeholder="user ID" name="uid" id="txtuid" required />	<br>
                    <input type="text" placeholder="first Name" name="fname" id="txtFirstName" required /><br>
                    <input type="text" placeholder="last name" name="lname" id="txtLastName" required /><br>
                    <input type="text" placeholder="user name" name="uname" id="txtusername" required /><br>
                    <input type="text" placeholder="email" name="mail" id="txtEmail4" required /><br>
                    <input type="password" placeholder="password" name="password" id="txtPassword" required /><br>
                    <input type="password" placeholder="confirm password" name="c_password" id="txtConfirmPassword" required /><br>
      				<div class="avatar">
                    	<label>Select your picture: </label><br><input type="file" name="ownerimage" accept="image/*" >
      				</div>
      				<input type="submit" value="Update" name="register" onClick="Validate()" class="btn btn-block btn-primary" />
       				<?php
					$msg = ""; 
					if(isset($_POST['register'])){
					$target = "images/".basename($_FILES['ownerimage']['name']);
					
					$con = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb");
						
					$uid = $_POST['uid']; 
					$fname = $_POST['fname'];
					$lname = $_POST["lname"];
					$uname = $_POST["uname"];
					$mail  = $_POST["mail"];
					$password = $_POST["password"];
					$image = $_FILES['ownerimage']['name']; 
					
					$update = "update users set first_name='$fname',last_name='$lname',user_name='$uname',email='$mail',password='$password',profile_img='$target' where user_id='$uid'";
					
					$run = mysqli_query($con,$update);	
						
		
					if(move_uploaded_file($_FILES['ownerimage']['tmp_name'],$target)){
						echo "<p>Image File is uploaded successfully</p>";
					}
					else{
						echo "Updated!";
					}
					}
					?><br>
			    </form>
  			</div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- / updateProfile -->
  
  <!-- feed -->
  <div class="modal fade" id="feed" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload Photos</h4>
        </div>
        <div class="modal-body">
          <div class="body-content">
  			<div class="module">
			    <form class="form" method="post" enctype="multipart/form-data" autocomplete="off">
			      <div class="alert alert-error"></div>
			      	<div>
                        <textarea name="text" cols="50" rows="4" placeholder="Upload your status..." required></textarea>
                    </div>
                    <br>
                    <div>
                        <input type="file" name="image" required><bt><br>
                        <input type="submit" name="upload" value="UPLOAD" class="btn btn-block btn-primary"><br>
                        <?php 
						if(isset($_POST['upload'])){
							$target = "Uploads/".basename($_FILES['image']['name']);
							
							$con = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb");
							$image = $_FILES['image']['name'];
							$text = $_POST['text'];
									
							$un = $_SESSION['userName'];
							$fname = $_SESSION['Fname'];
							$lname = $_SESSION['Lname'];
						
							$sqlInsertPic = "INSERT INTO newsfeed (image, text, user_name, first_name, last_name ) VALUES ('".$image."', '".$text."', '".$un."', '".$fname."','".$lname."' )";//('".$title."', )
								
							mysqli_query($con, $sqlInsertPic);
									
							if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
								echo "<p>Image File is uploaded successfully</p>";
							}
							else{
								echo "Oops something went wrong,please try again";
							}
						}
						?>					
                    </div>
			    </form>
                <div id="phptag">
					<?php 
                    $con = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb");
                    $sqlGetPic = "select * from newsfeed";
                    $result = mysqli_query($con, $sqlGetPic);
                    while($row = mysqli_fetch_array($result)){
                        echo "<div class = 'img_div'>";
                        echo "<img src='Uploads/".$row['image']."'/>";
                        echo "<br>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo "<strong>".$row['first_name']."</strong>"." "."<strong>".$row['last_name']."</strong>";
                        echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['text']."</p>";
                        echo "</div>";
                        echo "<hr>";
                    }
                    ?>
                </div>
  			</div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- / feed -->
  
  <!--  track-->
    <div class="modal fade" id="track" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Track My Pet</h4>
        </div>
        <div class="modal-body">
          <div class="body-content">
  			<div class="module">
			    <form class="form" method="post" enctype="multipart/form-data" autocomplete="off">
			      <div class="alert alert-error"></div>
			      	<label for="txtid">Owner ID</label>
                  <input type="text" id="txtid" name="txtname" required /><br>
			    </form>
				<?php error_reporting(0) ?>
                <?php  
					$myv = $_POST['txtname'];
					$connect = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb"); 
					$sqlTrack = "SELECT * FROM dog_table a, pettable b WHERE a.age = b.Age AND OwnerID = $myv order by OwnerID ";
					$result = mysqli_query($connect, $sqlTrack);  
				?><br>
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
                        <tr>
                      		<td>
                            	<input type="submit" value="E-mail" name="email" width="800" class="btn btn-block btn-primary"/>
                            </td>
                      </tr>
                        </table>
  				</div>
                <br>
                <p><strong>Immunization may differ based on your pet's health condition.</strong></p>
				<p>Meet your personal veterinarian regulary to exam your pets.</p>
  			</div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- / track -->
  
  <!-- petView -->
  <!-- deteleContent.php is needed -->
  
  <div class="modal fade" id="viewPet" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View My Pets</h4>
        </div>
        <div class="modal-body">
          <div class="body-content">
  			<div class="module">
			    <div class="container">
        			<?php
					$con = mysqli_connect("localhost", "id9958043_root", "itpdm123", "id9958043_cuddlecaredb");
					if(!$con){	
						die("Cannot connect to DB server");		
					}
					$sqlDel ="SELECT * FROM  `pettable` WHERE  `OwnerID` =  '".$_SESSION["ID"]."'";	
					$result = mysqli_query($con,$sqlDel);
					if(mysqli_num_rows($result)> 0){
						while($row = mysqli_fetch_assoc($result)){
							echo   " <div class='image' > <img src='pet_images/".$row['Pet_img']."'width='161' height='164''/>
							".$row["Name"]."
            				<p><a href=' deleteContent.php?PetID=".$row['PetID']."'>Delete </a></p>";
						}
					}
					?> 
			</div>
            
  			</div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- / petView -->
  
  <!-- / popupContent-->
  
  <!--footer-
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="#service"><i class="fa fa-circle"></i>Service</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
  </footer>
  <!--/ footer-->

</body>

</html>
