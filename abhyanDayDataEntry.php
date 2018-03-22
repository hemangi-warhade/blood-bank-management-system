<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Abhyan Day Data ENtry | Online Blood Management </title>
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

<?php

$userId ='';
$abhyanEventDate = '';
$donorName = '';
$donorAddress = '';
$donorLocation = '';
$donorBloodGroup = '';
$donorContactNo = '';
$msg = '';


?>


<?php
if(isset($_POST['fetchDonorDetails'])) 
{ 
	$userId = $_POST['userId'];
	
	$sql = 'SELECT a.*, trunc(sysdate) FROM blood_user_profile a where userid = :userId ';
	$stmt = oci_parse($conn,$sql);
	oci_bind_by_name($stmt, ':userId', $userId , 100);
	oci_execute($stmt);
	
	$msg = "<font color='red' > Details details not found.. Please provide all  user details... </font>";
	
	while($row=oci_fetch_array($stmt))
	{
		$userId = $row[0] ;
		$donorName = $row[2] ;
		$donorAddress = $row[3] ;
		$donorLocation = $row[4];
		$donorBloodGroup = $row[6];
		$donorContactNo = $row[7];
		$abhyanEventDate = $row[9];
		
		$msg = 'User details fetched...' ;
	
	}

	
}
?>


<?php
if(isset($_POST['addDonorDetails'])) 
{ 
	$userId = $_POST['userId'];
    $abhyanEventDate = $_POST['abhyanEventDate'];
	$donorName = $_POST['donorName'];
	$donorAddress = $_POST['donorAddress'];
	$donorLocation = $_POST['donorLocation'];
	$donorBloodGroup = $_POST['donorBloodGroup'];
	$donorContactNo = $_POST['donorContactNo'];

  
	$sql = 'INSERT INTO blood_donor_details'.
       ' VALUES( :userId, :abhyanEventDate , :donorName , :donorAddress , :donorLocation ,:donorBloodGroup , :donorContactNo , sysdate )';

	$stmt = oci_parse($conn,$sql);

	oci_bind_by_name($stmt, ':userId', $userId , 100);
	oci_bind_by_name($stmt, ':abhyanEventDate', $abhyanEventDate , 100);
	oci_bind_by_name($stmt, ':donorName', $donorName , 100);
	oci_bind_by_name($stmt, ':donorAddress', $donorAddress , 100);
	oci_bind_by_name($stmt, ':donorLocation', $donorLocation , 100);
	oci_bind_by_name($stmt, ':donorBloodGroup', $donorBloodGroup , 100);
	oci_bind_by_name($stmt, ':donorContactNo', $donorContactNo , 100);
 
	oci_execute($stmt);

	$msg = "Thank You Donor....Donor details added successfully" ;

}
?>




<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Abhyan Day - Donor Data Entry Form</h2>
		<center><h5><font color="green"><?php echo $msg ?></font></h5></center>
        
		
		<form method="POST" action="	<?php echo $_SERVER['PHP_SELF']; ?>">
		
		
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Enter Donor User Id</label>
                <div class="col-md-9">
                    <input type="text" name="userId" value="<?php echo $userId ?>" class="form-control input-sm" required/>
                </div>
            </div>
         </div>

		<div class="row">
            <div class="form-actions floatRight">
                <input type="submit" name="fetchDonorDetails" value="View Donor Details" class="btn btn-primary btn-sm">
            </div>
        </div>
		
		</form>
		
		<br>
		
		
		<form method="POST" action="	<?php echo $_SERVER['PHP_SELF']; ?>">
         
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">User ID</label>
                <div class="col-md-9">
                    <input type="text" name="userId" value="<?php echo $userId ?>" class="form-control input-sm" readonly/>
                </div>
            </div>
         </div>
		 
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Abhyan Event Date (DD-Mon-YYYY)</label>
                <div class="col-md-9">
                    <input type="text" name="abhyanEventDate" value="<?php echo $abhyanEventDate ?>" class="form-control input-sm" required/>
                </div>
            </div>
         </div>
		 
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Donor Name</label>
                <div class="col-md-9">
                    <input type="text" name="donorName" value="<?php echo $donorName ?>" class="form-control input-sm" required/>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Donor Addrees</label>
                <div class="col-md-9">
                    <input type="text" name="donorAddress" value="<?php echo $donorAddress ?>" class="form-control input-sm" required/>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Donor Location</label>
                <div class="col-md-9">
                    <input type="text" name="donorLocation" value="<?php echo $donorLocation ?>" class="form-control input-sm" required/>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Donor Blood Group</label>
                <div class="col-md-9">
                    <input type="text" name="donorBloodGroup" value="<?php echo $donorBloodGroup ?>" class="form-control input-sm"  />
                </div>
            </div>
        </div>
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Donor Contact No</label>
                <div class="col-md-9">
                    <input type="text" name="donorContactNo" value="<?php echo $donorContactNo ?>" class="form-control input-sm" required/>
                </div>
            </div>
        </div>
		
        
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" name="addDonorDetails" value="Donor Donated Blood" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
	
	
	
    </div>
 </div>
</div>





<?php include"footer.php" ?>



</body>
</html>	