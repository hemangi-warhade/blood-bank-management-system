<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Register | Online Blood Management</title>
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


<?php include"header1.php" ?>
<?php include"connectivity.php" ?>
<?php include"functionsRegister.php" ?>

<?php
$msg="";
$type="";
?>

<?php
if(isset($_POST['register'])) 
{ 
	$msg = addUSer($_POST['userId'],$_POST['password'],$_POST['confirmPassword'],$_POST['name'],$_POST['address'],$_POST['location'],
	$_POST['pincode'],$_POST['bloodGroup'],$_POST['contactNo'] , $_POST['type']) ;
	
}
?>


<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Donor / Hospital Register Form</h2>
      
		<center><h5><font color="green"><?php echo $msg ?></font></h5></center>
	  
		<form method="POST" action="	<?php echo $_SERVER['PHP_SELF']; ?>">
		
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" >User Id</label>
                <div class="col-md-9">
                    <input type="text" name="userId" placeholder="Choose Your User Id" required="required" class="form-control input-sm"/>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" >Password</label>
                <div class="col-md-9">
                    <input type="password" name="password"  placeholder="Enter Password" required="required" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" >Confirm Password</label>
                <div class="col-md-9">
                    <input type="password" name="confirmPassword"  placeholder="Enter Confirm Password" required="required" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" >Name</label>
                <div class="col-md-9">
                    <input type="text" name="name"  placeholder="Enter Your Name" required="required" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" >Address</label>
                <div class="col-md-9">
                    <input type="text" name="address" placeholder="Enter Your Address" required="required" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" >Location</label>
                <div class="col-md-9">
                    <input type="text" name="location"  placeholder="Enter Your Location" required="required" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" >Pincode</label>
                <div class="col-md-9">
                    <input type="text" name="pincode"  placeholder="Enter Your Pincode" required="required" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable">Blood Group</label>
                <div class="col-md-9">
                    <input type="text" name="bloodGroup"  placeholder="Enter Your Blood Group" required="required" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable">Contact No</label>
                <div class="col-md-9">
                    <input type="text" name="contactNo" placeholder="Enter Your Contact No" required="required" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">I am</label>
                <div class="col-md-9">
                    <select name="type" required="required" class="form-control input-sm">
                        <option value="D">  Donor </option>
						<option value="H">  Hospital </option>
					</select>
               </div>
            </div>
        </div>
		
		
		
		<div class="row">
            <div class="form-actions floatRight">
                <input type="submit" value="Register" name = "register" class="btn btn-primary btn-sm">
            </div>
        </div>
   
   </form>
	
	
    </div>
 </div>
</div>



<?php include"footer.php" ?>


</body>
</html>	