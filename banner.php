<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
 
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <center><img src="images/front1.jpg" height="400" width="800" alt="Chania"></center>
      <div class="carousel-caption">
		<a href="register.php"><font color="yellow"><h3>Become Donor</h3></font></a>
      </div>
    </div>

    <div class="item">
     <center><img src="images/front2.jpg" height="400" width="800" alt="Chania"></center>
      <div class="carousel-caption">
		
	  <?php 
	  if( isset($_SESSION['login_user']) )
	  {
			if($_SESSION['type'] == "D" || $_SESSION['type'] == "H" || $_SESSION['type'] == "A")
			{
	  ?>
				<a href="buyBlood.php"><font color="yellow"><h3>Purchase Blood</h3></font></a>
	  <?php
			}
	  }
	  else
	  {
	  ?>		<a href="login.php"><font color="yellow"><h3>Purchase Blood</h3></font></a>	
	
      <?php
	  }
	  ?>
				
      </div>
    </div>

    <div class="item">
      <center><img src="images/front3.jpg" height="400" width="800" alt="Chania"></center>
      <div class="carousel-caption">
       <a href="viewAbhyanDetails.php"><font color="yellow"><h3>Abhyan's</h3></font></a>
      </div>
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>