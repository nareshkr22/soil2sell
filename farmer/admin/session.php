<?php
session_start();
if(!isset($_SESSION['UL_eMAIL']))
 {
  header("Location:login.php");
}

?>