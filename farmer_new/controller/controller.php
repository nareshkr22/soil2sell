<?php
/**
 * 
 */
class controller 
{
	
	// buyer registration entry "insert operation "
	public function _buyer_registration($shtml)
	{
		
		require("data_connection.php");
		$smt = $conn->prepare('INSERT INTO `db_user_registration`(ur_grpid,ur_name,address,ur_village,ur_taluka,ur_district,ur_contact,type_of_chilly,quntity,price,ur_tag,ur_status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)');
						$smt->execute($shtml);
		header('location:../index.php');
	}

	


	public function _farmer_registration($shtml)
	{
		
		require("data_connection.php");
		$smt = $conn->prepare('INSERT INTO `db_user_registration`(ur_grpid,ur_name,
			address,ur_contact,ur_tag,ur_status) VALUES (?,?,?,?,?,?)');
						$smt->execute($shtml);
		header('location:../index.php');
	}
}

?>