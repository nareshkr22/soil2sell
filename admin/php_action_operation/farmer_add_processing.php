<?php
	// include();
require('../includes/files_include.php');

	

	function farmer()
	{
		$buyer_vigha=$_POST['usr_Vigha'];
		$buyer_seed=$_POST['usr_Seed'];
		$buyer_remark=strtoupper($_POST['usr_remark']);
		$buyer_status_remark=strtoupper($_POST['usr_Status_Remark']);
		$hide=$_POST['user_hide'];
		$arrayName = array($hide,$buyer_vigha,$buyer_seed,$buyer_remark,$buyer_status_remark);
	return $arrayName;
	}

	
	if (isset($_POST['sub'])) {
		$data1=farmer();	
		$cont->_farmer1_registration($data1);
	}





	


?>