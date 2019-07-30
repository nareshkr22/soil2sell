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
		$str="UPDATE db_user_registration SET ur_name=?,
		address=?,
		ur_village=?,
		ur_taluka=?,
		ur_district=?,
		ur_contact=?,
		type_of_chilly=?,
		quntity=?,
		price=? WHERE ur_id=?";
		$res=$conn->prepare($str);
		$res->execute($shtml);
		 // header('location:../index.php');
	}
	public function _farmer1_registration($shtml)
	{
		
		require("data_connection.php");
		$smt = $conn->prepare('INSERT INTO `db_product_data`( pd_uid, pd_vigha, pd_seed_gram, pd_remak, pd_status_remark) VALUES (?,?,?,?,?)');
						$smt->execute($shtml);
		 header('location:../index.php');
	}


	public function _farmerupd_registration($shtml)
	{
		
		require("data_connection.php");
		$smt = $conn->prepare('UPDATE db_product_data SET pd_vigha=?,pd_seed_gram=?,pd_remak=?,pd_status_remark=? WHERE pd_uid=?');
						$smt->execute($shtml);
		 header('location:../index.php');
	}
}

?>