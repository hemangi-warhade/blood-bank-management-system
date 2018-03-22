<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Purchase Blood Bottle | Online Blood Management</title>
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
$billAmount = '';
$msg = '';

?>



<?php
 if(isset($_POST['requestForBottle'])) 
 { 
	$userId = $_POST['userId'];
	$bloodId = $_POST['bloodId'];
	$bloodBottleQty = $_POST['bloodBottleQty'];
	$patienceName = $_POST['patienceName'];
	$shippingAddress = $_POST['shippingAddress'];
	$contactNo = $_POST['contactNo'];
	
	$sql = 'SELECT nvl(max(booking_id),0) + 1 FROM blood_purchase_details' ;
	$stmt = oci_parse($conn,$sql);
	oci_execute($stmt);
	while($row=oci_fetch_array($stmt))
	{
		$bookingId = $row[0] ;
	}

	$sql = 'SELECT * FROM blood_details where blood_id = :bloodId' ;
	$stmt = oci_parse($conn,$sql);
	oci_bind_by_name($stmt, ':bloodId', $bloodId , 100);
	oci_execute($stmt);
	while($row=oci_fetch_array($stmt))
	{
		$bloodName = $row[1] ;
		$unitPrice = $row[3] ;
		$bloodBottleQtyAvailable = $row[4];
		
	}
	
	if($bloodBottleQtyAvailable < $bloodBottleQty )
	{
		$msg="<font color=\"red\"> Required Blood bottle quantity is currently not available with blood bank. Maximum bottle you can order is : ".$bloodBottleQtyAvailable ." </font>" ;
	}
	else
	{		
	$billAmount = $bloodBottleQty * $unitPrice ;
	
	$sql = 'INSERT INTO blood_purchase_details'.
       ' VALUES( :bookingId , :userId , :bloodId, :bloodName , :bloodBottleQty, :patienceName , :shippingAddress , :contactNo , :billAmount , \'N\' , sysdate , sysdate)';

	$stmt = oci_parse($conn,$sql);

	oci_bind_by_name($stmt, ':bookingId', $bookingId , 100);
	oci_bind_by_name($stmt, ':userId', $userId , 100);
	oci_bind_by_name($stmt, ':bloodId', $bloodId , 100);
	oci_bind_by_name($stmt, ':bloodName', $bloodName , 100) ;
	oci_bind_by_name($stmt, ':bloodBottleQty', $bloodBottleQty);
	oci_bind_by_name($stmt, ':patienceName', $patienceName);
	oci_bind_by_name($stmt, ':shippingAddress', $shippingAddress);
	oci_bind_by_name($stmt, ':contactNo', $contactNo);
	oci_bind_by_name($stmt, ':billAmount', $billAmount);

	oci_execute($stmt);
	
	$msg="Your Bill Amount is :".$billAmount . '    ----->>    Your Booking Id is : '.$bookingId ;
	
	$sql = 'update blood_Details set blood_bottle_qty = blood_bottle_qty - :bloodBottleQty where blood_id = :bloodId';

	$stmt = oci_parse($conn,$sql);

	oci_bind_by_name($stmt, ':bloodBottleQty', $bloodBottleQty , 100);
	oci_bind_by_name($stmt, ':bloodId', $bloodId , 100);
	oci_execute($stmt);
	
	}

}
?>

<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Purchase Blood Bottle</h2>
		
		<b><center><h5><font color="green"><?php echo $msg ?></font></h5></center></b>
		<b><center><h5><font color="red">Please ready all doctor's document when you receive Blood bottle. It is mandatory to submit photocopy of doctor receipt to the delivery boy.</font></h5></center></b>
        
		<form method="POST" action="	<?php echo $_SERVER['PHP_SELF']; ?>">
		
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" >User Id</label>
                <div class="col-md-9">
                    <input type="text" name="userId"  value="<?php echo $_SESSION['login_user'] ?>" class="form-control input-sm" readonly/>
                </div>
            </div>
         </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Which Blood Group Require?</label>
                <div class="col-md-9">
                    <select name="bloodId" class="form-control input-sm">>
			
					<?php
						$sql = 'SELECT * from  blood_details  order by blood_name' ;
						$stmt = oci_parse($conn,$sql);
						oci_execute($stmt);
						
						while($row=oci_fetch_array($stmt))
						{
				?>
				
							<option value=<?php echo $row[0] ?> >  <?php echo $row[1] . '   (  '.$row[4]   . ' Blood bottles in stock)'?>   </option>
							
					<?php	
						}
					?>
				
			</select>
               </div>
            </div>
        </div>
		 
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable">Blood Bottle Quantity</label>
                <div class="col-md-9">
                    <input type="text" name="bloodBottleQty" placeholder="Enter Blood Bottle Quantity" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" >Patient Name</label>
                <div class="col-md-9">
                    <input type="text" name="patienceName" placeholder="Enter Patient  Name" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable">Shipping Address</label>
                <div class="col-md-9">
                    <input type="text" name="shippingAddress" placeholder="Enter Shipping Address" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable">Contact No</label>
                <div class="col-md-9">
                    <input type="text" name="contactNo" placeholder="Enter Your Contact No" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
		
		
		
		<div class="row">
            <div class="form-actions floatRight">
                <input type="submit" value="Request for Blood Bottle" name="requestForBottle" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
    </div>
 </div>
</div>



<?php include"footer.php" ?>


</body>
</html>	