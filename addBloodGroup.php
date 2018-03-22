<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Add Blood Group | Online Blood Management </title>
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
$msg='';
?>

<?php
 if(isset($_POST['addBlood'])) 
 { 
		$bloodName = $_POST['bloodName'];
		$unitPrice = $_POST['unitPrice'];
		$bloodBottleQty = $_POST['bloodBottleQty'];
	
		$sql = 'SELECT nvl(max(blood_id),0) + 1 FROM blood_details' ;
		$stmt = oci_parse($conn,$sql);
		oci_execute($stmt);
		while($row=oci_fetch_array($stmt))
		{
			$bloodId = $row[0] ;
		}

  
		$sql = 'INSERT INTO blood_details'.
       ' VALUES( :bloodId, :bloodName , null , :unitPrice , :bloodBottleQty)';

		$stmt = oci_parse($conn,$sql);

		oci_bind_by_name($stmt, ':bloodId', $bloodId , 100);
		oci_bind_by_name($stmt, ':bloodName', $bloodName , 100);
		oci_bind_by_name($stmt, ':unitPrice', $unitPrice , 100);
		oci_bind_by_name($stmt, ':bloodBottleQty', $bloodBottleQty , 100);
		oci_execute($stmt);

		$msg = 'New Blood Group added successfully..  Unique Blood  ID generate is  '.$bloodId;  //returns the second argument passed into the function
  }

 
	
?>

<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Add New Blood Group Details</h2>
		<center><h5><font color="green"><?php echo $msg ?></font></h5></center>
        <form method="POST" action="	<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Blood Group Name</label>
                <div class="col-md-9">
                    <input type="text" name="bloodName" value="" class="form-control input-sm" required/>
                </div>
            </div>
         </div>
         
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Unit Blood Bottle Price</label>
                <div class="col-md-9">
                    <input type="text" name="unitPrice" value="" class="form-control input-sm" required/>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Blood Bottle Quantity Available</label>
                <div class="col-md-9">
                    <input type="text" name="bloodBottleQty" value="" class="form-control input-sm" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" name="addBlood" value="Add New Blood Group" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
    </div>
 </div>
</div>





<?php include"footer.php" ?>



</body>
</html>	