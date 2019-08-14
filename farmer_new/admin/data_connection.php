<?php

	$dbtype		=	"mysqli";
	$dbhost		=	"localhost";	
	$dbname		=	"soil2sell";
	$dbuser		=	"root";		
	$dbpass		=	"";			 
	$conn		=	new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
?>