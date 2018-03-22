
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bill Generation | Online Blood Management</title>
    <link rel="stylesheet" href="billstyle.css" media="all" />
  </head>
  
  
  <body>
  
<?php include"functionsBill.php" ?>

<?php
list ($bookingId, $userId, $bloodName , $bloodBottleQty , $patienceName , $shippingAddress , $contactNo , $billAmount , $createDate , $updateDate ) = fetchPurchaseDetails($_GET['bookingId']);

?>

  <header class="clearfix">
      <div id="logo">
        <img src="billlogo.png" "width=300 height=50">
      </div>
      <h1>INVOICE</h1>
      <div id="company" class="clearfix">
        <div>Red Hat Blood Bank</div>
        <div>Swami Vivekanand<br /> Chembur, Mumbai</div>
        <div>400071</div>
        <div><a href="mailto:contact@redhatbloodbak.com">contact@redhatblood.com</a></div>
      </div>
      <div id="project">
	    <div><span>Bill No   </span> <?php echo $bookingId ?></div>
        <div><span>Customer</span> <?php echo $userId ?></div>
        <div><span>Address</span> <?php echo $shippingAddress ?></div>
        <div><span>Contact No</span> <?php echo $contactNo ?></div>
        <div><span>Purchase On</span><?php echo $createDate ?></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
			<th>PATIENT NAME</th>
			<th>BLOOD GROUP</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
		    <td class="grand total"><?php echo $patienceName ?></td>
            <td class="grand total"><?php echo $bloodName ?></td>
            <td class="grand total"><?php echo $bloodBottleQty ?></td>
            <td class="grand total">Rs. <?php echo $billAmount ?></td>
          </tr>
          <tr>
           
      
            
         
          <tr>
		  
            <td colspan="3" class="grand total">GRAND TOTAL</td>
            <td class="grand total">Rs. <?php echo $billAmount ?></td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>Please Note : </div>
        <div class="notice"><b><font color="red" >Full Payment will be Cash On delivery.</font></b></div>
		<div class="notice"><b><font color="blue" >You will receive Hard copy of this bill at the time of blood bottle delivery.</font></b></div>
		
		
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>