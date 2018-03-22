<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>Hospital Finder | Online Blood Management </title>
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

<style>

.CSSTableGenerator {
	margin:0px;padding:0px;
	width:100%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
	
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#ffaa56; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
	vertical-align:middle;
	
	
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:13px;
	font-family:Arial;
	font-weight:bold;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
		background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
	background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);

	background-color:#ff7f00;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
	background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);

	background-color:#ff7f00;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
</style>







<?php

$msg="";
$location = "";

?>

<?php
if(isset($_POST['findHospital'])) 
{ 
$location = '%'.$_POST['location'].'%';
$bloodGroup = $_POST['bloodGroup'];
}
?>




<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Hospital Finder</h2>
		<center><h5><font color="green"><?php echo $msg ?></font></h5></center>
       

		<form method="POST" action="	<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Enter Location</label>
                <div class="col-md-9">
                    <input type="text" name="location" value="" class="form-control input-sm" />
                </div>
            </div>
         </div>
		 
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Select Blood Group</label>
                <div class="col-md-9">
                    <select name="bloodGroup" class="form-control input-sm">
                        <?php
						$sql = 'SELECT * from  blood_details  order by blood_name' ;
						$stmt = oci_parse($conn,$sql);
						oci_execute($stmt);
						
						while($row=oci_fetch_array($stmt))
						{
						?>
				
							<option value=<?php echo $row[1] ?> >  <?php echo $row[1] ?>   </option>
							
						<?php	
						}
						?>
                    </select>
               </div>
            </div>
        </div>
         
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" name="findHospital" value="Find Hospital" class="btn btn-primary btn-sm">
            </div>
        </div>
		<br><br>
    
	</form>
	
	<div class="CSSTableGenerator" >
                <table >
                    <tr>
                        <td>Donor Name</td>
						<td>Donor Address</td>
						<td>Donor Location</td>
						<td>Donor Blood Group</td>
						<td>Donor Contact No </td>
                    </tr>
                    
					
				<?php
	
					$sql = 'select * from blood_user_profile where type = \'H\' and upper(location) like upper(:location) and upper(blood_group) like upper(:bloodGroup) order by name ';
						
						$stmt = oci_parse($conn,$sql);
						oci_bind_by_name($stmt, ':location', $location , 100);
						oci_bind_by_name($stmt, ':bloodGroup', $bloodGroup , 100);
						
						oci_execute($stmt);
						
						while($row=oci_fetch_array($stmt))
						{
							
						?>
				
							<tr>
								<td><?php echo $row[2] ?></td>
								<td><?php echo $row[3] ?> </td>
								<td><?php echo $row[4] ?> </td>
								<td><?php echo $row[6] ?> </td>
								<td><?php echo $row[7] ?> </td>
								
								
							</tr>
							
						<?php	
							}
						?>		
						
					
					
                </table>
            </div>
            
    </div>
 </div>
</div>





<?php include"footer.php" ?>



</body>
</html>	