<?php

require('../data_connection.php');

if (isset($_GET['edit']))
 {
	$chk=$_GET['add'];
	$smt = $conn->prepare('UPDATE db_user_registration SET ur_tag=0 WHERE ur_id=?');
            $smt->execute(array($chk));
             header('location:../index.php');           
}
?>