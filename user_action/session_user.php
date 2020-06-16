<?php	
	session_start();
	include ('../connectdb.php');
	if(!isset($_COOKIE['ID']) && !isset($_SESSION['ID']))
		header('location:index.php');
	else if(isset($_SESSION['ID']))
		$ID=$_SESSION['ID'];
	else if(isset($_COOKIE['ID']))
		$ID=$_COOKIE['ID'];
?>