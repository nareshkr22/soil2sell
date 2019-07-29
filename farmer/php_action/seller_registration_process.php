<?php
	// include();
require('../includes/files_include.php');

	function getdata()
	{
		$buyer_grpid=4;
		$buyer_name=strtoupper($_POST['uname']);
		$buyer_address=strtoupper($_POST['address_user']);
		$buyer_village=strtoupper($_POST['usr_village']);
		$buyer_Taluka=strtoupper($_POST['usr_taluka']);
		$buyer_District=strtoupper($_POST['usr_district']);
		$buyer_type_of_chilly=strtoupper($_POST['type_of_chilly']);
		$buyer_quntity=strtoupper($_POST['usr_quantity']);
		$price=strtoupper($_POST['usr_price']);
		$buyer_contact=strtoupper($_POST['contact_number']);
		$buyer_tag=1;
		$buyer_status=1;

		$return_data = array($buyer_grpid,$buyer_name,$buyer_address,$buyer_village,$buyer_Taluka,$buyer_District,$buyer_contact,$buyer_type_of_chilly,$buyer_quntity,$price,$buyer_tag,$buyer_status);
		return $return_data;

	}
	function farmer_getdata()
	{
		$buyer_grpid=2;
		$buyer_name=strtoupper($_POST['uname']);
		$buyer_address=strtoupper($_POST['address_user']);
		$buyer_contact=strtoupper($_POST['contact_number']);
		$buyer_tag=1;
		$buyer_status=1;

		$return_data = array($buyer_grpid,$buyer_name,$buyer_address,$buyer_contact,$buyer_tag,$buyer_status);
		return $return_data;

	}


	if (isset($_POST['submit'])) {
		$data=getdata();	
		$cont->_buyer_registration($data);
	}
	if (isset($_POST['sub'])) {
		$data=farmer_getdata();	
		$cont->_farmer_registration($data);
	}






	


?>