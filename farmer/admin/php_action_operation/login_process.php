<?php
session_start();
//require("session.php");
require("data_connection.php");

function logedin($a,$b)
{

	
global $conn;
	$sel=" select * from `db_user_login` where ul_email = ? and ul_password = ?";
		$res=$conn->prepare($sel);
		$res->execute(array($a,$b));
		$res->setFetchMode(PDO::FETCH_BOTH);
		return $res->rowCount();


} 
function uid_fetch_func($html)
{
require("data_connection.php");
		$sel=" select * from `db_user_login` where ul_email = ?";
		$res=$conn->prepare($sel);
		$res->execute(array($html));
		$res->setFetchMode(PDO::FETCH_BOTH);
		return $res->fetch();
}

if (isset($_POST["sub"])) 
{
	global $conn;
	$mail=$_POST["email"];
	$pass=$_POST["password"];

//$passs=md5($_POST["password"]);
	$k=logedin($mail,$pass);
	echo $k;
	if ($k==1) 
	{	
	 	$_SESSION['UL_eMAIL']=$mail;	
		 $mid=uid_fetch_func($mail);
	 	$_SESSION['UL_nAME']=$mid['ul_email'];
	 	// $_SESSION['grpid']=$mid['grpid'];
		header("Location:../index.php");
	}
	else
	{
		echo "enter correct password";
	}
}
?>