<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Add Abhyan | Online Blood Management </title>
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

<?php
$msg="";
?>

<?php
if(isset($_POST['addNewAbhyan'])) 
{ 
$abhyanName = $_POST['abhyanName'];
$abhyanDescription = $_POST['abhyanDescription'];
$abhyanLocation = $_POST['abhyanLocation'];
$abhyanEventDate = $_POST['abhyanEventDate'];

$sql = 'SELECT nvl(max(abhyan_id),0) + 1 FROM abhyan_details' ;
$stmt = oci_parse($conn,$sql);
oci_execute($stmt);
while($row=oci_fetch_array($stmt))
{
	$abhyanId = $row[0] ;
}


$sql = 'INSERT INTO ABHYAN_DETAILS'.
       ' VALUES( :abhyanId , :abhyanName, :abhyanDescription, :abhyanLocation , :abhyanEventDate)';

$stmt = oci_parse($conn,$sql);

oci_bind_by_name($stmt, ':abhyanId', $abhyanId , 100);
oci_bind_by_name($stmt, ':abhyanName', $abhyanName , 100);
oci_bind_by_name($stmt, ':abhyanDescription', $abhyanDescription);
oci_bind_by_name($stmt, ':abhyanLocation', $abhyanLocation);
oci_bind_by_name($stmt, ':abhyanEventDate', $abhyanEventDate);

oci_execute($stmt);

?>

<?php				
$msg="Abhyan details added successfully and unique Abhyan id generated is ".$abhyanId;	
}
?>	


<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Add New Abhyan Details</h2>
		
		<center><h5><font color="green"><?php echo $msg ?></font></h5></center>
       
	   <form method="POST" action="	<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Abhyan Name</label>
                <div class="col-md-9">
                    <input type="text" name="abhyanName" value="" class="form-control input-sm" required/>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Abhyan Description</label>
                <div class="col-md-9">
                    <input type="text" name="abhyanDescription" value="" class="form-control input-sm" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Abhyan Location</label>
                <div class="col-md-9">
                    <input type="text" name="abhyanLocation" value="" class="form-control input-sm" required/>
                </div>
            </div>
        </div>
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Abhyan Event Date</label>
                <div class="col-md-9">
                    <input type="text" name="abhyanEventDate" value="" class="form-control input-sm" required/>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" name="addNewAbhyan" value="Add New Abhyan" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
    </div>
 </div>
</div>





<?php include"footer.php" ?>



</body>
</html>	