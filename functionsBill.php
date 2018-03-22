<?php
 // ------------------------------------------ //
  function fetchPurchaseDetails ($bookingId){ //function parameters, two variables.
  
  include"connectivity.php";
  
  
		$sql = 'SELECT *  FROM blood_purchase_Details where booking_id = :bookingId ' ;
		$stmt = oci_parse($conn,$sql);

		oci_bind_by_name($stmt, ':bookingId', $bookingId , 100);
		oci_execute($stmt);
  
		while($row=oci_fetch_array($stmt))
		{
			$bookingId =  $row[0] ;
			$userId =  $row[1] ;
			$bloodName =  $row[3] ;
			$bloodBottleQty =  $row[4] ;
			$patienceName =  $row[5] ;
			$shippingAddress =  $row[6] ;
			$contactNo =  $row[7] ;
			$billAmount =  $row[8] ;
			$createDate =  $row[10] ;
			$updateDate =  $row[11] ;
		}
   
	
	 return array ($bookingId, $userId, $bloodName , $bloodBottleQty , $patienceName , $shippingAddress , $contactNo , $billAmount , $createDate , $updateDate );		
}

?>