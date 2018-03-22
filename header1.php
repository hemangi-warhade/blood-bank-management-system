<?php session_start() ; ?>	

<nav class="navbar navbar-default" role="navigation">
 <?php include"connectivity.php" ?>
 
 
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
			
			<?php 
				if( isset($_SESSION['login_user']) )
			    {
					if($_SESSION['type'] == "D" || $_SESSION['type'] == "H")
					{ 
					?>
		       			 
						<li><a href="index.php">Home</a></li>
						
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Quick Finder<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="donorFinder.php">Donor Finder</a></li>
							<li><a href="hospitalFinder.php">Hospital Finder</a></li>
						</ul>
						</li>
						
						
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Abhyan<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="viewAbhyanDetails.php">View All Abhyan</a></li>
							<li><a href="donorsInformation.php">Donor's Donated Blood</a></li>
						</ul>
						</li>
						
						<li><a href="bloodBottleRates.php">Blood Rate</a></li>	
						<li><a href="buyBlood.php">Buy Blood </a></li>
						<li><a href="myPurchaseHistory.php">Purchase History</a></li>

						
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="myProfile.php"> Edit profile</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
						</li>
					


						
						<li><a href="contact.php">Help</a></li>
					
					<?php
					}
					
					if($_SESSION['type'] == "A")
					{
					?>
						
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blood Group Mgmt<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="addBloodGroup.php">Add New Blood Group</a></li>
							<li><a href="updateBloodGroup.php">Update Blood Group Details</a></li>
							<li><a href="deleteBloodGroup.php">Delete Blood Group Details</a></li>
						</ul>
						</li>
		        
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blood Abhyan Mgmt<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="addAbhyan.php">Add New Abhyan</a></li>
							<li><a href="updateAbhyan.php">Update Abhyan</a></li>
							<li><a href="deleteAbhyan.php">Delete Abhyan</a></li>
						</ul>
						</li>
				
						<li><a href="abhyanDayDataEntry.php">Abhyan Day Data Entry</a></li>
			
						<li><a href="viewBloodPurchaseDetails.php">Blood Booking Mgmt</a></li>
						<li><a href="logout.php">Logout</a></li>
				
					<?php
					}
				
				}
				else
				{
				?>
					<li><a href="index.php">Home</a></li>					
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Quick Finder<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="donorFinder.php">Donor Finder</a></li>
							<li><a href="hospitalFinder.php">Hospital FInder</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Abhyan<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="viewAbhyanDetails.php">View All Abhyan</a></li>
							<li><a href="donorsInformation.php">Donor's Donated Blood</a></li>
						</ul>
					</li>
					
					
					<li><a href="bloodBottleRates.php">Blood Bottle Rates</a></li>		
					<li><a href="login.php">Login</a></li>	
					<li><a href="contact.php">Help</a></li>
								

				<?php	
				
				}
				
				?>

		       
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
	
	<br>
	<?php 
				if( isset($_SESSION['login_user']) )
			    {
					if($_SESSION['type'] == "D" || $_SESSION['type'] == "H")
					{
					?>
						<marquee behavior="scroll" direction="left" width="100%">
				       <?php
						$sql = 'select * from abhyan_details where abhyan_event_date >= sysdate and rownum=1 order by abhyan_event_date ' ;
						$stmt = oci_parse($conn,$sql);
						oci_execute($stmt);
						while($row=oci_fetch_array($stmt))
						{	
							$abhyanName =  $row[1] ;
							$abhyanLocation = $row[3];
							$abhyanEventDate =  $row[4] ;
							
						}
						?>
						<font color = "Gren">
						Upcoming Blood Abhyan : <?php echo $abhyanName?> organized on  <?php echo $abhyanEventDate ?> at Location : <?php echo $abhyanLocation ?>
						<a href="viewAbhyanDetails.php"> Click here to view More Abhyan's details.... </a></blink>
						</marquee>
					<?php
					}
				}
				else
			    {
					if(1==1)
					{
					?>
						<marquee behavior="scroll" direction="left" width="100%">
				       <?php
						$sql = 'select * from abhyan_details where abhyan_event_date >= sysdate and rownum=1 order by abhyan_event_date ' ;
						$stmt = oci_parse($conn,$sql);
						oci_execute($stmt);
						while($row=oci_fetch_array($stmt))
						{	
							$abhyanName =  $row[1] ;
							$abhyanLocation = $row[3];
							$abhyanEventDate =  $row[4] ;
							
						}
						?>
						<font color = "Gren">
						Upcoming Blood Abhyan : <?php echo $abhyanName?> organized on  <?php echo $abhyanEventDate ?> at Location : <?php echo $abhyanLocation ?>
						<a href="viewAbhyanDetails.php"> Click here to view More Abhyan's details.... </a></blink>
						</marquee>
					<?php
					}
				}
	?>		
 