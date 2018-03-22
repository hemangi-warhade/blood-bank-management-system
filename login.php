<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Login | Online Blood Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
</head>
<body>


<?phpsession_start();
?>

<?php include"header1.php" ?>
<?php include"connectivity.php" ?>
<?php include"functionsRegister.php" ?>

<?php

$userId="";
$password="";
$msg="";

?>


<?php
if(isset($_POST['login'])) 
{ 

list ($userId,$type,$msg) =  confirmLogin($_POST['userId'],$_POST['password']);
	
	if($type=="D" || $type=="H")
	{
		
		// Store Session Data
		$_SESSION['login_user']= $userId; 
		$_SESSION['type']= $type; 
		header("Location: index.php");
		
	}
	
	if($type=="A")
	{
		
		// Store Session Data
		$_SESSION['login_user']= $userId; 
		$_SESSION['type']= $type; 
		header("Location: index.php");
		
	}

}
?>






<div class="container">
    <div class="single">  
	   
	 <div class="col-md-8 single_right">
	 	   <div class="login-form-section">
                <div class="login-content">
                    
					
					<form method="POST" action="	<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="section-title">
                            <h3>LogIn to your Account</h3>
							<center><h5><font color= "red"><?php echo $msg ?></font></h5></center>

                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                <input type="text" required="required" class="form-control" placeholder="Username" name="userId">
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" required="required" class="form-control " placeholder="Password" name="password">
                            </div>
                        </div>
                     
					 
					 
					 
                     <div class="forgot">
				 		  
					     <div class="clearfix"> </div>
			        </div>
					<div class="login-btn">
							<input type="submit" name="login" value="Log in" >
					</div>
					<div class="login-bottom">
					 <div class="social-icons">
						
						<h4>Don't have an Account? <a href="register.php"> Become Donor --> Register Now!</a></h4>
					 </div>
		           </div>
				   
				   
				   </form>
				   
                </div>
         </div>
   </div>
  <div class="clearfix"> </div>
 </div>
</div>


<?php include"footer.php"  ?>


</body>
</html>	