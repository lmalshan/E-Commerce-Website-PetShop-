<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Reset Password</title>
  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  


</head>
   
<body>
<!--
<h2>Reset Your Account Password</h2>
<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
<div class="container">
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="password" name="password" placeholder="PASSWORD" required>
            <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required>
            <div class="send-button">
                <input type="hidden" name="fp_code" value="<?php echo $_REQUEST['fp_code']; ?>"/>
                <input type="submit" name="resetSubmit" value="RESET PASSWORD">
            </div>
        </form>
    </div>
</div>-->


    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 align="center" class="modal-title">Reset Your Password</h4>
        </div>
        
        	<div class="modal-body">
          <div class="body-content">
  			<div class="module">
			    <form class="form" method="post" enctype="multipart/form-data" action="userAccount.php" autocomplete="off">
			      <div class="alert alert-error"></div>
					<input type="password" placeholder="PASSWORD" name="password" required>
					<input type="password" placeholder="CONFIRM PASSWORD" name="confirm_password" required>
					<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
				<p></p>
                
				<br>
                <input type="hidden" name="fp_code" value="<?php echo $_REQUEST['fp_code']; ?>"/>
                <input type="submit" value="RESET PASSWORD" name="resetSubmit" class="btn btn-block btn-primary" />
                
                    <br>
			    </form>
  			</div>
          </div>
        </div>
        </div>
      </div>
      
    </div>
	</body>
</html>