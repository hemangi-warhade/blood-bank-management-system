
<?php


 // ------------------------------------------ //
  function addUser($userId, $password, $confirmPassword, $name, $address , $location , $pincode , $bloodGroup, $contactNo, $type){ //function parameters, two variables.
  
  include"connectivity.php";
  
  if($password != $confirmPassword)
  {
	   return '<font color = "red"> Password and confirm password is not matched !! Please enter correct password </font>' ;
  }
  else 
  {
		$sql = 'SELECT count(*) FROM blood_user_profile where upper(userId) = upper(:userId) ' ;
		$stmt = oci_parse($conn,$sql);

		oci_bind_by_name($stmt, ':userId', $userId , 100);
		oci_execute($stmt);
  
		while($row=oci_fetch_array($stmt))
		{
			$count =  $row[0] ;
		}
   
		if ($count == 1)
		{
			return '<font color = "red"> This User Id already exists. Please choose different User ID </font>' ;
		}
   
		else
		{
			$sql = 'INSERT INTO blood_user_profile'.
			' VALUES( :userId, :password, :name, :address , :location , :pincode , :bloodGroup, :contactNo, :type ) ';

			$stmt = oci_parse($conn,$sql);

			oci_bind_by_name($stmt, ':userId', $userId , 100);
			oci_bind_by_name($stmt, ':password', $password , 100);
			oci_bind_by_name($stmt, ':name', $name,100);
			oci_bind_by_name($stmt, ':address', $address,100);
			oci_bind_by_name($stmt, ':location', $location,100);
			oci_bind_by_name($stmt, ':pincode', $pincode,100);
			oci_bind_by_name($stmt, ':bloodGroup', $bloodGroup,100);
			oci_bind_by_name($stmt, ':contactNo', $contactNo,100);
			oci_bind_by_name($stmt, ':type', $type,100);
 
			oci_execute($stmt);

			return 'Your Registration successfully done. Please click here to <a href="login.php">login</a>' ;  //returns the second argument passed into the function
		}	 
 
	}
}


  // ------------------------------------------ //
  function confirmLogin($userId, $password){ //function parameters, two variables.
  
  include"connectivity.php";
  
	$sql = 'SELECT count(*) FROM blood_user_profile where upper(userId) = upper(:userId) and password = :password' ;
    $stmt = oci_parse($conn,$sql);

	oci_bind_by_name($stmt, ':userId', $userId , 100);
	oci_bind_by_name($stmt, ':password', $password , 100);
 
	oci_execute($stmt);
  
	while($row=oci_fetch_array($stmt))
   {
		$count =  $row[0] ;
		
   }
   
   if ($count == 1)
   {
  
	$sql = 'SELECT userid,password,type FROM blood_user_profile where upper(userId) = upper(:userId) and password = :password' ;
    $stmt = oci_parse($conn,$sql);

	oci_bind_by_name($stmt, ':userId', $userId , 100);
	oci_bind_by_name($stmt, ':password', $password , 100);
 
	oci_execute($stmt);
    
   while($row=oci_fetch_array($stmt))
   {
		$userId = $row[0] ;
		$type = $row[2] ;
		$msg = "sucess" ;
		
   }

		return array ($userId, $type , $msg);  //returns the second argument passed into the function
   }

   else
   {
	    $type = "";
		$msg="User ID and password is incorrect";
	    return array ($userId, $type , $msg);    
   }	   
	
 }
  

  
?>