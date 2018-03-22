<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Delete Abhyan Details | Online Blood Management </title>
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

$abhyanId="";
$abhyanName="";
$abhyanDescription="";
$abhyanLocation="";
$abhyanEventDate="";
$msg="";
	
?>

<!--     When clicks on View Button  -->
<?php
if(isset($_POST['viewAbhyanDetails'])) 
{ 
$abhyanId = $_POST['abhyanId'];



$sql = 'SELECT * FROM abhyan_details where abhyan_id = '.$abhyanId ;
$stmt = oci_parse($conn,$sql);
oci_execute($stmt);
while($row=oci_fetch_array($stmt))
{
	$abhyanId = $row[0] ;
	$abhyanName = $row[1] ;
	$abhyanDescription = $row[2];
	$abhyanLocation = $row[3];
	$abhyanEventDate = $row[4];
}




?>

<?php				

$msg="Abhyan Details Fetched.." ;
	
}
?>	

<!--     When clicks on Update Button  -->
<?php
if(isset($_POST['deleteAbhyanDetails'])) 
{ 
$abhyanId = $_POST['abhyanId'];
$abhyanName = $_POST['abhyanName'];
$abhyanDescription = $_POST['abhyanDescription'];
$abhyanLocation = $_POST['abhyanLocation'];
$abhyanEventDate = $_POST['abhyanEventDate'];


$sql = 'delete from abhyan_details '.
		' where abhyan_id = :abhyanId';

$stmt = oci_parse($conn,$sql);


oci_bind_by_name($stmt, ':abhyanId', $abhyanId , 100);

oci_execute($stmt);

?>

<?php				
$msg="Details deleted for Abhyan - ".$abhyanName ;	
$abhyanId="";
$abhyanName="";
$abhyanDescription="";
$abhyanLocation="";
$abhyanEventDate="";
}

?>	


<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Delete Abhyan Details</h2>
		
		<center><h5><font color="green"><?php echo $msg ?></font></h5></center>
        
		
		<form method="POST" action="	<?php echo $_SERVER['PHP_SELF']; ?>">
		
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Select Abhyan</label>
                <div class="col-md-9">
                    <select name="abhyanId" class="form-control input-sm">
                        
							<?php
							if(isset($_POST['viewAbhyanDetails'])) 
							{ 
							?>
								<option value="<?php echo $abhyanId ?>">  <?php echo $abhyanName ?>  </option>
							<?php
							}
							?>
							
						<?php
						$sql = 'SELECT * from  abhyan_details order by Abhyan_id' ;
						$stmt = oci_parse($conn,$sql);
						oci_execute($stmt);
						
						while($row=oci_fetch_array($stmt))
						{
						?>
							<option value="<?php echo $row[0] ?>">  <?php echo $row[1] ?>  </option>
							
						<?php
						
						}
						?>

                    </select>
               </div>
            </div>
        </div>
		
		
		<div class="row">
            <div class="form-actions floatRight">
                <input type="submit" name="viewAbhyanDetails" value="View Abhyan Details" class="btn btn-primary btn-sm">
            </div>
        </div>
		
		</form>
		
		
		
		
		
		<br>
		
		<form method="POST" action="	<?php echo $_SERVER['PHP_SELF']; ?>">
		
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" >Abhyan Id</label>
                <div class="col-md-9">
                    <input type="text" name="abhyanId" value="<?php echo $abhyanId ?>"  class="form-control input-sm" readonly="readonly" required/>
                </div>
            </div>
         </div>
		
           <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Abhyan Name</label>
                <div class="col-md-9">
                    <input type="text" name="abhyanName" value="<?php echo $abhyanName ?>" class="form-control input-sm" required/>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Abhyan Description</label>
                <div class="col-md-9">
                    <input type="text" name="abhyanDescription" value="<?php echo $abhyanDescription ?>" class="form-control input-sm" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Abhyan Location</label>
                <div class="col-md-9">
                    <input type="text" name="abhyanLocation" value="<?php echo $abhyanLocation ?>" class="form-control input-sm" required/>
                </div>
            </div>
        </div>
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Abhyan Event Date</label>
                <div class="col-md-9">
                    <input type="text" name="abhyanEventDate" value="<?php echo $abhyanEventDate ?>" class="form-control input-sm" required/>
                </div>
            </div>
        </div>
         
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" name="deleteAbhyanDetails" value="Delete Abhyan Details" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
	
	
    </div>
 </div>
</div>





<?php include"footer.php" ?>



</body>
</html>	